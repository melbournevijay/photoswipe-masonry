<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

class Photoswipe_Options {

	public static function get_options() {
		$options = get_option('photoswipe_options');
		if (!is_array($options)) {
			$options = array (
				'show_controls' => false,
				'item_count' => 10,
				'show_captions' => true,
				'use_masonry' => true,
				'thumbnail_width' => 150,
				'thumbnail_height' => 150,
				'max_image_height' => '2400',
				'max_image_width' => '1800',
				'white_theme' => false,
				'crop_thumbnails' => false
			);
			update_option('photoswipe_options', $options);
		}else if ( !isset( $options['crop_thumbnails'] ) ){
			$options['crop_thumbnails'] = false; //hides notice on upgrade
		}
		return $options;
	}
}
