<div class="col-lg-2 sidebar">

        <?php
        if(is_active_sidebar('sidebar-widget-0')){
            dynamic_sidebar('sidebar-widget-0');
        }
        if(is_active_sidebar('sidebar-widget-1')){
            dynamic_sidebar('sidebar-widget-1');
        }
        if(is_active_sidebar('sidebar-widget-2')){
            dynamic_sidebar('sidebar-widget-2');
        }
        if(is_active_sidebar('sidebar-widget-3')){
            dynamic_sidebar('sidebar-widget-3');
        }
        ?>
    </div>
</div>