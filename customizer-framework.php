<?php
/**
 * Plugin Name: Customizer Framework
 * Plugin URI:  http://philipnewcomer.net/wordpress-customizer-framework/
 * Version:     0.1
 * Description: A lightweight and easy-to-use framework for the WordPress Customizer.
 * Author:      Philip Newcomer
 * Author URI:  http://philipnewcomer.net
 *
 * Copyright (C) 2014 Philip Newcomer
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

/**
 * Loads the main framework class
 */
require_once( 'inc/class-CustomizerFramework.php' );


/**
 * Registers any settings attached to the customizer_framework_settings filter
 */
function customizer_framework_init() {

	$customizer_fw = new CustomizerFramework();

	$settings = apply_filters( 'customizer_framework_settings', array() );

	if ( is_array( $settings ) && ! empty( $settings ) ) {
		foreach( $settings as $setting ) {
			$customizer_fw->add_setting( $setting );
		}
	}

}
add_action( 'after_setup_theme', 'customizer_framework_init' );
