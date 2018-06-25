<?php /*Template Name: Recepten*/ ?>
<?php get_header(); ?>

<div class="recepten-posts">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="row recepten-rij">
    <!-- Posts loop -->

        <?php
        global $paged;
        $catquery = new WP_Query( 'cat=5&posts_per_page=4&paged=' . $paged );
        while($catquery->have_posts()) : $catquery->the_post();
            ?>
            <div class="col recepten-block" id="post-<?php the_ID(); ?>">
                <!-- Thumbnail -->
                <div class="recepten-image"><?php the_post_thumbnail(); ?></div>
                <!-- Title -->
                <a href="<?php the_permalink(); ?>"><h2 class="recepten-title"><?php the_title(); ?></h2></a><br>
                <!-- Subtitle -->
                <h5 class="recepten-subtitle">Posted by: <?php the_author() ?><br><?php echo get_the_date(); ?></h5>
                <!-- Content -->
                <div class="recepten-content"><?php echo wp_trim_words( get_the_content(), 50, '...' );?></div>
                <a href="<?php the_permalink(); ?>" id="read-more-recepten" class="read-more">Read More</a>
            </div>
        <?php endwhile; ?>
    </div>
</div>

        <?php global $paged; query_posts('paged='.$paged);?>
        <div class="clear"></div>
        <div id="page-nav"><p><?php posts_nav_link( '    ', '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/prev.png" /> previous page', 'next page <img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/next.png" />' ); ?></p></div>

        <?php wp_reset_query(); // reset the query ?>







<?php get_footer(); ?>
