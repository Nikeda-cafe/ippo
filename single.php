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
                <section class="section3 alignwide">
                    <h3 class="sub-title">Related</h3>
                    <div class="related">
                        <?php
                            $post_id = get_the_ID();
                            $cat = wp_get_post_categories($post_id);
                            $arr = array(
                                "category__in" => $cat,
                                "orderby" => "rand",
                                "posts_per_page" => "4",
                                "exclude" => $post_id
                            );
                            $posts = get_posts($arr);
                            foreach($posts as $post):
                                setup_postdata($post);
                        ?>
                        <div class="relatecard">
                            <?php if(has_post_thumbnail()): ?>
                                <figure>
                                    <?php the_post_thumbnail(); ?>
                                </figure>
                            <?php endif; ?>
                                <?php the_title("<a>","</a>"); ?>
                        </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </section>
            </article>
        <?php endwhile; 
    endif;
?>
<?php get_footer() ?>

