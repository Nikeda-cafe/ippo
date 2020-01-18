<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="container">
        <h3 class="sub-title"><?php echo esc_html(strtoupper(get_post_field("post_name"))); ?></h3>
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>