<?php
//vc_section
vc_add_params( 'vc_section', array(
	array(
		'type' => 'dropdown',
		'heading' => esc_html__('Particles Effect', 'excitor'),
		'param_name' => 'particles_effect',
		'value' => array(
			esc_html__('None', 'excitor') => 'none',
			esc_html__('Default', 'excitor') => 'default',
			esc_html__('Nasa', 'excitor') => 'nasa',
			esc_html__('Bubble', 'excitor') => 'bubble',
			esc_html__('Snow', 'excitor') => 'snow',
			esc_html__('Nyan', 'excitor') => 'nyan',
			esc_html__('Custom', 'excitor') => 'custom'
		),
		'group' => esc_html__('Particles', 'excitor'),
		'description' => esc_html__('Select particles effect in this section.', 'excitor')
	),
	array(
		'type' => 'textarea',
		'heading' => esc_html__('Particles Json', 'excitor'),
		'param_name' => 'particles_json',
		'value' => '',
		'group' => esc_html__('Particles', 'excitor'),
		'dependency' => array(
			'element'=>'particles_effect',
			'value'=> 'custom'
		),
		'description' => esc_html__('Enter text json config particles effect.', 'excitor')
	),
	array(
		'type' => 'dropdown',
		'heading' => esc_html__('Disable Background Image', 'excitor'),
		'param_name' => 'disable_bg_image',
		'value' => array(
			esc_html__('None', 'excitor') => 'none',
			esc_html__('Screen less than 1200', 'excitor') => 'md',
			esc_html__('Screen less than 992', 'excitor') => 'sm',
			esc_html__('Screen less than 768', 'excitor') => 'xs'
		),
		'group' => esc_html__('Design Options', 'excitor'),
		'description' => esc_html__('Disable background image in this section.', 'excitor')
	),
) );

//vc_row
vc_add_params( 'vc_row', array(
	array(
		'type' => 'dropdown',
		'heading' => esc_html__('Row Style', 'excitor'),
		'param_name' => 'row_container',
		'value' => array(
			esc_html__('Full Width', 'excitor') => 'fullwidth',
			esc_html__('Container', 'excitor') => 'container'
		),
		'weight' => 1,
		'description' => esc_html__('Select row style.', 'excitor')
	),
	array(
		'type' => 'textfield',
		'heading' => esc_html__('Content Max Width', 'excitor'),
		'param_name' => 'row_content_max_width',
		'value' => '',
		'weight' => 1,
		'dependency' => array(
			'element'=>'row_container',
			'value'=> 'fullwidth'
		),
		'description' => esc_html__('Enter number with px to set content max with. Ex: 1240px', 'excitor')
	),
	array(
		'type' => 'checkbox',
		'heading' => esc_html__('Columns no gap', 'excitor'),
		'param_name' => 'columns_no_gap',
		'value' => '',
		'weight' => 1,
		'description' => esc_html__('Enable no gap between columns in row.', 'excitor')
	),
	array(
        'type' => 'textfield',
        'heading' => esc_html__('Animate Delay', 'excitor'),
        'param_name' => 'animate_delay',
        'value' => '0.3',
		'group' => esc_html__('Animation', 'excitor'),
        'description' => esc_html__('Animate delay (s). Example: 0.5', 'excitor')
    ),
	array(
        'type' => 'textfield',
        'heading' => esc_html__('Animate Duration', 'excitor'),
        'param_name' => 'animate_duration',
        'value' => '1.2',
		'group' => esc_html__('Animation', 'excitor'),
        'description' => esc_html__('Animate duration (s). Example: 0.6', 'excitor')
    ),
	array(
		'type' => 'dropdown',
		'heading' => esc_html__('Particles Effect', 'excitor'),
		'param_name' => 'particles_effect',
		'value' => array(
			esc_html__('None', 'excitor') => 'none',
			esc_html__('Default', 'excitor') => 'default',
			esc_html__('Nasa', 'excitor') => 'nasa',
			esc_html__('Bubble', 'excitor') => 'bubble',
			esc_html__('Snow', 'excitor') => 'snow',
			esc_html__('Nyan', 'excitor') => 'nyan',
			esc_html__('Custom', 'excitor') => 'custom'
		),
		'group' => esc_html__('Particles', 'excitor'),
		'description' => esc_html__('Enable particles effect in this section.', 'excitor')
	),
	array(
		'type' => 'textarea',
		'heading' => esc_html__('Particles Json', 'excitor'),
		'param_name' => 'particles_json',
		'value' => '',
		'group' => esc_html__('Particles', 'excitor'),
		'dependency' => array(
			'element'=>'particles_effect',
			'value'=> 'custom'
		),
		'description' => esc_html__('Enter text json config particles effect.', 'excitor')
	)
) );

vc_remove_param( "vc_row", "full_width" );
vc_remove_param( "vc_row", "gap" );

//vc_column
vc_add_params( 'vc_column', array(
	array(
        'type' => 'textfield',
        'heading' => esc_html__('Animate Delay', 'excitor'),
        'param_name' => 'animate_delay',
        'value' => '0.3',
		'group' => esc_html__('Animation', 'excitor'),
        'description' => esc_html__('Animate delay (s). Example: 0.5', 'excitor')
    ),
	array(
        'type' => 'textfield',
        'heading' => esc_html__('Animate Duration', 'excitor'),
        'param_name' => 'animate_duration',
        'value' => '1.2',
		'group' => esc_html__('Animation', 'excitor'),
        'description' => esc_html__('Animate duration (s). Example: 0.6', 'excitor')
    )
) );

//vc_custom_heading
vc_add_param( 'vc_custom_heading', array(
    'type' => 'textarea',
    'heading' => esc_html__('Custom Style', 'excitor'),
    'param_name' => 'custom_style',
    'value' => '',
    'description' => esc_html__('Enter custom style for heading element', 'excitor'),
	'group' => esc_html__('Extra Options', 'excitor')
) );

// vc_hoverbox
vc_add_param( 'vc_hoverbox', array(
    'type' => 'textfield',
    'heading' => esc_html__('Oder Number', 'excitor'),
    'param_name' => 'oder_number',
    'value' => '',
	'weight' => 1,
    'description' => esc_html__('Enter oder number.', 'excitor')
) );
