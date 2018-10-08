<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'mega_menu_item_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label' => esc_html__( 'Type', 'excitor' ),
				'desc' => esc_html__( 'Please select menu type', 'excitor' ),
				'value' => '',
				'choices' => array(
					'default' => esc_html__('Default', 'excitor'),
					'sidebar' => esc_html__('Sidebar', 'excitor'),
				),
			),
		),
		'choices' => array(
			'sidebar' => array(
				'sidebar_id' => array(
					'type' => 'select',
					'label' => esc_html__( 'Sidebar', 'excitor' ),
					'desc' => esc_html__( 'Please select sitebar', 'excitor' ),
					'value' => '',
					'choices' => excitor_get_sidebars(),
				),
			),
		),
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
