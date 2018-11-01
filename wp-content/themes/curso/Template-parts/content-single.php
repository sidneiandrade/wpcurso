<article id="post-<?php the_ID(); ?>" <?php post_class( array( ) ); ?>>
    
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p>Posted in <?php echo get_the_date(); ?> by <span><?php the_author_posts_link(); ?></p>
            <p>Categories: <?php the_category( ' ' ); ?></p>
            <p><?php the_tags( 'Tags: <span>', ', ', '<span>' ); ?></p>
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>
    </div>    

</article>