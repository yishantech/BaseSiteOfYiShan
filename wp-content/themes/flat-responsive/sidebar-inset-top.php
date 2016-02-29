<?php
/**
 * The Inset Top Sidebar
 * @package flat-responsive
 * @since 1.0.0
 */


if(is_active_sidebar( 'insettop' )):
?>
<div class="fr_widgets_insettop">
    <div class="container">
        <div class="row">
           	<div class="col-md-12">
           		<?php dynamic_sidebar( 'insettop' ); ?>
        	</div>
        </div>
    </div>
</div>
<?php else:
		return;
endif;
?>