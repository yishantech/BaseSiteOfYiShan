<?php 
  /**
  * @Theme Name	:	rambo
  * @file         :	page.php
  * @package      :	rambo
  * @author       :	webriti
  * @license      :	license.txt
  * @filesource   :	wp-content/themes/rambo/page.php
  */
  get_template_part('banner','strip');?>
<!-- Container -->
<div class="container">
  <!-- Blog Section Content -->
  <div class="row-fluid">
    <!-- Blog Single Page -->
    <div class="<?php if( is_active_sidebar('sidebar-primary')) echo "span8"; else echo "span12";?> Blog_main">
      <div class="blog_single_post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php  the_post(); ?>
        <?php $defalt_arg =array('class' => "blog_section2_img" )?>
        <?php if(has_post_thumbnail()):?>
        <a  href="<?php the_permalink(); ?>" class="pull-left blog_pull_img2">
        <?php the_post_thumbnail('media-object', $defalt_arg); ?>
        </a>
        <?php endif;?>       
        <p><?php  the_content( __( 'Read More' , 'rambo' ) ); ?></p>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'rambo' ), 'after' => '</div>' ) ); ?>
      </div>
      <?php comments_template( '', true );?>
    </div>
    <?php get_sidebar();?>
  </div>
</div>
<?php get_footer();?>