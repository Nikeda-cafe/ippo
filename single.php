<?php get_header(); ?>    
<?php if(have_posts()):
        while(have_posts()):
            the_post(); ?>
            <?php the_title('<h1>',"</h1>"); ?>
            <div class="container">
                <?php the_content();?>
            </div>
        <?php endwhile;
    endif;
?>
</body>
</html>
