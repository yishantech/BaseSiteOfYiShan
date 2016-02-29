== Think Up Themes ==

- By Think Up Themes, http://www.thinkupthemes.com/

Requires at least:	3.6.0
Tested up to:		4.3.1

Renden (Pro) is a multi-purpose professional Premium WordPress Theme ideal for a business or blog website. The theme is responsive, HD retina ready and comes with 600+ Google Fonts which can easily be selected directly from the theme options panel. Never code again with the awesome page builder. Simply drag, drop and you're done! It couldn't be easier to create stunning websites with the beauty of Renden (Pro).

-----------------------------------------------------------------------------
	Support
-----------------------------------------------------------------------------

- For support for Renden (free) please post a support ticket over at the https://wordpress.org/support/theme/renden.

-----------------------------------------------------------------------------
	Frequently Asked Questions
-----------------------------------------------------------------------------

- None Yet


-----------------------------------------------------------------------------
	Limitations
-----------------------------------------------------------------------------

- RTL support is yet to be added. This is planned for inclusion in v1.1.0


-----------------------------------------------------------------------------
	Copyright, Sources, Credits & Licenses
-----------------------------------------------------------------------------

Renden WordPress Theme, Copyright 2014 Think Up Themes Ltd
Renden is distributed under the terms of the GNU GPL

Demo images are licensed under CC0 1.0 Universal (CC0 1.0) and available from http://unsplash.com/

The following opensource projects, graphics, fonts, API's or other files as listed have been used in developing this theme. Thanks to the author for the creative work they made. All creative works are licensed as being GPL or GPL compatible.

    [1.01] Item:        Underscores (_s) starter theme - Copyright: Automattic, automattic.com
           Item URL:    http://underscores.me/
           Licence:     Licensed under GPLv2 or later
           Licence URL: http://www.gnu.org/licenses/gpl.html

    [1.02] Item:        Redux Framework
           Item URL:    https://github.com/ReduxFramework/ReduxFramework
           Licence:     GPLv3
           Licence URL: http://www.gnu.org/licenses/gpl.html

    [1.03] Item:        html5shiv (jQuery file)
           Item URL:    http://code.google.com/p/html5shiv/
           Licence:     MIT
           Licence MIT: http://opensource.org/licenses/mit-license.html

    [1.04] Item:        PrettyPhoto
           Item URL:    http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/
           Licence:     GPLv2
           Licence URL: http://www.gnu.org/licenses/gpl-2.0.html

    [1.05] Item:        ImagesLoaded
           Item URL:    https://github.com/desandro/imagesloaded
           Licence:     MIT
           Licence URL: http://opensource.org/licenses/mit-license.html

    [1.06] Item:        Retina js
           Item URL:    http://retinajs.com
           Licence:     MIT
           Licence URL: http://opensource.org/licenses/mit-license.html

    [1.07] Item:        ResponsiveSlides
           Item URL:    https://github.com/viljamis/ResponsiveSlides.js
           Licence:     MIT
           Licence URL: http://opensource.org/licenses/mit-license.html

    [1.08] Item:        Font Awesome
           Item URL:    http://fortawesome.github.io/Font-Awesome/#license
           Licence:     SIL Open Font &  MIT
           Licence OFL: http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL
           Licence MIT: http://opensource.org/licenses/mit-license.html

    [1.09] Item:        Twitter Bootstrap
           Item URL:    https://github.com/twitter/bootstrap/wiki/License
           Licence:     Apache 2.0
           Licence URL: http://www.apache.org/licenses/LICENSE-2.0

    [1.10] Item:        Google Fonts - Open Sans
           Item URL:    http://www.google.com/fonts/specimen/Open+Sans
           Licence:     SIL Open Font
           Licence URL: http://scripts.sil.org/OFL

-----------------------------------------------------------------------------
	Changelog
-----------------------------------------------------------------------------

