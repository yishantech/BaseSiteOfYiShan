<?php
  /**
  * @Theme Name	:	rambo
  * @file         :	banner-strip.php
  * @package      :	rambo
  * @author       :	webriti
  * @license      :	license.txt
  * @filesource   :	wp-content/themes/rambo/banner-strip.php
  */ 
  get_header();?>
<!-- Header Strip -->
<div class="hero-unit-small">
  <div class="container">
    <div class="row-fluid about_space">
      <h2 class="page_head pull-left">
	  <?php if ( is_day() ) : ?>
				<?php  _e( "Daily Archives: ", 'rambo' ); echo (get_the_date()); ?>
			<?php elseif ( is_month() ) : ?>
				<?php  _e( "Monthly Archives: ", 'rambo' ); echo (get_the_date( 'F Y' )); ?>
			<?php elseif ( is_year() ) : ?>
				<?php  _e( "Yearly Archives: ", 'rambo' );  echo (get_the_date( 'Y' )); ?>
			<?php elseif (is_category()): ?>
				<?php  single_cat_title( __("Category Archives: ", 'rambo' ), true ); ?>
				<?php elseif (is_tag()): ?>
				<?php  single_tag_title( __("Tag Archives: ", 'rambo' ), true ); ?>
				<?php elseif (is_author()): ?>
				<?php  _e( 'Author Archives:', 'rambo' ); echo get_the_author(); ?>
				<?php elseif (is_404()): ?>
				<?php  _e( 'Oops Sorry,No Page Found','rambo' ); ?>
				<?php elseif (is_search()): ?>
				<?php  //_e( 'Search Results','rambo' ); ?>
				<?php printf( __( "Search Results for: %s", 'rambo' ), '<span>' . get_search_query() . '</span>' ); ?>
				<?php elseif (is_single() || is_page()): ?>
				<?php  the_title(); ?>
				<?php else :?>
				<?php  _e('Blog Archives','rambo'); ?>
			<?php endif; ?>
	  
	  
	  </h2>
      <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="input-append search_head pull-right">
          <input type="text"   name="s" id="s" placeholder="<?php esc_attr_e( "Search", 'rambo' ); ?>" />
          <button type="submit" class="Search_btn" name="submit" ><?php esc_attr_e( "Go", 'rambo' ); ?></button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /Header Strip -->