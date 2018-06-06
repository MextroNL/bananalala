<?php get_header(); ?>
<div class="page">

    <!-- Featured -->

    <!-- Featured Posts loop -->
    <?php query_posts('cat=4&showposts=1'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row featured-post-block">
            <div class="col-lg-6">
            <!-- Title -->
                <h2 class="featured-post-title"><?php the_title(); ?></h2><br>
            <!-- Content -->
                <div class="featured-post-content"><?php the_content(); ?></div></div>
            <!-- Thumbnail -->
                <div class="col-lg-6 featured-post-image"><?php the_post_thumbnail(); ?></div>

        </div>
    <?php endwhile;
        else:
        endif;
    wp_reset_query();?>


    <!-- Normal Posts -->

<div class="row content">
    <div class="col-lg-10">
    <!-- Posts loop -->
<?php query_posts('cat=3'); ?>
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
            <a href="<?php previous_posts_link('previous page')?>"><li class="prev-link"></li></a>
            <li class="next-link"><?php next_posts_link('next page') ?></li><i class=""></i>
        </ul>
    </nav>
    </div>
    <?php
    else:
    endif;
    wp_reset_query();?>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
