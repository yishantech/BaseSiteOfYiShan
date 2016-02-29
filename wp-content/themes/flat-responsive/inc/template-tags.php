<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 * @package flat-responsive
 * @since 1.0.2
 */
/**
* Modification of wp_link_pages to enclose page links in an unordered list.
*
* Special thanks to http://wpbungee.webstractions.com/bungee-development/pagination-hybrid-core-theme-templates-twitter-bootstrap/
*
*/
function flat_responsive_multi_pages($args = '') {
$defaults = array(
'before' => '<div class="pagination-wrapper clearfix"><label>' . __( 'Pages: ', 'flat-responsive' ) . '</label><ul class="pagination">',
'after'             => '</ul></div>',
'link_before'       => '<li>', 
'link_after'        => '</li>',
'next_or_number'    => 'number', 
'nextpagelink'      => __('Next page', 'flat-responsive'),
'previouspagelink'  => __('Previous page', 'flat-responsive'), 
'pagelink'          => '%',
'echo'              => 1
);
 
$r = wp_parse_args( $args, $defaults );
$r = apply_filters( 'flat_responsive_multi_pages_args', $r );
extract( $r, EXTR_SKIP );
 
global $page, $numpages, $multipage, $more, $pagenow;
 
$output = '';
if ( $multipage ) {
if ( 'number' == $next_or_number ) {
    $output .= $before;
    for ( $i = 1; $i < ($numpages+1); $i = $i + 1 ) {
        $j = str_replace('%',$i,$pagelink);
        if ( ($i != $page) || ((!$more) && ($page==1)) ) {
            $output .= ' ' . str_replace('%','normal',$link_before);
            $output .= _wp_link_page($i);
            $output .= $j;
            $output .= '</a>';
        }
        else {
            $output .= ' ' . str_replace('%','disabled',$link_before);
            $output .= '<span class="active">' . $j . '</span>';
        }
        $output .=  $link_after;
    }
    $output .= $after;
} else {
    if ( $more ) {
        $output .= $before;
        $i = $page - 1;
        if ( $i && $more ) {
            $output .= $link_before;
            $output .= _wp_link_page($i);
            $output .= $previouspagelink . '</a>';
            $output .= $link_after;
        }
        $i = $page + 1;
        if ( $i <= $numpages && $more ) {
            $output .= $link_before;
            $output .= _wp_link_page($i);
            $output .= $nextpagelink . '</a>';
            $output .= $link_after;
        }
        $output .= $after;
    }
}
}
 
if ( $echo )
echo $output;
 
return $output;
}



/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @return void
 */
if ( ! function_exists( 'flat_responsive_paging_nav' ) ) :

function flat_responsive_paging_nav($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='page_pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}
endif;

if ( ! function_exists( 'flat_responsive_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @return void
 */
function flat_responsive_post_nav() {
    // Don't print empty markup if there's nowhere to navigate.
    $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );

    if ( ! $next && ! $previous ) {
        return;
    }
    ?>
    <nav class="navigation post-navigation" role="navigation">
        <h1 class="screen-reader-text"><?php _e( 'Post navigation', 'flat-responsive' ); ?></h1>
        <div class="post-nav-links">
            <?php
                previous_post_link( '<div class="nav-previous">&nbsp;%link </div>', _x( '<i class="fa fa-long-arrow-left"></i> %title', 'Previous post link', 'flat-responsive' ) );
                next_post_link( '<div class="nav-next">&nbsp;%link</div>', _x( ' %title <i class="fa fa-long-arrow-right"></i>', 'Next post link', 'flat-responsive' ) );
            ?>
        </div><!-- .nav-links -->
    </nav><!-- .navigation -->
    <?php
}
endif;

if ( ! function_exists( 'flat_responsive_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function flat_responsive_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;

    if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>

    <li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
        <div class="comment-body">
            <?php _e( 'Pingback:', 'flat-responsive' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'flat-responsive' ), '<span class="edit-link">', '</span>' ); ?>
        </div>
    </li>
    <?php else : ?>

    <li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
        <article id="div-comment-<?php comment_ID(); ?>" class="comment-wrapper">
            <div class="comment-avatar">
                <?php if ( 0 != $args['avatar_size'] ) { echo get_avatar( $comment, $args['avatar_size'] = '58' ); } ?>
            </div>
            <div class="comment-body">
                <div class="comment-author vcard">          
                    <?php printf( ('%s'), sprintf( '<cite class="fn">%s</cite> |', get_comment_author_link() ) ); ?>
                    <!-- .comment-author -->
                    <time datetime="<?php comment_time( 'c' ); ?>">
                        <?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'flat-responsive' ), get_comment_date(), get_comment_time() ); ?>
                    </time> 
                    
                    <?php edit_comment_link( __( 'Edit', 'flat-responsive' ), '<span class="edit-link">', '</span>' ); ?> |
                    
                    <?php
                        comment_reply_link( array_merge( $args, array(
                            'add_below' => 'div-comment',
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth'],
                            'before'    => '<span class="reply">',
                            'after'     => '</span>',
                        ) ) );
                    ?> 
            
                    <?php if ( '0' == $comment->comment_approved ) : ?>
                        <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'flat-responsive' ); ?></p>
                    <?php endif; ?>
                </div><!-- .comment author -->
    
                <div class="comment-content">
                    <?php comment_text(); ?>
                </div><!-- .comment-content -->
            </div>


        </article><!-- .comment-body -->
    </li>
    <?php
    endif;
}
endif; // ends check for flat_responsive_comment()

