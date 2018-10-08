<?php
// Custom Css & Js
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Custom Css & Js', 'excitor' ),
	'id'               => 'bt_customcssjs',
	'icon'             => 'el el-css',
	'fields'		   => array(
		array(
			'id'       => 'custom_css_code',
			'type'     => 'ace_editor',
			'title'    => esc_html__( 'CSS Code', 'excitor' ),
			'subtitle' => esc_html__( 'Paste your custom CSS code here.', 'excitor' ),
			'mode'     => 'css',
			'theme'    => 'monokai',
			'default'  => ''
		),
		array(
			'id'       => 'custom_js_code',
			'type'     => 'ace_editor',
			'title'    => esc_html__( 'JS Code', 'excitor' ),
			'subtitle' => esc_html__( 'Paste your custom JS code here.', 'excitor' ),
			'mode'     => 'javascript',
			'theme'    => 'chrome',
			'default'  => ''
		),
	)
) );
