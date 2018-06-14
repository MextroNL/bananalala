<?php /*Template Name: Recepten*/ ?>
<?php get_header(); ?>

<div class="recepten-posts">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="row recepten-rij">
    <!-- Posts loop -->
    <?php query_posts('cat=5&showposts=4'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col recepten-block">
                <!-- Thumbnail -->
                <div class="recepten-image"><?php the_post_thumbnail(); ?></div>
                <!-- Title -->
                <a href="<?php the_permalink(); ?>"><h2 class="recepten-title"><?php the_title(); ?></h2></a>
                <!-- Subtitle -->
                <h5 class="recepten-subtitle">Posted by: <?php the_author() ?><br><?php echo get_the_date(); ?></h5>
                <!-- Content -->
                <div class="recepten-content"><?php echo wp_trim_words( get_the_content(), 50, '...' );?></div>
                <a href="<?php the_permalink(); ?>" id="read-more-recepten" class="read-more">Read More</a>

            </div>

        <?php endwhile;?>

            <?php
        else:
        endif;
    wp_reset_query();?>

    </div>
</div>



<?php get_footer(); ?>
