<?php get_header()?>
<div id="content" class="site-content">
    <div id="promary" class="content-area">
        <main id="main"class="site-main">
            <div class="contanier">
                <div class="error-404">
                    <header>
                        <h1>Page not Found</h1>
                        <p>Unfortunaly,the page you tried to reach does not exist on this site.</p>
                        <?php get_search_form();?>
                        <?php
                        the_widget(
                            'WP_widget_Recent_Posts',
                            'number'=>3
                        )
                        );
                        ?>
                      </div>
                      </div>
                      </div>
                    </main>
                      </div>




</div>

<?php get_footer();?>