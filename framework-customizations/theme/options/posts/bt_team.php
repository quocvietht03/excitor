<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'team_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'team-meta' => array(
				'title' => esc_html__('Meta Fields', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'position' => array(
						'type'  => 'text',
						'value' => 'Ceo/Founder',
						'label' => esc_html__('Position', 'excitor'),
						'desc'  => esc_html__('Please, enter position of member.', 'excitor'),
					),
					'email' => array(
						'type'  => 'text',
						'value' => 'bearsthemes@gmail.com',
						'label' => esc_html__('Email', 'excitor'),
						'desc'  => esc_html__('Please, enter email of member.', 'excitor'),
					),
					'phone' => array(
						'type'  => 'text',
						'value' => '(1200)-0989-568-331',
						'label' => esc_html__('Phone', 'excitor'),
						'desc'  => esc_html__('Please, enter phone number of member.', 'excitor'),
					),
					
				),
			),
			'team-social' => array(
				'title' => esc_html__('Social', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'social' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Facebook',
								'icon' => 'fa fa-facebook',
								'link' => '#'
							),
							array(
								'title' => 'Twitter',
								'icon' => 'fa fa-twitter',
								'link' => '#'
							),
							array(
								'title' => 'Google Plus',
								'icon' => 'fa fa-google-plus',
								'link' => '#'
							)
						),
						'label' => esc_html__('Social', 'excitor'),
						'desc'  => esc_html__('Please configs social of member', 'excitor'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Title', 'excitor'),
								'desc'  => esc_html__('Please, enter title of social item.', 'excitor'),
							),
							'icon' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Icon', 'excitor'),
								'desc'  => esc_html__('Please, enter icon of social item.', 'excitor'),
							),
							'link' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Url(Link)', 'excitor'),
								'desc'  => esc_html__('Please, enter link of social item.', 'excitor'),
							)
						),
						'template' => '{{- title }}',
						'add-button-text' => esc_html__('Add', 'excitor'),
						'sortable' => true,
					)
					
				),
			),
			
		)
	)
	
);