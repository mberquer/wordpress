<?php
/*
Template Name: About Us
*/
get_header();
get_template_part('template-parts/about-us');
?>
<div class="team-section">
    <h2>Our Team</h2>
    <div class="team-members">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="team-member">
                <img src="<?php echo esc_url(get_theme_mod("team_member_{$i}_photo", get_template_directory_uri() . "/images/png/team$i.png")); ?>" alt="Team Member <?php echo $i; ?>">
                <h3><?php echo esc_html(get_theme_mod("team_member_{$i}_role", "Role $i")); ?></h3>
                <p class="phone"><?php echo esc_html(get_theme_mod("team_member_{$i}_phone", "+33 1 53 31 25 23")); ?></p>
                <p class="email"><?php echo esc_html(get_theme_mod("team_member_{$i}_email", "email$i@example.com")); ?></p>
            </div>
        <?php endfor; ?>
    </div>
</div>
<?php get_footer(); ?>