<?php
// Icons
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Font Icons', 'excitor' ),
	'id'               => 'bt_fonticons',
	'icon'             => 'el el-info-circle',
	'fields'           => array(
		array(
			'id'       => 'font_awesome',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Awesome', 'excitor' ),
			'subtitle' => esc_html__( 'Use font awesome.', 'excitor' ),
			'default'  => true,
		),
		array(
			'id'       => 'font_pe_icon_7_stroke',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Pe Icon 7 Stroke', 'excitor' ),
			'subtitle' => esc_html__( 'Use font pe icon 7 stroke.', 'excitor' ),
			'default'  => false,
		),
		array(
			'id'       => 'flaticon',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Flaticon', 'excitor' ),
			'subtitle' => esc_html__( 'Use font flaticon.', 'excitor' ),
			'default'  => false,
		),
	)
) );
