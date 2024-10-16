<?php
// General
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'General', 'excitor' ),
	'id'               => 'bt_general',
	'icon'             => 'el el-adjust-alt',
	'fields'           => array(
		array(
			'id'       => 'less_design',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Less Design', 'excitor' ),
			'subtitle' => esc_html__( 'Enable less design to generate css over time...', 'excitor' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_layout',
			'type'     => 'button_set',
			'title'    => esc_html__('Site Layout', 'excitor'),
			'subtitle' => esc_html__('Control the site layout.', 'excitor'),
			'options' => array(
				'wide' => esc_html__('Wide', 'excitor'), 
				'boxed' => esc_html__('Boxed', 'excitor'),
			 ), 
			'default' => 'wide'
		),
		array(
			'id'            => 'site_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Site Width', 'excitor' ),
			'subtitle'      => esc_html__( 'Control the overall site width.', 'excitor' ),
			'default'       => 1200,
			'min'           => 1200,
			'step'          => 1,
			'max'           => 1600,
			'display_value' => 'text',
			'required' 		=> array('site_layout' , '=', 'boxed')
		),
		array(
			'id'       => 'boxed_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Boxed Background', 'excitor' ),
			'subtitle' => esc_html__( 'Control the background color of the boxed.', 'excitor' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed #bt-main')
		),
		array(
			'id'       => 'boxed_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'         => false,
			'left'          => false,
			'title'    => esc_html__( 'Boxed Space', 'excitor' ),
			'subtitle' => esc_html__( 'Control the space top and bottom of boxed.', 'excitor' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed #bt-main')
		),
		array(
			'id'       => 'body_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Body Background', 'excitor' ),
			'subtitle' => esc_html__( 'Control the background of the body.', 'excitor' ),
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('body'),
		),
		array(
			'id'            => 'mobile_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Mobile Width', 'excitor' ),
			'subtitle'      => esc_html__( 'Controls the width to enable mobile.', 'excitor' ),
			'default'       => 991,
			'min'           => 540,
			'step'          => 1,
			'max'           => 1199,
			'display_value' => 'text'
		),
		array(
			'id'       => 'particles_effect',
			'type'     => 'switch',
			'title'    => esc_html__( 'Particles Effect', 'excitor' ),
			'subtitle' => esc_html__( 'Use particles effect.', 'excitor' ),
			'default'  => false,
		),
		array(
			'id'       => 'smooth_scroll',
			'type'     => 'switch',
			'title'    => esc_html__( 'Smooth Scroll', 'excitor' ),
			'subtitle' => esc_html__( 'Use smooth scroll.', 'excitor' ),
			'default'  => false,
		),
		array(
			'id'       => 'nice_scroll_bar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Nice Scroll Bar', 'excitor' ),
			'subtitle' => esc_html__( 'Use nice scroll bar.', 'excitor' ),
			'default'  => false,
		),
		array(
			'id'=>'nice_scroll_bar_element',
			'type' => 'textarea',
			'title' => esc_html__('Nice Scroll Bar Elements', 'excitor'), 
			'subtitle' => esc_html__('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'excitor'),
			'default' => 'html, .bt-header-vertical .bt-vertical-menu-wrap',
			'required' 		=> array('nice_scroll_bar' , '=', '1')
		),
		array(
			'id'       => 'back_to_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Back To Top', 'excitor' ),
			'subtitle' => esc_html__( 'Control button back to top.', 'excitor' ),
			'default'  => false,
		),
		array(
			'id'       => 'back_to_top_style',
			'type'     => 'select',
			'title'    => esc_html__( 'Back To Top Style', 'excitor' ),
			'subtitle' => esc_html__( 'Select style button back to top.', 'excitor' ),
			'options'  => array(
				'square' => esc_html__( 'Square', 'excitor' ),
				'rounded' => esc_html__( 'Rounded', 'excitor' ),
				'circle' => esc_html__( 'Circle', 'excitor' )
			),
			'default'  => 'square',
			'required' 		=> array('back_to_top' , '=', '1')
		),
		array(
			'id'       => 'site_loading',
			'type'     => 'switch',
			'title'    => esc_html__( 'Site Loading', 'excitor' ),
			'subtitle' => esc_html__( 'Control animation before site load complete.', 'excitor' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_loading_spinner',
			'type'     => 'select',
			'title'    => esc_html__( 'Spinner Style', 'excitor' ),
			'subtitle' => esc_html__( 'Select style spinner.', 'excitor' ),
			'options'  => array(
				'spinner0' => esc_html__( 'Default', 'excitor' ),
				'spinner1' => esc_html__( 'Style 1', 'excitor' ),
				'spinner2' => esc_html__( 'Style 2', 'excitor' ),
				'spinner3' => esc_html__( 'Style 3', 'excitor' ),
				'spinner4' => esc_html__( 'Style 4', 'excitor' ),
				'spinner5' => esc_html__( 'Style 5', 'excitor' )
			),
			'default'  => 'spinner0',
			'required' 		=> array('site_loading' , '=', '1')
		),
		array(
			'id'       => 'site_loading_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Site Loading Background', 'excitor' ),
			'subtitle' => esc_html__( 'Control the background of site loading.', 'excitor' ),
			'default'  => array(
				'background-color' => '#3cc951',
			),
			'required' 		=> array('site_loading' , '=', '1'),
			'output'    => array('#site_loading')
		),
		array(
			'id'       => 'nav_dots_style',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Nav & Dots Style', 'excitor' ),
			'subtitle' => esc_html__( 'Select a navigaiton & dots style for carousel.', 'excitor' ),
			'options'  => array(
				'0' => array(
					'alt' => 'Nav & Dots Default',
					'img' => get_template_directory_uri() . '/assets/images/button/nav-dots-default.jpg'
				),
				'1' => array(
					'alt' => 'Nav & Dots Style 1',
					'img' => get_template_directory_uri() . '/assets/images/button/nav-dots-style1.jpg'
				)
			),
			'default'  => '0'
		),
		array(
			'id'       => 'pagination_style',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Pagination Style', 'excitor' ),
			'subtitle' => esc_html__( 'Select a pagination style.', 'excitor' ),
			'options'  => array(
				'0' => array(
					'alt' => 'Pagination Style default',
					'img' => get_template_directory_uri() . '/assets/images/button/pagination-default.jpg'
				),
				'1' => array(
					'alt' => 'Pagination Style 1',
					'img' => get_template_directory_uri() . '/assets/images/button/pagination-style1.jpg'
				)
			),
			'default'  => '0'
		),
		array(
			'id'       => 'pagination_prev_text',
			'type'     => 'text',
			'title'    => esc_html__( 'Previous Text', 'excitor' ),
			'subtitle' => esc_html__( 'Enter previous text of pagination.', 'excitor' ),
			'default'  => 'Previous'
		),
		array(
			'id'       => 'pagination_next_text',
			'type'     => 'text',
			'title'    => esc_html__( 'Next Text', 'excitor' ),
			'subtitle' => esc_html__( 'Enter next text of pagination.', 'excitor' ),
			'default'  => 'Next'
		),
	)
) );