Version 1.2.6
- Fixed:   Function home_page_menu_args() renamed to thinkup_menu_homelink() to ensure correct prefixing and reduce change of conflict with 3rd party code.
- Updated: Social media links in pre-header now open in new tab.
- Updated: Translation .pot file added. Old files .mo and .po removed.
- Updated: Portfolio masonry container checks updated in main-frontend.js.
- Updated: Variable $open_sans renamed to $font_translate in function thinkup_googlefonts_url().
- Updated: Function thinkup_add_menuclass() renamed to thinkup_input_menuclass() to be inline with proper naming convention.
- Updated: Function thinkup_get_comments_number_str() renamed to thinkup_comments_returnstring() to be inline with proper naming convention.
- Updated: Function thinkup_get_comments_popup_link() renamed to thinkup_input_commentspopuplink() to be inline with proper naming convention.

Version 1.2.5
- Updated: This is same as v1.2.4. Theme is being updated and released again as v1.2.4 didn't upload successfully to wordpress.org.

Version 1.2.4
- Fixed:   Disables sortable slides in Customizer. This prevents issues where phantom slides still appear after deleting slides.
- Updated: Various minor styling updates for theme options in customizer.

Version 1.2.3
- Fixed:   "$this->_extension_url" used for redux extensions fixed to ensure custom extensions are loaded correctly on all sites.

Version 1.2.2
- Fixed:   Floating elements now cleared within template-archive.php using class "clearboth".
- Fixed:   Floating elements now cleared within template-sitemap.php using class "clearboth".
- Fixed:   Link to font-awesome in admin area now works correctly. Previously showed 404 error.
- Updated: Redux notices prevented from displaying.
- Updated: Post title and displays above post meta on blog pages.
- Updated: Validation for links changed from "url" to "html" to allow for links to inner pages.
- Updated: input specific type styling extended to include input[type=search] and  input[type=tel].
- Updated: Post meta links on blog page now have the same color as standard text, and go red on hover.
- Updated: Class ".portfolio-wrapper" added to all instances of ID "#container" where a masonry layout is used.
- Updated: Margin removed from alignright class if used in #pre-header to ensure pre-header height displays correctly.
- Removed: References to "filters.svg#grayscale" removed from style-shortcodes.css.
- Removed: Custom JS option in customizer removed. Can potentially cause issues with customizer if user specified JS is incorrect.

Version 1.2.1
- New:     Homepage featured content now allows for both a 3 column and 4 column layout to be used.
- Fixed:   Slider images now always dispaly when image is selected. Small number of users didn't see thumbnail on backend.
- Updated: Padding adding to content area ThinkUpSlider to improve layout on smaller screens.

Version 1.2.0
- New:     Customizer support added. All Theme options settings now controlled from within Customizer.
- New:     Dummy "Theme Options" section added under Appearance to guide users to location of new theme options and relevant information - Remove in upcoming update.
- Fixed:   Pagination clears correctly when inner paginated pages are being viewed.
- Fixed:   Migration script updated to prevent loss of data. If data doesn't migrate to customizer. Support can still retrieve from database.
- Removed: Redundant Redux css code from style-backend.css.
- Removed: Redundant Redux jQuery code from main-backend.js.
- Removed: Theme options panel removed - replaced with customizer to comply with new WordPress guidelines.

Version 1.1.2
- Updated: Prep for Customizer integration. Redux global variable changed from $redux -> $thinkup_redux_variables. Migration function thinkup_migrate_redux_option().

Version 1.1.1
- New:     .screen-reader-text class added to style.css - unstyled.
- Fixed:   Custom social media icons now display correctly.
- Fixed:   thinkup_check_ishome() now works correctly on all sites.

Version 1.1.0
- Fixed:   Breadcrumbs now work correctly on child pages. Prebiously 3rd level pages were breadking layout.
- Updated: prettyPhoto updates to v3.1.6 to put in place prettyPhoto XSS fix.
- Updated: #sidebar styling in style-responsive.css applied with !important attribute.
- Updated: #main-core styling in style-responsive.css applied with !important attribute.
- Updated: caroufredsel now checks to if carousel item exists before executing code - reduces jQuery notices.
- Updated: caroufredsel code updated to ensure carousel code is not applied to individual items (e.g. postitem, featured items, images).

