<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

		<div class="custom-header-media">
			<?php the_custom_header_markup(); ?>
                    <?php
 
                    if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
                        <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
                        <?php add_theme_support(dynamic_sidebar( 'custom-header-widget' )); ?>
                        </div>

                    <?php endif; ?>
		</div>

	<?php // get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
