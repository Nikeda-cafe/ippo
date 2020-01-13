<?php get_header(); ?>
<div class="posthead container">
    <h1>最新情報</h1>
    <p class="sub-title">Recent</p>
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
    <?php the_posts_pagination(array(
        "prev_text" => "<span>&larr;</span>",
        "next_text" => "<span>&rarr;</span>"
    )); ?>
</div>
<?php get_footer(); ?>