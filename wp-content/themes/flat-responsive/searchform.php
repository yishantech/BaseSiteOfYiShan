<?php
/**
 * The template for displaying search forms in flat-responsive
 * @package flat-responsive
 * @since 1.0.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'flat-responsive' ); ?></span>

<div class="input-group">
<input type="text" class="form-control" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
<div class="input-group-addon">
<button class="btn btn-primary" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'flat-responsive' ); ?>"><i class="fa fa-search"></i> </button>
</div>
</div>

</form>    
