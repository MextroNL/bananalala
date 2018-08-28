<?php get_header(); ?>
    <div class="row">
        <div class="col-lg-12 back-block"></div>
    </div>
    <div class="row content">
        <div class="col-lg-10 page-content">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile; else: ?>
                <p>Sorry, no bananas matched your kaffers.</p>
            <?php endif; ?>


        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>