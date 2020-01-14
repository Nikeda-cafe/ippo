<section class="myprofile">
    <h2 class="widgettitle">PROFILE</h2>
    <figure>
        <img src="<?php echo esc_attr(get_stylesheet_directory_uri().'/images/profile.jpg'); ?>" alt="profile">
    </figure>
    <strong><?php the_author_meta("display_name"); ?></strong>
    <p><?php the_author_meta("description"); ?></p>
</section>
<?php if(is_active_sidebar("sidebar-a")): ?>
    <?php dynamic_sidebar("sidebar-a") ?>
<?php endif; ?>