<?php get_header(); ?>
<div class="content-area">
    <main>
        <section class="middle-area">
            <div class="container">
                <div class="error-404 col-sm-12">
                    <header>
                        <h1><?php _e( '404', 'wpcurso'); ?></h1>
                        <h2><?php _e( 'Page not found', 'wpcurso'); ?></h2>      
                        <p><?php _e( 'Unfortunately, the page you tried ti reach does not exist on this site!', 'wpcurso'); ?></p>        
                    </header>
                </div>
                <div class="col-sm-6">
                    <p><?php _e( 'How about doing a search?', 'wpcurso'); ?></p>
                    <?php get_search_form(); ?>
                    <?php the_widget( 'WP_Widget_Recent_Posts', array(
                        'title' => __( 'Last Posts', 'wpcurso' ), 
                        'number' => 5
                        )
                    );
                    ?>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>