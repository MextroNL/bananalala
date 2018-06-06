    <div class="container-fluid footer" style="background-color: #<?php get_theme_mod( 'footer_color' ); ?>">
        <div class="row">
            <div class="col-lg-4 footer-widget-block">
                <?php
                if(is_active_sidebar('footer-widget-left')){
                    dynamic_sidebar('footer-widget-left');
                }
                ?>
            </div>
            <div class="col-lg-4 footer-widget-block">
                <?php
                if(is_active_sidebar('footer-widget-middle')){
                    dynamic_sidebar('footer-widget-middle');
                }
                ?>
                <?php query_posts('showposts=2'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <!-- Title -->
                            <h2 class="footer-post-title"><?php the_title(); ?></h2><br>
                            <!-- Content -->
                            <div class="footer-post-content"><?php the_excerpt(); ?></div>
                <?php endwhile;
                else:
                endif;
                wp_reset_query();?>

            </div>
            <div class="col-lg-4 footer-widget-block">
                <?php
                if(is_active_sidebar('footer-widget-right')){
                    dynamic_sidebar('footer-widget-right');
                }
                ?>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
    </body>
</html>
