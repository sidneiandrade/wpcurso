<?php get_header(); ?>
    <div id="primary">
        <div id="main">
            <div class="container">
                <?php 
                while( have_posts() ): the_post();    
                    get_template_part('template-parts/content', 'search');
                endwhile;
                ?>
            </div>    
        </div>
    </div>
<?php get_footer(); ?>