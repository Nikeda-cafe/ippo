<?php get_header(); ?>
<div class="posthead container">
    <h1><?php the_archive_title() ?></h1>
    <?php if(is_category()): ?>
        <p class="sub-title">CategoryArchive</p>
    <?php elseif(is_month()): ?>
        <p class="sub-title">MonthArchive</p>
    <?php endif; ?>
</div>
<main class="container myposts">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article class="postlist">
        <a href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()): ?>
                <figure>
                    <?php the_post_thumbnail(); ?>
                </figure>
            <?php endif; ?>
        </a>
        <?php the_title("<h2>","</h2>"); ?>
    </article>
<?php endwhile; endif; ?>
</main>
<div class="pagi">
    <?php $page = array(
        "prev_text" => "<span>&larr;</span>",
        "next_text" => "<span>&rarr;</span>"
    ); ?>
    <?php the_posts_pagination($page); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>