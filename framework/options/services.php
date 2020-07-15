<?php
// Services
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Services', 'excitor' ),
	'id'               => 'bt_services',
	'icon'             => 'el el-puzzle ',
	'fields'           => array(
		array(
			'id'       => 'services_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'excitor' ),
			'default'  => false
		),
		array(
			'id'       => 'services_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Full Width Space', 'excitor' ),
			'subtitle' => esc_html__( 'Control the left/right padding the content area display.', 'excitor' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('services_fullwidth' , '=', '1'),
			'output'    => array('.tax-bt_services_category .bt-main-content')
		),
		array(
			'id'            => 'services_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'excitor' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'excitor' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'services_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'services_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'excitor' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'excitor' ),
			'default'  => array(
				'background-color' => '#333333',
			),
			'required' 	=> array('services_titlebar' , '=', '1'),
			'output'    => array('.tax-bt_services_category .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'services_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Main Content Space', 'excitor' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the content.', 'excitor' ),
			'default'  => array(
				'padding-top' => '0px',
				'padding-bottom' => '0px'
			),
			'output'   => array('.tax-bt_services_category .bt-main-content')
		),
		array(
			'id'    => 'services_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'excitor' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the services page.', 'excitor' )
		),
		array(
			'id'       => 'services_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'services_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'excitor' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'excitor' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'font-size'   => '24px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '28px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('services_title' , '=', '1'),
			'output'   => array('.tax-bt_services_category .bt-post-item .bt-title')
		),
		array(
			'id'       => 'services_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'services_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'excitor' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'excitor' ),
			'default'  => 'full',
			'required' 		=> array('services_featured' , '=', '1')
		),
		array(
			'id'       => 'services_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'services_excerpt',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Excerpt', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the excerpt.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'services_excerpt_length',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt Length', 'excitor' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'excitor' ),
			'default'  => '55',
			'required' 		=> array('services_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'services_excerpt_more',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt More', 'excitor' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'excitor' ),
			'default'  => '[...]',
			'required' 		=> array('services_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'services_readmore',
			'type'     => 'switch',
			'title'    => esc_html__( 'Read More button', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the read more button.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'services_readmore_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Read More Button Typography', 'excitor' ),
			'subtitle' => esc_html__( 'These settings control the typography post read more button.', 'excitor' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('services_readmore' , '=', '1'),
			'output'   => array('.tax-bt_services_category .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'services_readmore_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'excitor' ),
			'subtitle' => esc_html__( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'excitor' ),
			'default'  => 'Read More',
			'required' 		=> array('services_readmore' , '=', '1'),
		),
		array(
			'id'       => 'services_article_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'excitor' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'excitor' ),
			'default'  => array(
				'margin-bottom' => '40px'
			),
			'output'    => array('.tax-bt_services_category .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Services', 'excitor' ),
	'id'               => 'bt_single_services',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'single_services_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'excitor' ),
			'default'  => false
		),
		array(
			'id'       => 'single_services_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Full Width Space', 'excitor' ),
			'subtitle' => esc_html__( 'Control the left/right padding the content area display.', 'excitor' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('single_services_fullwidth' , '=', '1'),
			'output'    => array('.single-bt_services .bt-main-content')
		),
		array(
			'id'            => 'single_services_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'excitor' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'excitor' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'single_services_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'single_services_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'excitor' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'excitor' ),
			'default'  => array(
				'background-color' => '#333333',
			),
			'required' 	=> array('single_services_titlebar' , '=', '1'),
			'output'    => array('.single-bt_services .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'single_services_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Main Content Space', 'excitor' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the content.', 'excitor' ),
			'default'  => array(
				'padding-top' => '0px',
				'padding-bottom' => '0px'
			),
			'output'   => array('.single-bt_services .bt-main-content')
		),
		array(
			'id'    => 'single_services_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'excitor' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'excitor' )
		),
		array(
			'id'       => 'single_services_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'excitor' ),
			'default'  => false
		),
		array(
			'id'       => 'single_services_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'excitor' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'excitor' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'font-size'   => '24px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '28px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_services_title' , '=', '1'),
			'output'   => array('.single-bt_services .bt-post-item .bt-title, .single-bt_services article .bt-header .bt-content .bt-title')
		),
		array(
			'id'       => 'single_services_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'single_services_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'excitor' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'excitor' ),
			'default'  => 'full',
			'required' 		=> array('single_services_featured' , '=', '1')
		),
		array(
			'id'       => 'single_services_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'single_services_content',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Content', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the content.', 'excitor' ),
			'default'  => true
		),
	)
) );
