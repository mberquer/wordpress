<?php
// Logique du thème

// Intégrer la feuille de style principale
add_action('wp_enqueue_scripts', 'esgi_enqueue_assets');
function esgi_enqueue_assets()
{
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/main.js',);

    // Injection de variables dans js
    $big = 999999999; // need an unlikely integer
    $base = str_replace($big, '%#%', esc_url(get_pagenum_link($big)));

    $vars = [
        'ajaxURL' => admin_url('admin-ajax.php'),
        'basePagination' => $base
    ];

    wp_localize_script('main', 'esgi', $vars);
}

// Ajout des supports au thème
add_action('after_setup_theme', 'esgi_theme_setup');
function esgi_theme_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'esgi_register_nav_menu', 0);
function esgi_register_nav_menu()
{
    register_nav_menus([
        'primary_menu' => __('Primary Menu', 'ESGI'),
        'footer_menu'  => __('Footer Menu', 'ESGI'),
        'header_menu'  => __('Header Menu', 'ESGI'), // Registering the header menu
    ]);
}

// Fonction "helper" de génération d'icones svg
function esgi_getIcon($name)
{
    // ... (icon generation code)
}

// Customizer du thème
add_action('customize_register', 'esgi_customize_register');
function esgi_customize_register($wp_customize)
{
    // ajout d'une section
    $wp_customize->add_section('esgi_section', [
        'title' => __('Paramètres ESGI'),
        'description' => __('Customisation du thème !'),
        'panel' => '', // Not typically needed.
        'priority' => 0,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ]);

    // ajout d'un setting
    $wp_customize->add_setting('main_color', [
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '#3f51b5',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_hex_color',
        'sanitize_js_callback' => '', // Basically to_json.
    ]);

    // ajout d'un controle
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main_color', [
        'label' => __('Couleur principale', 'ESGI'),
        'section' => 'esgi_section',
    ]));

    // ajout d'un setting
    $wp_customize->add_setting('is_dark', [
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esgi_bool_sanitize',
        'sanitize_js_callback' => '', // Basically to_json.
    ]);

    // Ajout d'un control
    $wp_customize->add_control('is_dark', [
        'type' => 'checkbox',
        'priority' => 1, // Within the section.
        'section' => 'esgi_section', // Required, core or custom.
        'label' => __('Dark mode'),
        'description' => __('Black is beautiful :)'),
    ]);

    // ajout d'un setting
    $wp_customize->add_setting('has_sidebar', [
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esgi_bool_sanitize',
        'sanitize_js_callback' => '', // Basically to_json.
    ]);

    // Ajout d'un control
    $wp_customize->add_control('has_sidebar', [
        'type' => 'checkbox',
        'priority' => 1, // Within the section.
        'section' => 'esgi_section', // Required, core or custom.
        'label' => __('Afficher la sidebar'),
        'description' => __('(Uniquement sur les articles)'),
    ]);
}

function esgi_bool_sanitize($value)
{
    return is_bool($value) ? $value : false;
}

// Application des styles du customizer
add_action('wp_head', 'esgi_custom_style');
function esgi_custom_style()
{
    echo '<style>
            :root{
                --main-color:' . get_theme_mod('main_color') . ';
            }
            </style>';
}

add_filter('body_class', 'esgi_body_class', 999, 1);
function esgi_body_class($classes)
{
    if (get_theme_mod('is_dark')) {
        $classes[] = 'dark';
    }
    return $classes;
}

// Déclaration des routes ajax
add_action('wp_ajax_load_posts', 'ajax_load_posts'); // action déclenchée par un call contenant une propriété action = 'load_posts'
add_action('wp_ajax_nopriv_load_posts', 'ajax_load_posts');

function ajax_load_posts()
{
    $page = $_GET['page'];
    $base = $_GET['base'];
    // Ouverture du buffer
    ob_start();
    // inclusion posts-list
    include('template-parts/posts-list.php');
    // echo le contenu du buffer
    echo ob_get_clean();
    wp_die();
}
?>
