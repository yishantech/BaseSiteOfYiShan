<?php
/**
 * The Call to Action Sidebar
 * @package flat_responsive
 * @since 1.0.0
 */
$default_content = get_theme_mod('hide_default_content', '0');
if ( ! is_active_sidebar( 'cta' ) && (!$default_content) ):?>
   <div class="fr_widgets_cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            	<div style="text-align:center;">
                <h2 class="home_page_title">
                	<?php echo __('Get Your Business Started With Flat Responsive', 'flat-responsive');?>
                </h2>
                    <p>
                    	<?php echo __('Use Flat Responsive theme to create your business website as it is SEO optimized. 
                    	<br> Enjoy the flexibility in design and functionality provided by this theme.', 'flat-responsive');?></p>
                    <a href="http://styledthemes.com/sign-up" class="btn"><?php echo __('Get Theme', 'flat-responsive');?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php elseif(is_active_sidebar( 'cta' ) ):
?>
<div class="fr_widgets_cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php dynamic_sidebar( 'cta' ); ?>
            </div>
        </div>
    </div>
</div>
<?php else: 
    return;
endif; 
?>