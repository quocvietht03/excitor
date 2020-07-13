<?php
// Typography
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Typography', 'excitor' ),
	'id'               => 'bt_typography',
	'icon'             => 'el el-fontsize',
	'fields'           => array(
		array(
			'id'       => 'body_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Body Font', 'excitor' ),
			'subtitle' => esc_html__( 'These settings control the typography body.', 'excitor' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '15px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '26px',
				'letter-spacing' => '0'
			),
			'output'    => array('body')
		),
		array(
			'id'       => 'h1_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H1 Typography', 'excitor' ),
			'subtitle' => esc_html__( 'These settings control the typography H1.', 'excitor' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '36px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '42px',
				'letter-spacing' => '0'
			),
			'output'    => array('h1')
		),
		array(
			'id'       => 'h2_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H2 Typography', 'excitor' ),
			'subtitle' => esc_html__( 'These settings control the typography H2.', 'excitor' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '30px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '36px',
				'letter-spacing' => '0'
			),
			'output'    => array('h2')
		),
		array(
			'id'       => 'h3_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H3 Typography', 'excitor' ),
			'subtitle' => esc_html__( 'These settings control the typography H3.', 'excitor' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '24px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '30px',
				'letter-spacing' => '0'
			),
			'output'    => array('h3')
		),
		array(
			'id'       => 'h4_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H4 Typography', 'excitor' ),
			'subtitle' => esc_html__( 'These settings control the typography H4.', 'excitor' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '18px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('h4')
		),
		array(
			'id'       => 'h5_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H5 Typography', 'excitor' ),
			'subtitle' => esc_html__( 'These settings control the typography H5.', 'excitor' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '16px',
				'letter-spacing' => '0'
			),
			'output'    => array('h5')
		),
		array(
			'id'       => 'h6_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H6 Typography', 'excitor' ),
			'subtitle' => esc_html__( 'These settings control the typography H6.', 'excitor' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '12px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '14px',
				'letter-spacing' => '0'
			),
			'output'    => array('h6')
		),
		
	)
) );
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Extra Font', 'excitor' ),
	'id'               => 'bt_extrafont',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'extra_font_1',
			'type'     => 'typography',
			'title'    => esc_html__( 'Extra Font 1', 'excitor' ),
			'subtitle' => esc_html__( 'Select a font to use throughout Typography settings.', 'excitor' ),
			'subsets'   => false,
			'font-size'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'line-height'   => false,
			'text-align'   => false,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
		),
		array(
			'id'=>'extra_element_1',
			'type' => 'textarea',
			'title' => esc_html__('Elements 1', 'excitor'), 
			'subtitle' => esc_html__('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'excitor'),
			'default' => ''
		),
		array(
			'id'       => 'extra_font_2',
			'type'     => 'typography',
			'title'    => esc_html__( 'Extra Font 2', 'excitor' ),
			'subtitle' => esc_html__( 'Select a font to use throughout Typography settings.', 'excitor' ),
			'subsets'   => false,
			'font-size'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'line-height'   => false,
			'text-align'   => false,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
		),
		array(
			'id'=>'extra_element_2',
			'type' => 'textarea',
			'title' => esc_html__('Elements 2', 'excitor'), 
			'subtitle' => esc_html__('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'excitor'),
			'default' => ''
		),
		array(
			'id'       => 'extra_font_3',
			'type'     => 'typography',
			'title'    => esc_html__( 'Extra Font 3', 'excitor' ),
			'subtitle' => esc_html__( 'Select a font to use throughout Typography settings.', 'excitor' ),
			'subsets'   => false,
			'font-size'   => false,
			'font-weight'   => false,
			'font-style'   => false,
			'line-height'   => false,
			'text-align'   => false,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
		),
		array(
			'id'=>'extra_element_3',
			'type' => 'textarea',
			'title' => esc_html__('Elements 3', 'excitor'), 
			'subtitle' => esc_html__('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'excitor'),
			'default' => ''
		),
	)
) );
