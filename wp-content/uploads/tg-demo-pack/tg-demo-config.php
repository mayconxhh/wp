<?php
/**
 * Functions for configuring demo importer.
 *
 * @author   ThemeGrill
 * @category Admin
 * @package  Importer/Functions
 * @version  1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Setup demo importer config.
 *
 * @param  array $demo_config
 *
 * @return array
 */
function tg_demo_importer_config( $demo_config ) {
	$new_demo_config = array(
		'fitclub-free' => array(
			'name'                   => 'Fitclub',
			'theme'                  => 'Fitclub',
			'template'               => 'fitclub',
			'demo_url'               => 'https://demo.themegrill.com/fitclub/',
			'demo_pack'              => true,
			'core_options'           => array(
				'blogname'       => 'FitClub',
				'page_on_front'  => 'Home',
				'page_for_posts' => 'Blog',
			),
			'widgets_data_update'    => array(

				/**
				 * Dropdown Pages - Handles widgets Page ID.
				 *
				 * 1. fitclub_about_us_widget
				 *
				 */
				'dropdown_pages' => array(
					'fitclub_about_us_widget' => array(
						3 => array(
							'page_id' => 'About',
						),
					),
				),
			),
			'customizer_data_update' => array(
				'nav_menu_locations' => array(
					'primary' => 'Header Menu',
					'social'  => 'Social',
				),
			),
			'plugins_list'           => array(
				'everest-forms' => array(
					'name'     => 'Everest Forms – Easy Contact Form and Form Builder',
					'slug'     => 'everest-forms/everest-forms.php',
					'required' => true,
				),
			),
		),
	);

	return array_merge( $new_demo_config, $demo_config );
}

add_filter( 'themegrill_demo_importer_config', 'tg_demo_importer_config' );
