<?php
/**
 * Post Format Quote
 * @package flat-responsive
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row"  style="margin:0px; padding:0px;" >
        <?php if ( has_post_thumbnail()) : ?>
            <div class="col-md-3"  style="margin:0px; padding:0px;" >
                <div class="testimonial-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if ( has_post_thumbnail()) : ?>
            <div class="col-md-9"  style="margin:0px; padding:0px;">
        <?php else : ?>
        <div class="col-md-12" style="margin:0px; padding:0px;">
            <?php endif; ?>
            <header class="entry-header">
                <i class="fa fa-quote-left"></i>
            </header>
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'flat-responsive' ) ); ?>
            <footer class="entry-meta">
                <?php flat_responsive_posted_on(); ?>
            </footer>
        </div>
    </div>
</article><!-- #post-## -->
