<?php
/**
 * Plugin Name: WooCommerce Subscriptions Gifting - Auto-Check
 * Plugin URI: https://github.com/jrick1229/wcsg-auto-check
 * Description: Auto-check the gifting checkbox on the product page.
 * Author: Prospress Inc.
 * Author URI: http://prospress.com/
 * Version: 2.0
 * License: GPLv3
 *
 * GitHub Plugin URI: Prospress/wcsg-auto-check
 * GitHub Branch: master
 *
 * Copyright 2017 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package		WooCommerce Subscriptions
 * @author		Prospress Inc.
 * @since		1.0
 */

function wcsg_auto_check() {
    $current_page = get_the_ID();
    $pages_to_check = ( defined( 'WCSG_PAGES_TO_CHECK' ) ? WCSG_PAGES_TO_CHECK : true );

    if ( $pages_to_check === true || in_array( $current_page, $pages_to_check ) ) {
        wp_enqueue_script( 'wcsg-auto-check-script', plugin_dir_url( __FILE__ ) . 'wcsg-auto-check.js', array( 'jquery' ), '1.0.0', true  );
    }
}
add_action( 'wp_enqueue_scripts', 'wcsg_auto_check' );
