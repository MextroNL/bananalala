<?php /*Template Name: Loop Test*/ ?>
<?php get_header(); ?>
<div class="page">

    <!-- Featured -->

    <!-- Featured Posts loop -->
    <?php
    $catquery = new WP_Query( 'cat=4&posts_per_page=1' );
    while($catquery->have_posts()) : $catquery->the_post();
        ?>
            <div class="row featured-post-block">
                <div class="col-lg-6">
                    <!-- Title -->
                    <h2 class="featured-post-title"><?php the_title(); ?></h2>
                    <!-- Content -->
                    <div class="featured-post-content"><?php echo wp_trim_words( get_the_content(), 150, '...' );?></div></div>
                <!-- Thumbnail -->
                <div class="col-lg-6 featured-post-image"><?php the_post_thumbnail(); ?></div>

            </div>
    <?php endwhile; ?>
<?php wp_reset_query(); // reset the query ?>





    <!-- Normal Posts -->

<div class="row content" id="post-scroll">
    <div class="col-lg-10">
    <!-- Posts loop -->

        <div id="blogposts">

            <?php
            global $paged;
            $catquery = new WP_Query( 'cat=3&posts_per_page=2&paged=' . $paged );
            while($catquery->have_posts()) : $catquery->the_post();
                ?>
                    <div class="post-block" id="post-<?php the_ID(); ?>">
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
            <?php endwhile; ?>

        </div>
        <?php global $paged; query_posts('paged='.$paged);?>
        <div class="clear"></div>
        <div id="page-nav"><p>
<?php posts_nav_link( '    ', '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/prev.png" /> previous page', 'next page <img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/next.png" />' ); ?></p></div>

    </div>

        <?php wp_reset_query(); // reset the query ?>
    <!-- End Posts loop-->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>







        <?php
        global $paged;
        $catquery = new WP_Query( 'cat=3&posts_per_page=2&paged=' . $paged );
        while($catquery->have_posts()) : $catquery->the_post();
            ?>

<!--      content-->
            
        <?php endwhile; ?>


    <?php global $paged; query_posts('paged='.$paged);?>
    <div class="clear"></div>
    <div id="page-nav"><p><?php posts_nav_link( '    ', '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/prev.png" /> previous page', 'next page <img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/next.png" />' ); ?></p></div>


<?php wp_reset_query(); // reset the query ?>

