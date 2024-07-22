<?php
/*
Template Name: Reply
*/
get_header();
?>

<div class="partners-content">
    <h1><?php the_title(); ?>.</h1>
</div>


<div class="sections">
    <div class="contact-content">
        <h2>Leave a reply</h2>
        <form method="post">
            <input class="none" type="text" name="subject" placeholder="Full name">
            <div class="line"></div>
            <div class="message-input-container">
                <div class="rectangle"><label class="message-label">Message</label></div>
                <textarea class="none message-textarea" name="message"></textarea>
            </div>
            <div class="line"></div>
            <button class="submit-button none" type="submit">Submit</button>
        </form>

    </div>
</div>



</div>
</div>

<?php get_footer(); ?>