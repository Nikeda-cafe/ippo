<?php get_header(); ?>    
<?php if(have_posts()):
        while(have_posts()):
            the_post(); ?>
            <article class="container">
                <section class="section1">
                    <div class="cat-cont">
                        <?php the_category(); ?>
                    </div>
                    <?php the_title('<h1 class="title">',"</h1>"); ?>
                    <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                        <?php echo esc_html(get_the_date("Y年m月d日")); ?>
                    </time>
                </section>
                <section class="section2">
                    <?php the_content();?>
                    <?php the_post_navigation(); ?>
                </section>
            </article>
        <?php endwhile;
    endif;
?>
<?php get_footer() ?>

