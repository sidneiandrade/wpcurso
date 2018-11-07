<article id="post-<?php the_ID(); ?>" <?php post_class( array( ) ); ?>>
    <header>
        <div class="meta-info">
            <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
            <div class="clearfix"></div>
            <div class="col-sm-12">
                <h2><?php the_title(); ?></h2>     
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 info-post">
                <p><strong><?php _e('Posted in', 'wpcurso'): ?></strong> <?php echo get_the_date(); ?> <br>
                <p><strong><?php _e('by', 'wpcurso'); ?></strong> <?php the_author_posts_link(); ?>
                <p><strong><?php _e('Categories:', 'wpcurso'); ?></strong> <?php the_category( ' ' ); ?>
                <?php the_tags( __('<strong>Tags: </strong>', 'wpcurso'), ', ' ); ?>
            </div>
            <div class="col-sm-9 content">
                <?php the_content(); ?>
            </div>    
        </div>
    </div>    
</article>