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
                <?php
                $catquery = new WP_Query( 'posts_per_page=2' );
                while($catquery->have_posts()) : $catquery->the_post();
                    ?>
                    <!-- Title -->
                    <a href="<?php the_permalink(); ?>#post-scroll"><h2 class="footer-post-title"><?php the_title(); ?></h2></a>
                    <!-- Content -->
                    <div class="footer-post-content"><?php echo wp_trim_words( get_the_content(), 20, '...' );?></div><br>
                <?php endwhile; ?>
                <?php wp_reset_query(); // reset the query ?>

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
