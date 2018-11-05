<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <div class="input-group-append">
        <button class="btn btn-danger" type="submit"><?php echo _x( 'OK', 'submit button' ); ?></button>
    </div>
    </div>
</form>