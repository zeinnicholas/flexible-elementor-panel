<?php

namespace FEP\Core\Settings\General; // use it for redeclare the class of this file

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Elementor\Controls_Manager as Elementor_Controls_Manager;
use Elementor\Core\Settings\Base\Model as Elementor_Model;

class Model extends Elementor_Model {
	public function get_name() {
		return 'fep-settings';
	}

	public function get_css_wrapper_selector() {
		// TODO: Implement get_css_wrapper_selector() method.
	}

	public function get_panel_page_settings()	{
		return [
			'title' => __( 'FEP Settings', 'fep' ),
			'menu' => [
				'icon' => 'fa fa-arrows-alt',
				'beforeItem' => 'elementor-settings',
			],
		];
	}

	public static function get_controls_list() {

		$debugger_html = '<button type="button" class="reset-fep elementor-button elementor-button-default">' . __( 'Reset Panel Position/Size', 'fep' ) . '</button>';

		$text_html_pro_version = __( 'Pro version is coming soon, get the information now on:', 'fep' );
		$html_pro_version_html = '<img src="' . FEP_URL .'/assets/images/banner-fep-pro.jpg"><p>' . $text_html_pro_version .'<br><a href="https://flexible-elementor-panel.com" target="_blank">flexible-elementor-panel.com</a></p>';

		return [

			Elementor_Controls_Manager::TAB_SETTINGS => [
				'fep_settings_panel'  => [
					'label'     => __('Panel settings', 'fep'),
					'controls'  => [
						'draggable_panel' => [
							'label' 			=> __('Draggable panel', 'fep'),
							'description' 		=> __( 'hold down the left click on title of panel for move it (put it in the corner left and click on the title for back to origin style)', 'fep' ),
							'type'  			=> Elementor_Controls_Manager::SWITCHER,
							'label_on' 			=> __('On', 'fep'),
							'label_off' 		=> __('Off', 'fep'),
							'return_value' 		=> 'yes',
							'default' 			=> 'yes',
						],
						'use_grid_ruler' => [
							'label' 			=> __('Use FLEX GRID for widgets', 'fep'),
							'description' 		=> __( 'This reduce the size of widgets in the editor and styling them', 'fep' ),
							'type'  			=> Elementor_Controls_Manager::SWITCHER,
							'label_on' 			=> __('On', 'fep'),
							'label_off' 		=> __('Off', 'fep'),
							'return_value' 		=> 'yes',
							'default' 			=> 'yes',
						],
						'minimize_category_space'  => [
							'label' 			=> __('Minimize all categories with right click', 'fep'),
							'description' 		=> __( 'click the right mouse button on the panel to collapse all categories of widgets', 'fep' ),
							'type'  			=> Elementor_Controls_Manager::SWITCHER,
							'label_on' 			=> __('On', 'fep'),
							'label_off' 		=> __('Off', 'fep'),
							'return_value' 		=> 'yes',
							'default' 			=> 'yes',

						],
						'editor_skin' => [
							'label' 			=> __('Editor skins', 'fep'),
							'type'  			=> Elementor_Controls_Manager::SELECT,
							'options'   		=> [
								'dark_pink'   		=>     __('Dark Pink', 'fep'),
								'dark_orange'    	=>     __('Dark Orange', 'fep'),
								'default'   		=>     __('Default', 'fep')
							],
							'default' 			=> 'default',
						],
						'display_vertical_collaspe_icon' => [
							'label' 			=> __('Display the vertical collaspe icon in header panel', 'fep'),
							'type'  			=> Elementor_Controls_Manager::SWITCHER,
							'label_on' 			=> __('On', 'fep'),
							'label_off' 		=> __('Off', 'fep'),
							'return_value' 		=> 'yes',
							'default' 			=> 'yes',
						],
						'display_reset_icon' => [
							'label' 			=> __('Display the reset panel icon in header panel', 'fep'),
							'type'  			=> Elementor_Controls_Manager::SWITCHER,
							'label_on' 			=> __('On', 'fep'),
							'label_off' 		=> __('Off', 'fep'),
							'return_value' 		=> 'yes',
							'default' 			=> 'yes',
						],
					]
				],
				'fep_settings_exit'  => [
					'label'     => __('Exit button options', 'fep'),
					'controls'  => [
						'display_exit_icon' => [
							'label' 			=> __('Display the exit icon in footer panel', 'fep'),
							'type'  			=> Elementor_Controls_Manager::SWITCHER,
							'label_on' 			=> __('On', 'fep'),
							'label_off' 		=> __('Off', 'fep'),
							'return_value' 		=> 'yes',
							'default' 			=> 'yes',
						],
						'exit_link_point' => [
							'label' 			=> __('Exit point', 'fep'),
							'type'  			=> Elementor_Controls_Manager::SELECT,
							'options'   		=> [
								'front'       	=>      __('View', 'fep'),
								'edit'          =>      __('Edition', 'fep'),
								'list'          =>      __('List Page/Post', 'fep'),
								'admin_dashboard'    =>      __('Admin dashboard', 'fep'),
								'elementor_library'  =>      __('Elementor library', 'fep'),
							],
							'default' 			=> 'front',
						],
						'exit_link_new_tab' =>	[
							'label' 			=> __('Open in new tab', 'fep'),
							'type'  			=> Elementor_Controls_Manager::SWITCHER,
							'label_on' 			=> __('On', 'fep'),
							'label_off' 		=> __('Off', 'fep'),
							'return_value' 		=> 'yes',
							'default' 			=> 'yes',
						],
					]
				],
				'fep_settings_responsive'  => [
					'label'     => __('Responsive options', 'fep'),
					'controls'  => [
						'fep_settings_responsive_note' => [
							'type' 				=> Controls_Manager::RAW_HTML,
							'raw' 				=> __( 'These options give you control over how responsive hidden elements appear and behave inside the Elementor editor by overriding the default grayed out diagonal overlay pattern that appears when you set to hide an element. Use these options carefully to avoid misplacing elements while editing.', 'fep' ),
							'content_classes' 	=> 'elementor-panel-alert elementor-panel-alert-warning',
						],
						'hide_elements_responsive' => [
							'label' 			=> __('Hide Responsive Elements', 'fep'),
							'description' 		=> __('Completely hides elements that are set to hide in responsive modes. If you cannot find a specific element, you can always use the Navigator or switch this off. By activating this option you will override any options below.', 'fep'),
							'type' 				=> \Elementor\Controls_Manager::SWITCHER,
							'label_on' 			=> __('On', 'fep'),
							'label_off' 		=> __('Off', 'fep'),
							'return_value' 		=> 'yes',
							//'default' 			=> 'yes',
						],
						'maintain_obscured_elements_responsive' => [
							'label' 			=> __('Allow Editing Inside Sections', 'fep'),
							'description' 		=> __('Allow editing of any elements inside responsive hidden Sections or Inner Sections without having to use the Navigator.', 'fep'),
							'type' 				=> \Elementor\Controls_Manager::SWITCHER,
							'label_on' 			=> __('On', 'fep'),
							'label_off' 		=> __('Off', 'fep'),
							'return_value' 		=> 'yes',
							//'default' 			=> 'yes',
						],
						'disable_obscured_elements_responsive' => [
							'label' 			=> __('Disable Responsive Overlays', 'fep'),
							'description' 		=> __('Completely disable the responsive grayed out overlay pattern from any responsive hidden element and restore their original colors.', 'fep'),
							'type' 				=> \Elementor\Controls_Manager::SWITCHER,
							'label_on' 			=> __('On', 'fep'),
							'label_off' 		=> __('Off', 'fep'),
							'return_value' 		=> 'yes',
							//'default' 			=> 'yes',
						],
						'alternative_responsive_indicator' => [
							'label' 			=> __('Alternative Responsive Indicator', 'fep'),
							'description' 		=> __('Adds an alternative indicator for responsive hidden elements by changing their handle colors and adding a dashed border to each one when they are hovered or selected.', 'fep'),
							'type' 				=> \Elementor\Controls_Manager::SWITCHER,
							'label_on' 			=> __('On', 'fep'),
							'label_off' 		=> __('Off', 'fep'),
							'return_value' 		=> 'yes',
							//'default' 			=> 'yes',
						],
					]
				],
				'fep_settings_accordion'  => [
					'label'     => __('Accordion widget options', 'fep'),
					'controls'  => [
						'accordion_options' => [
							'label' 			=> __('First tab closed (only in editor)', 'fep'),
							'type'  			=> Elementor_Controls_Manager::SWITCHER,
							'label_on' 			=> __('On', 'fep'),
							'label_off' 		=> __('Off', 'fep'),
							'return_value' 		=> 'yes',
							'default' 			=> 'yes',
						],
					]
				],
				'fep_settings_other'  => [
					'label'     => __('Tools & Informations', 'fep'),
					'controls'  => [
						'reset_panel' => [
							'type'  			=> Elementor_Controls_Manager::RAW_HTML,
							'raw' 				=> $debugger_html,
						],
						'fep_note_pro_version' => [
							'type' 				=> Elementor_Controls_Manager::RAW_HTML,
							'raw' 				=> $html_pro_version_html,
							'content_classes' 	=> 'ee-raw-html ee-raw-html__warning',
						]
					]
				]
			]
		];

	}

	protected function _register_controls() {

		$controls_list = self::get_controls_list();

		foreach ( $controls_list as $tab_name => $sections ) {

			foreach ( $sections as $section_name => $section_data ) {

				$this->start_controls_section(
					$section_name, [
						'label' => $section_data['label'],
						'tab' => $tab_name,
					]
				);

				foreach ( $section_data['controls'] as $control_name => $control_data ) {
					$this->add_control( $control_name, $control_data );
				}

				$this->end_controls_section();
			}
		}
	}
}
