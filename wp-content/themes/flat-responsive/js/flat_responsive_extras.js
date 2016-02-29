/**
 * Functionality specific to flat_responsive.
 *
 * Provides helper functions to enhance the theme experience.
 */

( function( $ ) {
	var body    = $( 'body' ),
	    _window = $( window );


	/**
	 * Enables menu toggle for small screens.
	 */
	( function() {
		var nav = $( '#site-navigation' ), button, menu;
		if ( ! nav )
			return;

		button = nav.find( '.menu-toggle' );
		if ( ! button )
			return;

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$( '.menu-toggle' ).on( 'click.flat_responsive', function() {
			nav.toggleClass( 'toggled-on' );
		} );
	} )();




	/**
	 * Enables secondary menu toggle for small screens.
	 */
	( function() {
		var nav = $( '#site-navigation2' ), button, menu;
		if ( ! nav )
			return;

		button = nav.find( '.menu-toggle2' );
		if ( ! button )
			return;

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$( '.menu-toggle2' ).on( 'click.flat_responsive', function() {
			nav.toggleClass( 'toggled-on2' );
		} );
	} )();
	
	
	/*
	 * Makes "skip to content" link work correctly in IE9 and Chrome for better
	 * accessibility.
	 *
	 * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
	 */
	_window.on( 'hashchange.flat_responsive', function() {
		var element = document.getElementById( location.hash.substring( 1 ) );

		if ( element ) {
			if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) {
				element.tabIndex = -1;
			}

			element.focus();

			// Repositions the window on jump-to-anchor to account for header height.
			window.scrollBy( 0, -80 );
		}
	} );


( function() {
	var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( is_webkit || is_opera || is_ie ) && 'undefined' !== typeof( document.getElementById ) ) {
		var eventMethod = ( window.addEventListener ) ? 'addEventListener' : 'attachEvent';
		window[ eventMethod ]( 'hashchange', function() {
			var element = document.getElementById( location.hash.substring( 1 ) );

			if ( element ) {
				if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
					element.tabIndex = -1;

				element.focus();
			}
		}, false );
	}
})();


// lets add some bootstrap styling to WordPress elements starting with the tables

jQuery(function($){
	//$( 'table' ).addClass( 'table' );
	$( '#submit' ).addClass( 'btn btn-sm' );
	$( 'a.button' ).removeAttr('class').addClass( 'btn btn-sm');
	$( '.button' ).removeAttr('class').addClass( 'btn btn-sm');
	$('#submit').removeAttr('id');
	
	
	$( '#bbpress-forums button' ).addClass( 'btn btn-sm' );
	$( '#bbp_search_submit').addClass( 'btn' );
	$( '#bbp_search' ).addClass( 'form-control' );
	$( '#bbp-search-form' ).addClass( 'input-group' );
	$( '#bbp_topic_title' ).addClass( 'form-control' );
	$( '#bbp_topic_content' ).addClass( 'form-control' );
	$( '#bbp_topic_tags' ).addClass( 'form-control' );
	$( '#bbpress-forums select' ).addClass( 'form-control' );
	$( '#bbp_topic_submit', '.subscription-toggle' ).addClass( 'btn' );
	$( '.subscription-toggle' ).addClass( 'btn btn-sm' );
	$( '#bbp_anonymous_author' ).addClass( 'form-control col-md-6' );
	$( '#bbp_anonymous_email' ).addClass( 'form-control col-md-6' );
	$( '#bbp_anonymous_website' ).addClass( 'form-control col-md-6' );
	
});
	
} )( jQuery );

