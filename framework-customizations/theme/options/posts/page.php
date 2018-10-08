<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$menu_slug_opt = array();
$menus_obj = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
$menu_slug_opt['auto'] = 'Auto';
foreach ( $menus_obj as $menu_obj ) {
	$menu_slug_opt[$menu_obj->slug] = $menu_obj->name;
}

$options = array(
	'page_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'page_general_setting' => array(
				'title' => esc_html__('General', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'page_titlebar' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Title Bar', 'excitor'),
						'desc' => esc_html__('Turn on to disable title bar in current page.', 'excitor'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'excitor'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'excitor'),
						),
					),
					
				),
			),
			'page_header_setting' => array(
				'title' => esc_html__('Header', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'header_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Header Layout', 'excitor'),
						'desc'  => esc_html__('Select a header layout in current page', 'excitor'),
						'choices' => array(
							'default' => esc_html__('Default', 'excitor'),
							'1' => esc_html__('Header 1', 'excitor'),
							'2' => esc_html__('Header 2', 'excitor'),
							'3' => esc_html__('Header 3', 'excitor'),
							'onepage' => esc_html__('Header One Page', 'excitor'),
							'onepagescroll' => esc_html__('Header One Page Scroll', 'excitor'),
							'vertical' => esc_html__('Header Vertical', 'excitor'),
							'minivertical' => esc_html__('Header Mini Vertical', 'excitor')
						)
					),
					'header_fullwidth' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Full Width (100%)', 'excitor'),
						'desc' => esc_html__('Turn on to disable header full width (100%) in current page.', 'excitor'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'excitor'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'excitor'),
						),
					),
					'header_absolute' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Header Absolute', 'excitor'),
						'desc' => esc_html__('Turn on to disable header absolute in current page.', 'excitor'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'excitor'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'excitor'),
						),
					),
					'header_top' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Header Top', 'excitor'),
						'desc' => esc_html__('Turn on to disable header top in current page.', 'excitor'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'excitor'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'excitor'),
						),
					),
					'header_logo' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Logo', 'excitor'),
						'desc'  => esc_html__('Select image to change the logo in current page.', 'excitor'),
					),
					'header_logo_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => esc_html__('Logo Height', 'excitor'),
						'desc'  => esc_html__('Controls the height of the logo in current page. EX: 50', 'excitor')
					),
					'header_menu_assign' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => esc_html__('Menu Assign', 'excitor'),
						'desc'  => esc_html__('Select a menu assign of header layout in current page', 'excitor'),
						'choices' => $menu_slug_opt
					),
					'header_stick' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Header Sticky', 'excitor'),
						'desc' => esc_html__('Turn on to disable header stick in current page.', 'excitor'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'excitor'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'excitor'),
						),
					),
					'header_logo_stick' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Logo Stick', 'excitor'),
						'desc'  => esc_html__('Select image to change the logo stick in current page.', 'excitor'),
					),
					'header_logo_stick_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => esc_html__('Logo Height', 'excitor'),
						'desc'  => esc_html__('Controls the height of the logo stick in current page. EX: 40', 'excitor')
					),
					'mobile_header_top' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Header Top Mobile', 'excitor'),
						'desc' => esc_html__('Turn on to disable header top mobile in current page.', 'excitor'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'excitor'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'excitor'),
						),
					),
					'logo_mobile' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Logo Mobile', 'excitor'),
						'desc'  => esc_html__('Select image to change the logo mobile in current page.', 'excitor'),
					),
					'logo_mobile_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => esc_html__('Logo Height', 'excitor'),
						'desc'  => esc_html__('Controls the height of the logo mobile in current page. EX: 30', 'excitor')
					),
					
				),
			),
			'page_titlebar_setting' => array(
				'title' => esc_html__('Title Bar', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'titlebar_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Title Bar Layout', 'excitor'),
						'desc'  => esc_html__('Select a title bar layout in current page', 'excitor'),
						'choices' => array(
							'default' => esc_html__('Default', 'excitor'),
							'1' => esc_html__('Title Bar 1', 'excitor'),
							'2' => esc_html__('Title Bar 2', 'excitor')
						)
					),
					'page_titlebar_space' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Title Bar Space', 'excitor'),
						'desc' => esc_html__('Turn on to disable space between title bar and content in current page.', 'excitor'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'excitor'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'excitor'),
						),
					),
					'page_titlebar_background' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Title Bar Background', 'excitor'),
						'desc'  => esc_html__('Select image to change the title bar background in current page.', 'excitor'),
					),
				),
			) ,
			'page_footer_setting' => array(
				'title' => esc_html__('Footer', 'excitor'),
				'type' => 'tab',
				'options' => array(
					'footer_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Footer Layout', 'excitor'),
						'desc'  => esc_html__('Select a footer layout in current page', 'excitor'),
						'choices' => array(
							'default' => esc_html__('Default', 'excitor'),
							'1' => esc_html__('Footer 1', 'excitor'),
							'2' => esc_html__('Footer 2', 'excitor')
						)
					),
					'page_footer_space' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Footer Space', 'excitor'),
						'desc' => esc_html__('Turn on to disable space between footer and content in current page.', 'excitor'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'excitor'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'excitor'),
						),
					),
					'footer_fixed' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Fixed', 'excitor'),
						'desc' => esc_html__('Turn on to disable footer fixed in current page.', 'excitor'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'excitor'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'excitor'),
						),
					),
					'footer_fullwidth' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Full Width (100%)', 'excitor'),
						'desc' => esc_html__('Turn on to disable footer full width (100%) in current page.', 'excitor'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'excitor'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'excitor'),
						),
					),
					'footer_top' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Footer Top', 'excitor'),
						'desc' => esc_html__('Turn on to disable footer top in current page.', 'excitor'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'excitor'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'excitor'),
						),
					),
				),
			),
		),
	),
	
);