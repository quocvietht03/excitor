<?php
// Colors
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Colors', 'excitor' ),
	'id'               => 'bt_colors',
	'icon'             => 'el el-tint',
	'fields'           => array(
		array(
			'id'       => 'main_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Main Color', 'excitor' ),
			'subtitle' => esc_html__( 'Control the main highlight color throughout the theme. Class apply: bt-main-color', 'excitor' ),
			'default'  => '#3cc951',
			'output'   => array('.bt-main-color')
		),
		array(
			'id'       => 'secondary_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Secondary Color', 'excitor' ),
			'subtitle' => esc_html__( 'Control the secondary highlight color throughout the theme. Class apply: bt-secondary-color', 'excitor' ),
			'default'  => '#1ab7ea',
			'output'   => array('.bt-secondary-color')
		),
		array(
			'id'       => 'body_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Body Color', 'excitor' ),
			'subtitle' => esc_html__( 'Controls the color of all text body.', 'excitor' ),
			'active'    => false,
			'default'  => '#555555',
			'output'   => array('body')
		),
		array(
			'id'       => 'heading_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Heading Color', 'excitor' ),
			'subtitle' => esc_html__( 'Controls the color of all heading.', 'excitor' ),
			'active'    => false,
			'default'  => '#333333',
			'output'   => array('h1, h2, h3, h4, h5, h6')
		),
		array(
			'id'       => 'link_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Link Color', 'excitor' ),
			'subtitle' => esc_html__( 'Controls the color of all text links.', 'excitor' ),
			'active'    => false,
			'default'  => '#555555',
			'output'   => array('a')
		),
		
	)
) );
