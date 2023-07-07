<?php

if (!function_exists('unblock_peipaging_nav')) :

	function unblock_peipaging_nav()
	{
		$peiCorner = new WP_Query(array(
			"posts_per_page" => 5,
			"post_type" => "event"
			));
		the_posts_pagination(array(
			"total" => $peiCorner-> max_num_pages,
			'prev_text' => is_rtl() ? '<i class="bi bi-caret-right-fill"></i>' : '<i class="bi bi-caret-left-fill"></i>',
			'next_text' =>  is_rtl() ? '<i class="bi bi-caret-left-fill"></i>' : '<i class="bi bi-caret-right-fill"></i>',
			'before_page_number' => ''
		));
	}
endif;