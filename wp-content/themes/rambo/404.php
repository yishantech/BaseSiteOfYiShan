<?php get_template_part('banner','strip'); ?>
<div class="container">
  <!--- Main ---> 
  <div class="row-fluid">
    <!-- Call Function sidebar Check -->
	<div class="<?php  rambo_post_layout_class(); ?> Blog_main">
      <div class="blog_single_post">
        <h2><?php _e( 'Unfortunately, the page you tried accessing could not be retrieved. ', 'rambo' ); ?>
        </h2>
        <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'rambo' ); ?>
        </p>
        <?php get_search_form(); ?>
      </div>
    </div>
    <?php get_sidebar (); ?>
  </div>
</div>
<?php get_footer(); ?>