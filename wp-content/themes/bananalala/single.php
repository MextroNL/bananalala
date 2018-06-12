<?php get_header(); ?>
<div class="row">
    <div class="col-lg-12 back-block">
        <a href="<?php echo home_url();?>"><li id="upper_button" class="back_button"><span class="terug">terug</span></li></a>
    </div>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row content">
        <div class="col-lg-10">
            <!-- Posts loop -->
                <div class="single-block">
                    <!-- Thumbnail -->
                    <div class="single-image"><?php the_post_thumbnail(); ?></div>
                    <!-- Title -->
                    <h2 class="single-title"><?php the_title(); ?></h2><br>
                    <!-- Subtitle -->
                    <h5 class="single-subtitle">Posted by: <?php the_author() ?> - <?php the_date() ?></h5>
                    <!-- Content -->
                    <div class="single-content"><?php the_content(); ?></div>
                    <a href="<?php echo home_url();?>"><li id="lower_button" class="back_button"><span class="terug">terug</span></li></a>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
