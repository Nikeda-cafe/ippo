<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="container">
    <!-- <p><?php echo esc_url(get_home_url()); ?></p> -->
        <?php the_title("<h1 class='page-title'>","</h1>") ?>
        <h3 class="sub-title"><?php echo esc_html(strtoupper(get_post_field("post_name"))); ?></h3>
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>