if ( ! function_exists( 'flat_responsive_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function flat_responsive_posted_on() {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) ) ;

    $time_string = sprintf( $time_string,
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() )
    );

    printf( __( '<span class="posted-on"><i class="fa fa-calendar-o"></i> %1$s</span><span class="byline"><i class="fa fa-user"></i>  %2$s</span>', 'flat-responsive' ),
        sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>',
            esc_url( get_permalink() ),
            $time_string
        ),
        sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" rel="author"> %2$s</a></span>',
            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
            esc_html( get_the_author() )
        )
    );
}
endif;





/**
 * Print the attached image with a link to the next attached image.
 *
 */
if ( ! function_exists( 'flat_responsive_the_attached_image' ) ) :

function flat_responsive_the_attached_image() {
    $post                = get_post();

    $attachment_size     = apply_filters( 'flat_responsive_attachment_size', array( 1140, 1140 ) );
    $next_attachment_url = wp_get_attachment_url();

    /*
     * Grab the IDs of all the image attachments in a gallery so we can get the URL
     * of the next adjacent image in a gallery, or the first image (if we're
     * looking at the last image in a gallery), or, in a gallery of one, just the
     * link to that image file.
     */
    $attachment_ids = get_posts( array(
        'post_parent'    => $post->post_parent,
        'fields'         => 'ids',
        'numberposts'    => -1,
        'post_status'    => 'inherit',
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'order'          => 'ASC',
        'orderby'        => 'menu_order ID',
    ) );

    // If there is more than 1 attachment in a gallery...
    if ( count( $attachment_ids ) > 1 ) {
        foreach ( $attachment_ids as $attachment_id ) {
            if ( $attachment_id == $post->ID ) {
                $next_id = current( $attachment_ids );
                break;
            }
        }

        // get the URL of the next image attachment...
        if ( $next_id ) {
            $next_attachment_url = get_attachment_link( $next_id );
        }

        // or get the URL of the first image attachment.
        else {
            $next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
        }
    }

    printf( '<a href="%1$s" rel="attachment">%2$s</a>',
        esc_url( $next_attachment_url ),
        wp_get_attachment_image( $post->ID, $attachment_size )
    );
}
endif;

/**
 * Return the post URL.
 *
 * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 */
function flat_responsive_get_link_url() {
    $content = get_the_content();
    $has_url = get_url_in_content( $content );

    return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}


/**
 * Returns true if a blog has more than 1 category.
 */
function flat_responsive_categorized_blog() {
    if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
        // Create an array of all the categories that are attached to posts.
        $all_the_cool_cats = get_categories( array(
            'hide_empty' => 1,
        ) );

        // Count the number of categories that are attached to the posts.
        $all_the_cool_cats = count( $all_the_cool_cats );

        set_transient( 'all_the_cool_cats', $all_the_cool_cats );
    }

    if ( '1' != $all_the_cool_cats ) {
        // This blog has more than 1 category so flat_responsive_categorized_blog should return true.
        return true;
    } else {
        // This blog has only 1 category so flat_responsive_categorized_blog should return false.
        return false;
    }
}

/**
 * Flush out the transients used in flat_responsive_categorized_blog.
 */
function flat_responsive_category_transient_flusher() {
    // Like, beat it. Dig?
    delete_transient( 'all_the_cool_cats' );
}
add_action( 'edit_category', 'flat_responsive_category_transient_flusher' );
add_action( 'save_post',     'flat_responsive_category_transient_flusher' );

function flat_responsive_pagination($max_posts = null) {
    global $wp_query;
        
    $big = 999999999; // need an unlikely integer
    echo '<div class="fr-pagination">';
    
    echo paginate_links( array(
        'base'                  => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'                => '?p=%#%',
        'current'               => max( 1, get_query_var('paged') ),
        'total'                 => $max_posts,
        'prev_text'             => __('«', 'flat-responsive'),
        'next_text'             => __('»', 'flat-responsive'),
        'type'                  => 'list',
    ) );

    echo '</div>';
};