<?php

/**
 * The logo group for the header
 * @package flat-responsive
 * @since 1.0.0
 */
?>

<?php 
	$logostyle = get_theme_mod( 'logo_style', 'default' );
    
	 switch ($logostyle) {
		case "default" : // default theme logo ?>
        
        <div id="fr-logo-group">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">				
           <img  class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/flat_responsive-logo.png"  alt="<?php bloginfo( 'name' ); ?>" /></a>
        </div>
            	 
		<?php break;
		case "custom" : // your own logo ?>
			
			<div id="fr-logo-group">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img  class="img-responsive" src="<?php echo esc_url(get_option( 'my_logo' )); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
				</a>
			</div>
						 
		<?php break;
		case "logotext" : // your own logo with text based title and site description ?>
        
            <div id="fr-logo-group">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img class="img-responsive" src="<?php echo esc_url(get_option( 'my_logo' )); ?>" alt="<?php bloginfo( 'name' ); ?> "/>
                </a>
            </div>
            
            <div id="fr-site-title-group" style="margin: <?php echo esc_attr(get_theme_mod( 'titlemargin', '0 0 0 0' )); ?>;">
                <h1 id="fr-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
                    rel="home" style="color: <?php echo esc_attr(get_theme_mod( 'sitetitle' )); ?>;"><?php bloginfo('name'); ?></a></h1>
                <h5 id="fr-site-tagline" style="color: <?php echo esc_html(get_theme_mod( 'tagline', '#378B92' )); ?>;"><?php bloginfo('description'); ?></h5>
            </div>
            			
		<?php break;
		case "text" : // text based title and site description ?>
			<div id="fr-text-group">
                    <div id="fr-site-title-group" style="margin: <?php echo esc_attr(get_theme_mod( 'titlemargin', '0 0 0 0' )); ?>;">
                        <h1 id="fr-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
                            rel="home" style="color: <?php echo esc_attr(get_theme_mod( 'sitetitle')); ?>;"><?php bloginfo('name'); ?></a></h1>
                        <h2 id="fr-site-tagline" style="color: <?php echo esc_html(get_theme_mod( 'tagline')); ?>;"><?php bloginfo('description'); ?></h2>
                    </div>	
                        </div>
            		
		<?php break;
	} 
?>


