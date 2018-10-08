<?php
// Page
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Page', 'excitor' ),
	'id'               => 'bt_page',
	'icon'             => 'el el-bookmark-empty',
	'fields'           => array(
		array(
			'id'       => 'page_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Page Comment', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to enable page comment.', 'excitor' ),
			'default'  => true,
		),
		array(
			'id'            => 'sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'excitor' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'excitor' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
	)
) );