Version 1.0.8
- Fixed:   Blog grid layout now displays correctly (full-width) on mobile devices.
- Fixed:   Fix jQuery code used to add tr tags in main-backend.js. Improves compatibility with 3rd party code.
- Removed: Unnecessary placeholder theme options removed.

Version 1.0.7
- New:     Variable $thinkup_general_fixedlayoutswitch used to assign responsive layouy for default settings.
- Updated: Theme now displays responsive layout on default settings. 
- Removed: Variable $thinkup_general_responsiveswitch was used to set fixed layout by default.

Version 1.0.6
- Updated: Link to support forum updated in readme file.
- Updated: Change readme file to ensure support article link is correct.
- Updated: thinkup_check_currentpage() now checks for www. prefix on site.
- Updated: Coments in functions.php now applied using single line exclusions to make debugging easier.
- Updated: Add class="clearboth" after #slider so that it works correctly with all 3rd party shortcodes.

Version 1.0.5
- New:     Add WooCommerce compatibility to allow users to customize WooCommerce from theme folder.
- Updated: Page title is now output correctly using add_theme_support( 'title-tag' ) with backward compatibility for pre WordPress v4.1.
- Updated: Functions that are used to add additional image sizes are now child theme compatible allowing feature to be overwritten from child theme.

Version 1.0.4
- New:     three-columns tag added to style.css given the 3 column layout of the homepage feauted content section.
- Updated: Breadcrumbs display correctly  for taxonomy archive pages.
- Updated: Full compatibility (and backward compatibility) added for add_theme_support( 'title-tag' ) added.
- Updated: wp_title() no longer required in header.php. Title now hooked directly to wp_head using 'title-tag'.
- Updated: thinkup_input_wptitle() removed. Was used to filter wp_title. No longer required given introduction of 'title-tag'.

Version 1.0.3
- Fixed:   Breadcrumbs now display post categories correctly on single posts.
- Updated: Bootstrap.css updated with non-minified script from original Renden (free) release.

Version 1.0.2
- New:     Slider text css updated.
- New:     add_theme_support( 'title-tag' ) added to functions.php.
- New:     Scaling removed from featured images for homepage on hover.
- Fixed:   Page title now displays on left where no breadcrumbs are available for the page. (e.g. archive.php)
- Updated: Styling added for stick post.
- Updated: All custom style handles prefixed with thinkup-.
- Updated: All custom script handles prefixed with thinkup-.
- Updated: bootstrap.min minified css replaced with developer version.
- Updated: prettyPhoto.css minified css replaced with developer version.
- Updated: font-awesome.min.css minified css replaced with developer version.
- Updated: thinkup_input_breadcrumb() updated to "return" content rather than "echo".
- Updated: index.php and archive.php updated. Layout classes functions moved to 05.blog.php.
- Updated: Styling for overlay buttons on hover changed to be clear background and white border.
- Removed: wp_enqueue_script('jquery') removed as jQuery is enqueued when script dependent on this is enqueued.
- Removed: Theme version of Masonry removed and enqueued directly from WordPress core.
- Removed: Theme version of Dashicons removed and enqueued directly from WordPress core.
- Removed: Duplicate Font Awesome library removed.
- Removed: Blog style 2 removed.
- Removed: All references to $thinkup_blog_style removed.
- Removed: All references to $thinkup_blog_stylegrid removed.

Version 1.0.1
- New:     Featured content areas increased to 4 from 3.
- New:     Additional image size added so that images fit nicely in new layout.
- Fixed:   php notice errors fixed for initial theme activation.
- Updated: Screenshot updated to better reflect updated theme design.
- Updated: Redux global variable changed from thinkup_redux_variables to redux.

Version 1.0.0
- Initial release.