(function  ($) {





	//Rating icons Show on Hover on Product
	$(".woocommerce_product_list_single").mouseover(function(){
	   		var rating_width = $('.rating').width();
		 	var image_width = $('.woocommerce_product_list_single').width();
		 	var margin_right_for_rating1 =  image_width/2 - 70;
			var margin_right_for_rating =  margin_right_for_rating1;
			$(this).find(".rating").css({'marginLeft': margin_right_for_rating, 'display':'block'});
	}).mouseleave(function(){
		$(".rating").hide();
	});
	

	//Replacing image on the main product when clicking on the thumbnails
	$(".zoom_thumbnails_image").click(function(){
		var href= $(this).attr('link');
		$(".attachment-shop_single").removeAttr('src');
		$(".woocommerce-main-image").removeAttr('href');
		$(".attachment-shop_single").removeAttr('data-zoom-image');
		$(".attachment-shop_single").attr('data-zoom-image', href);
		$(".woocommerce-main-image").attr('href', href);
		$(".attachment-shop_single").attr('src', href);
		$(".zoomWindow").css('background-image', 'url(' + href + ')');
		$(".zoomContainer").css('height','auto');		
	});

	//thumbnail change on click single product
	var current_thumbnail_image_url ="";
	$(".woocommerce_product_list_single").mouseover(function(){
		current_thumbnail_image_url = $(this).find(".wp-post-image").attr('src');
		
		var new_thumbnail_image_url = $(this).find(".thumbnail_jquery_effect img").attr('src');
		if (new_thumbnail_image_url == null) {
			
		}
		else {
			$(this).find(".wp-post-image").removeAttr('src');
			$(this).find(".wp-post-image").attr('src', new_thumbnail_image_url);
		}
	
	}).mouseleave(function(){
		$(this).find(".wp-post-image").attr('src', current_thumbnail_image_url);

	});


	//category listing animation of title
	$(".woocommerce_category_list_single").mouseover(function(){
		$(this).find(".woocommerce_category_product_title").animate({'marginTop':'-40px', 'opacity': '0.6'},500);
	}).mouseleave(function(){
		$(this).find(".woocommerce_category_product_title").animate({'marginTop':'-107px', 'opacity': '1'},500);
	});


	//button change on click in woocommerce
	$(".ajax_woocommerce").click(function(){
		$(".ajax_woocommerce").show();
		$(this).hide();
		
	});


	/*
	=================================================
	LIST DESIGN
	=================================================
	*/
	var list_icon = $('')



	//cart icon change in primary menu
	var window_width = $(window).width();
	var content = $('li.cart-icon').find('a');
	var content_first = $('li.cart-icon').find('a').html();
	if (window_width > 960) {
		$(content).html('<i class="fa fa-check"></i>');
	}
	else {
		$(content).html(content_first);
	}


	//clearing div clear:both method for images 
	

	//menu jquery efffect
	//menu-toggle effect 
	
    var window_width = '';
    $(window).resize(function(){
        var window_width = $(window).width();
        
    });	
			if (window_width < 1000) {
			var children_link = $('ul.mobilemenu').find('li.menu-item-has-children > a');
			var children_link_main = $('ul.mobilemenu').find('li.menu-item-has-children');
			$(children_link).prepend('<i class="fa fa-plus"></i> &nbsp');

			$(children_link_main).mouseover(function(){
				$(this).find('a').first().find('i').removeClass('fa-plus');
				$(this).find('a').first().find('i').addClass('fa-minus');
			}).mouseleave(function() {
				$(this).find('a').first().find('i').removeClass('fa-minus');
				$(this).find('a').first().find('i').addClass('fa-plus');
			});

			$('a.toggle_button_flat_responsive_menu').click(function(){
				$('ul.mobilemenu').toggle();
				$('ul.mobilemenu').css('overflow-x','hidden');
			});
			$(window).resize(function(){
				$('ul.mobilemenu').hide();
			});
		}
	



    //Scroll To Top
    var window_height = $(window).height();
    var window_height = (window_height) + (50);
    
    

    $(window).scroll(function() {
    	var scroll_top = $(window).scrollTop();
    	if (scroll_top > window_height) {
    		$('.flat_responsive_move_to_top').show();
    	}
    	else {
    		$('.flat_responsive_move_to_top').hide();	
    	}
    });
    $('.flat_responsive_move_to_top').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
        
    });



    $(window).scroll(function(){

    //floating social styles
    var window_top= $(window).scrollTop();
    var window_height= $(window).height();
    var social_icons_height = $('.social_bar_float_with_screen').height(); 
    var social_bar_margin_height = (window_top) + (window_height) / 4;
    $('.social_bar_float_with_screen').animate({'marginTop': (social_bar_margin_height)},0);

    
    });


/*
============================================================
@ Icons
============================================================
*/
    
    
/*
============================================================
@ Tabs
============================================================
*/
	$('.btn').mouseover(function(){
    	var hover = $(this).data('hov');
    	var color = $(this).data('col');
    	var colorbg = $(this).data('colbg');
    	var hoverbg = $(this).data('hovbg');
    	$(this).css({'background-color': hoverbg, 'color': hover});
    }).mouseleave(function(){
    	var hover = $(this).data('hov');

    	var color = $(this).data('col');
    	var colorbg = $(this).data('colbg');
    	var hoverbg = $(this).data('hovbg');
    	$(this).css({'background-color': colorbg, 'color': color});
    });




/*
============================================================
@ WOW.JS
============================================================
*/



/*
=================================================
Search Icon
=================================================
*/



	
})(jQuery);

