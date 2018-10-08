<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'portfolio_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'portfolio-layout' => array(
				'title' => esc_html__('Layout Settings', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'titlebar_background' => array(
						'label' => esc_html__( 'Title Bar Background', 'excitor' ),
						'desc'  => esc_html__( 'Upload title bar background image.', 'excitor' ),
						'type'  => 'upload',
					),
					'layout' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => esc_html__('Layout', 'excitor'),
						'desc'  => esc_html__('Select a layout of project', 'excitor'),
						'choices' => array(
							'default' => esc_html__('Default(Image Left)', 'excitor'),
							'layout1' => esc_html__('Layout 1(Image Top)', 'excitor'),
							'layout2' => esc_html__('Layout 2(Image Bottom)', 'excitor')
						)
					),
					'gallery-column' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Select Gallery Columns', 'excitor'),
						'desc'  => esc_html__('Select gallery columns of project', 'excitor'),
						'choices' => array(
							'col-md-12' => esc_html__('1 Column', 'excitor'),
							'col-md-6' => esc_html__('2 Columns', 'excitor'),
							'col-md-4' => esc_html__('3 Columns', 'excitor'),
							'col-md-3' => esc_html__('4 Columns', 'excitor')
						)
					),
					'gallery-space' => array(
						'type'  => 'short-text',
						'value' => '30',
						'label' => esc_html__('Gallery Space', 'excitor'),
						'desc'  => esc_html__('Please, enter gallery space of project.', 'excitor'),
					),
				),
			),
			'portfolio-meta' => array(
				'title' => esc_html__('Meta Fields', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'infor-title' =>  array( 
						'type' => 'text',
						'value' => 'Infomation',
						'label' => esc_html__('Info Title', 'excitor'),
						'desc'  => esc_html__('Please, enter info title of project.', 'excitor'),
					),
					'info-option' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Client:',
								'value' => 'Bearsthemes'
							),
							array(
								'title' => 'Date:',
								'value' => 'May 14, 2018'
							),
							array(
								'title' => 'Tags:',
								'value' => 'photography, agency, creative'
							),
							array(
								'title' => 'Project Type:',
								'value' => 'Multipurpose Template'
							)
						),
						'label' => esc_html__('Info Option', 'excitor'),
						'desc'  => esc_html__('Please configs info option of project', 'excitor'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Title', 'excitor'),
								'desc'  => esc_html__('Please, enter title of project item.', 'excitor'),
							),
							'value' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Value', 'excitor'),
								'desc'  => esc_html__('Please, enter value of project item.', 'excitor'),
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