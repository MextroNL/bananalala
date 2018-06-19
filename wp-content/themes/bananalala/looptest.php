<?php get_header(); ?>
<div class="page">

    <!-- Featured -->

    <!-- Featured Posts loop -->
    <?php query_posts('cat=4&showposts=1'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row featured-post-block">
            <div class="col-lg-6">
            <!-- Title -->
                <h2 class="featured-post-title"><?php the_title(); ?></h2>
            <!-- Content -->
                <div class="featured-post-content"><?php echo wp_trim_words( get_the_content(), 150, '...' );?></div></div>
            <!-- Thumbnail -->
                <div class="col-lg-6 featured-post-image"><?php the_post_thumbnail(); ?></div>

        </div>
    <?php endwhile;
        else:
        endif;
    wp_reset_query();?>


    <!-- Normal Posts -->

<div id="post-scroll" class="row content">
    <div class="col-lg-10">
    <!-- Posts loop -->
<?php query_posts('cat=3'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post-block">
            <!-- Thumbnail -->
            <div class="post-image"><?php the_post_thumbnail(); ?></div>
            <!-- Title -->
            <a href="<?php the_permalink(); ?>"> <h2 class="post-title"><?php the_title(); ?></h2></a><br>
            <!-- Subtitle -->
            <h5 class="post-subtitle">Posted by: <?php the_author() ?> - <?php the_date() ?></h5>
            <!-- Content -->
            <div class="post-content"><?php echo wp_trim_words( get_the_content(), 150, '...' );?></div>
            <a href="<?php the_permalink(); ?>#post-scroll" id="read-more-index" class="read-more">Read More</a>

        </div>
    <?php endwhile;?>
    <nav id="page-nav">
        <ul class="clear-fix">
            <li class="prev-link"><?php previous_posts_link('previous page') ?></li>
            <li class="next-link"><?php next_posts_link('next page') ?></li>

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



<?php
$args = array(
    'posts_per_page' => 10,
    'post_type'      => 'post',
    'paged'          => get_query_var( 'paged' ),
);
$wp_query = new WP_Query( $args );
while ( $wp_query->have_posts() ) : $wp_query->the_post();
    get_template_part( 'templates/content', 'posts' );
endwhile;

/*
  PAGINATION
*/
if ( function_exists( 'page_navi' ) ) {
    ?>

    <div id="pagination">
        <?php page_navi(); ?>
    </div>
<?php }
wp_reset_query(); ?>