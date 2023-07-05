<?php 

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}


/* BLOG LAYOUT
   ====================================================*/
if (!function_exists('unblock_peiblog_styles')) :
	function unblock_peiblog_styles() 
	{

		$unblock_blog_style = apply_filters('unblock_blog_style', get_theme_mod('unblock_blog_style', 'classic-right'));

		$peiCorner = new Wp_Query(array(
			"posts_per_page" => 5,
			"post_type" => "event"
			));

		// Start
		if ($peiCorner->have_posts()) :

			switch (esc_attr($unblock_blog_style)) {

				case "list":
					echo '<div class="column-wrapper blog-list">';
					while ($peiCorner->have_posts()) : $peiCorner->the_post();
						// Get the post summary
						get_template_part('template-parts/content/content', $unblock_blog_style !== 'classic-right' ? $unblock_blog_style : '');
					endwhile;
					echo '</div>';
					// Blog navigation
					unblock_paging_nav();
					break;

				case "classic-left":
					echo '<div class="row column-wrapper blog-list"><div class="col-md-8 order-md-2">';
					while ($peiCorner->have_posts()) : $peiCorner-> the_post();
						// Get the post summary							
						get_template_part('template-parts/content/content', $unblock_blog_style !== 'classic-right' ? $unblock_blog_style : '');
					endwhile;
					echo '</div><aside id="left-sidebar" class="col-md-4 order-2 order-md-1">';
					get_sidebar();
					echo '</aside></div>';

					// Blog navigation
					unblock_paging_nav();
					break;

				default:
					echo '<div class="row column-wrapper blog-list"><div class="col-md-8">';
					while ($peiCorner->have_posts()) : $peiCorner->the_post();
						// Get the post summary							
						get_template_part('template-parts/content/content', $unblock_blog_style !== 'classic-right' ? $unblock_blog_style : '');
					endwhile;
					echo '</div><aside id="right-sidebar" class="col-md-4">';
					get_sidebar();
					echo '</aside></div>';

					// Blog navigation
					unblock_paging_nav();
			}


		else :
			get_template_part('template-parts/content/content', 'none');
		endif;
		// End

	}
endif;