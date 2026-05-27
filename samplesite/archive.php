<?php get_header(); ?>
    <div id="cont_first" class="container">
        <div id="contents">
            <div id="cont_left">
                <div class="information">
                    <h2>Blog</h2>
                    <dl>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <dt><?php the_time('Y-m-d'); ?></dt>
                        <dd>
                            <div class="b_img">
                                <?php the_post_thumbnail('thumbside'); ?>
                            </div>
                            <div class="b_right">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </dd>
                        <?php endwhile; endif; ?>   
                    </dl>
                </div>
                <div class="information">
                    <h2>INFORMATION</h2>
                    <dl>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <dt><?php the_time('Y-m-d'); ?></dt>
                        <dd>
                        <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                            <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                        </span>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>を掲載しました。
                        </dd>  
                         <?php endwhile; endif; ?>
                    </dl>
                </div>
                <?php wp_pagenavi(); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>