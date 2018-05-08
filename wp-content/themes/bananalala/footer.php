    <div class="container-fluid footer" style="background-color: #<?php get_theme_mod( 'footer_color' ); ?>">
        <div class="row">
            <div class="col-lg-4">
                <?php
                if(is_active_sidebar('footer-widget-left')){
                    dynamic_sidebar('footer-widget-left');
                }
                ?>
            </div>
            <div class="col-lg-4">
                <?php
                if(is_active_sidebar('footer-widget-middle')){
                    dynamic_sidebar('footer-widget-middle');
                }
                ?>
            </div>
            <div class="col-lg-4">
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
