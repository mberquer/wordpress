<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<div class="contact-content">
    <h1><?php the_title(); ?>.</h1>
    <p>A desire for a big big party or a very select congress? Contact us.</p>
</div>

<div class="infos-content">
    <div class="company-info">
        <div>
            <h2>Location</h2>
            <div class="location">242 Rue du Faubourg Saint-Antoine </div>
            <div class="location">75020 Paris FRANCE</div>
        </div>
        <div>
            <div class="manager">
                <h2>Manager</h2>
                <div class="phone">+33 1 53 31 25 23</div>
                <div class="email">info@company.com</div>
            </div>
        </div>
        <div>
            <div class="ceo">
                <h2>CEO</h2>
                <div class="phone">+33 1 53 31 25 25</div>
                <div class="email">ceo@company.com</div>
            </div>
        </div>
    </div>
</div>

<div class="sections">

    <div class="relative-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/png/10.png" alt="ESGI" class="absolute-right-image">
    </div>

    <div class="contact-content">
        <h1>Write us here</h1>
        <p>Go! Don’t be shy.</p>
        <form id="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <input type="hidden" name="action" value="send_contact_form">
            <?php wp_nonce_field('contact_form_nonce', 'contact_form_nonce_field'); ?>

            <input class="none" type="text" name="subject" placeholder="Subject">
            <div class="line"></div>
            <input class="none" type="email" name="email" placeholder="Email" required>
            <div class="line"></div>
            <input class="none" type="tel" name="phone" placeholder="Phone no.">
            <div class="line"></div>
            <div class="message-input-container">
                <div class="rectangle"><label class="message-label">Message</label></div>
                <textarea class="none message-textarea" name="message"></textarea>
                <div class="line"></div>
            </div>
            <div class="line"></div>
            <button class="submit-button none" type="submit">Send</button>
        </form>

    </div>
</div>

<?php get_footer(); ?>