<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'testimonial_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'testimonial-meta' => array(
				'title' => esc_html__('Meta Fields', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'position' => array(
						'type'  => 'text',
						'value' => 'Ceo/Founder',
						'label' => esc_html__('Position', 'excitor'),
						'desc'  => esc_html__('Please, enter position of testimonial.', 'excitor'),
					),
					
				),
			),
			
		)
	)
	
);