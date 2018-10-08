<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'menu_mega_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label'   => esc_html__('Type', 'excitor'),
				'value' => 'customize',
				'choices' => array(
					'customize' => esc_html__('Customize', 'excitor'),
					'fullwidth' => esc_html__('Fullwidth', 'excitor'),
				),
			)
		),
		'choices' => array(
			'customize' => array(
				'menu_mega_container_width' => array(
					'label' => esc_html__('Width', 'excitor'),
					'desc' => esc_html__('Please enter number with px for container width (default: 840px)', 'excitor'),
					'type' => 'short-text',
					'value' => '1000px'
				),
				'menu_mega_container_position' => array(
					'label' => esc_html__('Position', 'excitor'),
					'desc' => esc_html__('Select the sub menu display position', 'excitor'),
					'type' => 'radio',
					'value' => 'menu-item-pos-left',
					'choices' => array(
						'menu-item-pos-left' => esc_html__('Left', 'excitor'),
						'menu-item-pos-center' => esc_html__('Center', 'excitor'),
						'menu-item-pos-right' => esc_html__('Right', 'excitor'),
					),
					'inline' => true,
				),
			),
		),
	),
	'menu_mega_container_bg' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label'   => esc_html__('Background Type', 'excitor'),
				'value' => 'color',
				'choices' => array(
					'color' => esc_html__('Color', 'excitor'),
					'image' => esc_html__('Image', 'excitor'),
				),
			)
		),
		'choices' => array(
			'color' => array(
				'bg_color' => array(
					'label' => esc_html__( 'Background Color', 'excitor' ),
					'desc'  => esc_html__( 'Choose background color for container mega menu (default: #ffffff)', 'excitor' ),
					'type'  => 'color-picker',
					'value' => '#ffffff',
				),
			),
			'image' => array(
				'bg_image' => array(
					'label' => esc_html__( 'Background Image', 'excitor' ),
					'desc'  => esc_html__( 'Choose background image for container mega menu', 'excitor' ),
					'type'  => 'upload',
				),
				'bg_image_repeat' => array(
					'label' => esc_html__( 'Background Repeat', 'excitor' ),
					'desc'  => esc_html__( 'Choose background repeat for container mega menu', 'excitor' ),
					'type' => 'short-select',
					'value' => 'no-repeat',
					'choices' => array(
						'no-repeat' => esc_html__('No Repeat', 'excitor'),
						'repeat' => esc_html__('Repeat', 'excitor'),
					),
				),
				'bg_image_size' => array(
					'label' => esc_html__( 'Background Size', 'excitor' ),
					'desc'  => esc_html__( 'Choose background size for container mega menu', 'excitor' ),
					'type' => 'short-select',
					'value' => 'cover',
					'choices' => array(
						'cover' => esc_html__('Cover', 'excitor'),
						'contain' => esc_html__('Contain', 'excitor'),
					),
				),
				'bg_image_position' => array(
					'label' => esc_html__( 'Background Position', 'excitor' ),
					'desc'  => esc_html__( 'Please enter background position for container mega menu (default: center center)', 'excitor' ),
					'type' => 'short-text',
					'value' => 'center center',
				),
			),
		),
	),
	'menu_mega_row_padding' => array(
		'label' => esc_html__('Padding', 'excitor'),
		'desc' => esc_html__('Please enter number with px or % for row padding (default: 15px 10px)', 'excitor'),
		'type' => 'short-text',
		'value' => '15px 10px'
	),
	'badge' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'selected' => array(
				'type' => 'switch',
				'value' => 'no',
				'label' => esc_html__('Badge', 'excitor'),
				'left-choice' => array(
					'value' => 'no',
					'label' => esc_html__('No', 'excitor'),
				),
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__('Yes', 'excitor'),
				)
			),
		),
		'choices' => array(
			'yes' => array(
				'badge_group' => array(
					'type' => 'group',
					'attr' => array('class' => ''),
					'options' => array(
						'badge_text' => array(
							'type' => 'short-text',
							'html' => '',
							'value' => '',
							'label' => esc_html__('Text', 'excitor'),
						),
						'badge_background_color' => array(
							'value' => '#E23F3F',
							'type' => 'color-picker',
							'label' => esc_html__('Background Color', 'excitor'),
						),
						'badge_color' => array(
							'value' => '#FFFFFF',
							'type' => 'color-picker',
							'label' => esc_html__('Color', 'excitor'),
						),
					),
				),
			),
		),
	),
);
