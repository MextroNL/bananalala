<?php get_header(); ?>
<div id="content">
    <!-- Posts -->
<!--    --><?php //query_posts('posts_per_page=2'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post-block">
            <!-- Thumbnail -->
            <div class="post-image"><?php the_post_thumbnail(); ?></div>

            <!-- Title -->
            <h2 class="post-title"><?php the_title(); ?></h2><br>
            <!-- Subtitle -->
            <h5 class="post-subtitle">Posted by: <?php the_author() ?> - <?php the_date() ?></h5>
            <!-- Content -->
            <div class="post-content"><?php the_excerpt(); ?></div>

        </div>
    <?php endwhile;?>
    <nav id="page-nav">
        <ul class="clear-fix">
            <li class="prev-link"><?php previous_posts_link('previous page') ?></li>
            <li class="next-link"><?php next_posts_link('next page') ?></li><i class=""></i>
        </ul>
    </nav>
    <?php
    else:
        // Insert any content or load a template for no posts found.
    endif;
    wp_reset_query();?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
