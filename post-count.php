<?php

	/* ------------------------------------------------------------------------------- */
	/* @package Base_RS
	/* View Counter - WITHOUT PLUGIN
	/* ------------------------------------------------------------------------------- */

	function baseRS_getPostViews($postID) {
		$count_key = 'rs_post_view_count';
		$count     = get_post_meta($postID, $count_key, TRUE);
		if ($count == '') {
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
			return "0";
		}
		return $count;
	}

	function baseRS_setPostViews($postID) {
		$count_key = 'rs_post_view_count';
		$count     = get_post_meta($postID, $count_key, TRUE);
		if ($count == '') {
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
		} else {
			$count++;
			update_post_meta($postID, $count_key, $count);
		}
	}
?>