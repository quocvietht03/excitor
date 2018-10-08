<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'services_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'services-meta' => array(
				'title' => esc_html__('Meta Fields', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'icon_font' => array( 
						'type' => 'text',
						'value' => 'fa fa-codepen',
						'label' => esc_html__('Icon Font', 'excitor'),
						'desc'  => esc_html__('Please, enter icon font of service post.', 'excitor'),
					),
					'icon_image' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Icon Image', 'excitor'),
						'desc'  => esc_html__('Select icon image of service post.', 'excitor'),
					),
					'info_option' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'option' => 'Your option description 1'
							),
							array(
								'option' => 'Your option description 2'
							),
							array(
								'option' => 'Your option description 3'
							),
							array(
								'option' => 'Your option description 4'
							)
						),
						'label' => esc_html__('Info Option', 'excitor'),
						'desc'  => esc_html__('Please configs info option of service post', 'excitor'),
						'popup-options' => array(
							'option' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Value', 'excitor'),
								'desc'  => esc_html__('Please, enter value of project item.', 'excitor'),
							)
						),
						'template' => '{{- option }}',
						'add-button-text' => esc_html__('Add', 'excitor'),
						'sortable' => true,
					),
				),
			),
			
		)
	)
	
);
