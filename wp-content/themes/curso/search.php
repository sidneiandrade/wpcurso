<?php get_header(); ?>
<div id="primary">
    <div id="main">
        <div class="container">
            <h2>Resultado da pesquisa:</h2>
            <p>Termo pesquisado:
                <?php echo get_search_query(); ?></p>
            <?php 
                get_search_form();
                while( have_posts() ): the_post();    
                get_template_part('template-parts/content', 'search');
                endwhile;

                the_posts_pagination(
                    array(
                        'prev_text' => 'Previous',
                        'next_text' => 'Next',
                        'screen_reader_text' => ' '
                    )
                );
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>