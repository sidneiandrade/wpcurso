<?php get_header(); ?>
<div class="content-area">
    <main>
        <section class="middle-area">
            <div class="container">
                <div class="error-404 col-sm-12">
                    <header>
                        <h1>404</h1>
                        <h2>Page not found</h2>      
                        <p>Unfortunately, the page you tried ti reach does not exist on this site!</p>        
                    </header>
                </div>
                <div class="col-sm-6">
                    <p>How about doing a search?</p>
                    <?php get_search_form(); ?>
                    <?php the_widget( 'WP_Widget_Recent_Posts', array( 'title' => 'Last Posts', 'number' => 5)); ?>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>