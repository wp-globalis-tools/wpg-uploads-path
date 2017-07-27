<?php
/**
 * Plugin Name:         WPG Uploads Path
 * Plugin URI:          https://github.com/wp-globalis-tools/wpg-uploads-path
 * Description:         Change WordPress uploads directory and fix media filenames
 * Author:              Pierre Dargham, Globalis Media Systems
 * Author URI:          https://www.globalis-ms.com/
 * License:             GPL2
 *
 * Version:             0.2.0
 * Requires at least:   4.0.0
 * Tested up to:        4.7.8
 */

namespace Globalis\WP\UploadsPath;

if(defined('WP_UPLOADS_DIR') && defined('WP_UPLOADS_URL')) {
	add_filter('pre_option_upload_path', function() { return WP_UPLOADS_DIR; });
	add_filter('pre_option_upload_url_path', function() { return WP_UPLOADS_URL; });
}

add_filter('sanitize_file_name', 'remove_accents', 10, 1);
