<?php get_header(); ?>
    <div id="cont_first" class="container">
        <div id="contents">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
