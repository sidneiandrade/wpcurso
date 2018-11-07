<?php get_header(); ?>
<div id="primary">
    <div id="main">
        <div class="container">
            <h2><?php _e('Resultado da pesquisa:', 'wpcurso'); ?></h2>
            <p><?php _e('Termo pesquisado:', 'wpcurso'); ?>
                <?php echo get_search_query(); ?></p>
            <?php 
                get_search_form();
                while( have_posts() ): the_post();    
                get_template_part('template-parts/content', 'search');
                endwhile;

                the_posts_pagination(
                    array(
                        'prev_text' => __('Previous', 'wpcurso'),
                        'next_text' => __('Next', 'wpcurso'),
                        'screen_reader_text' => ' '
                    )
                );
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>