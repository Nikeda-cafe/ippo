<?php get_header(); ?>    
<?php if(have_posts()):
        while(have_posts()):
            the_post(); ?>
            <div class="cat-cont">
                <?php the_category(); ?>
            </div>
            <?php the_title('<h1>',"</h1>"); ?>
            <div class="container">
                <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                    <?php echo esc_html(get_the_date("Y年m月d日")); ?>
                </time>
                <?php the_content();?>
                <?php the_post_navigation(); ?>
            </div>
        <?php endwhile;
    endif;
?>
</body>
</html>

