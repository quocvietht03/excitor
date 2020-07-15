<?php
// Portfolio
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Portfolio', 'excitor' ),
	'id'               => 'bt_portfolio',
	'icon'             => 'el el-folder-open',
	'fields'           => array(
		array(
			'id'       => 'portfolio_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'excitor' ),
			'default'  => false
		),
		array(
			'id'       => 'portfolio_fullwidth_space',
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
			'required' 		=> array('portfolio_fullwidth' , '=', '1'),
			'output'    => array('.tax-fw-portfolio-category .bt-main-content')
		),
		array(
			'id'            => 'portfolio_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Columns', 'excitor' ),
			'subtitle'      => esc_html__( 'Controls the number columns of list items.', 'excitor' ),
			'default'       => 1,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'text'
		),
		array(
			'id'            => 'portfolio_sidebar_width',
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
			'id'       => 'portfolio_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'excitor' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'excitor' ),
			'default'  => array(
				'background-color' => '#333333',
			),
			'required' 	=> array('portfolio_titlebar' , '=', '1'),
			'output'    => array('.tax-fw-portfolio-category .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'portfolio_content_sapce',
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
			'output'   => array('.tax-fw-portfolio-category .bt-main-content')
		),
		array(
			'id'    => 'portfolio_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'excitor' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the portfolio page.', 'excitor' )
		),
		array(
			'id'       => 'portfolio_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_title_font',
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
				'font-size'   => '28px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('portfolio_title' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-title')
		),
		array(
			'id'       => 'portfolio_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'excitor' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'excitor' ),
			'default'  => 'full',
			'required' 		=> array('portfolio_featured' , '=', '1')
		),
		array(
			'id'       => 'portfolio_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_meta_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Meta Typography', 'excitor' ),
			'subtitle' => esc_html__( 'These settings control the typography post meta.', 'excitor' ),
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
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('portfolio_meta' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'portfolio_meta_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Author', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'excitor' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Date', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'excitor' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_category',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Category', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field category.', 'excitor' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Excerpt', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the excerpt.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_excerpt_length',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt Length', 'excitor' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'excitor' ),
			'default'  => '55',
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt_more',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt More', 'excitor' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'excitor' ),
			'default'  => '[...]',
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_readmore',
			'type'     => 'switch',
			'title'    => esc_html__( 'Read More button', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the read more button.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_readmore_font',
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
			'required' 		=> array('portfolio_readmore' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'portfolio_readmore_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'excitor' ),
			'subtitle' => esc_html__( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'excitor' ),
			'default'  => 'Read More',
			'required' 		=> array('portfolio_readmore' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_article_space',
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
			'output'    => array('.tax-fw-portfolio-category .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Portfolio', 'excitor' ),
	'id'               => 'bt_single_portolio',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'single_portolio_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'excitor' ),
			'default'  => false
		),
		array(
			'id'       => 'single_portolio_fullwidth_space',
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
			'required' 		=> array('single_portolio_fullwidth' , '=', '1'),
			'output'    => array('.single-fw-portfolio .bt-main-content')
		),
		array(
			'id'            => 'single_portolio_sidebar_width',
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
			'id'       => 'single_portfolio_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'single_portolio_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'excitor' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'excitor' ),
			'default'  => array(
				'background-color' => '#333333',
			),
			'required' 	=> array('single_portfolio_titlebar' , '=', '1'),
			'output'    => array('.single-fw-portfolio .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'single_portfolio_content_sapce',
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
			'output'   => array('.single-fw-portfolio .bt-main-content')
		),
		array(
			'id'    => 'single_portfolio_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'excitor' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'excitor' )
		),
		array(
			'id'       => 'single_portfolio_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'excitor' ),
			'default'  => false
		),
		array(
			'id'       => 'single_portfolio_title_font',
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
			'required' 		=> array('single_portfolio_title' , '=', '1'),
			'output'   => array('.single-fw-portfolio .fw-portfolio .bt-title')
		),
		array(
			'id'       => 'single_portfolio_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'excitor' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'excitor' ),
			'default'  => 'full'
		),
		array(
			'id'       => 'single_portfolio_share',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Shares', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the share.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'single_portfolio_share_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Share Label', 'excitor' ),
			'subtitle' => esc_html__( 'Please, Enter label of the share. Leave empty to use "Share:" label.', 'excitor' ),
			'default'  => 'Share',
			'required' 		=> array('single_portfolio_share' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_share_facebook',
			'type'     => 'switch',
			'title'    => esc_html__( 'Facebook', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the facebook share.', 'excitor' ),
			'default'  => true,
			'required' 		=> array('single_portfolio_share' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_share_twitter',
			'type'     => 'switch',
			'title'    => esc_html__( 'Twitter', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the twitter share.', 'excitor' ),
			'default'  => true,
			'required' 		=> array('single_portfolio_share' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_share_google_plus',
			'type'     => 'switch',
			'title'    => esc_html__( 'Google Plus', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the google plus share.', 'excitor' ),
			'default'  => true,
			'required' 		=> array('single_portfolio_share' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_share_linkedin',
			'type'     => 'switch',
			'title'    => esc_html__( 'Linkedin', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the linkedin share.', 'excitor' ),
			'default'  => true,
			'required' 		=> array('single_portfolio_share' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_share_pinterest',
			'type'     => 'switch',
			'title'    => esc_html__( 'Pinterest', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the pinterest share.', 'excitor' ),
			'default'  => true,
			'required' 		=> array('single_portfolio_share' , '=', '1'),
		),
		array(
			'id'       => 'single_portolio_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'excitor' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'excitor' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.single-fw-portfolio .fw-portfolio')
		),
		array(
			'id'       => 'single_portfolio_related_post',
			'type'     => 'switch',
			'title'    => esc_html__( 'Related Post', 'excitor' ),
			'subtitle' => esc_html__( 'Turn on to show the related post.', 'excitor' ),
			'default'  => true
		),
		array(
			'id'       => 'single_portfolio_related_post_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Related Post Label', 'excitor' ),
			'subtitle' => esc_html__( 'Please, Enter label of the related post. Leave empty to use "Portfolio Related" label.', 'excitor' ),
			'default'  => 'Portfolio Related',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_related_post_count',
			'type'     => 'text',
			'title'    => esc_html__( 'Related Post Count', 'excitor' ),
			'subtitle' => esc_html__( 'Please, Enter post count of the related post. Leave empty to use "3" for post count.', 'excitor' ),
			'default'  => '3',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'            => 'single_portfolio_related_post_per_row',
			'type'          => 'slider',
			'title'         => esc_html__( 'Related Post Per Row', 'excitor' ),
			'subtitle'      => esc_html__( 'Controls the post per row of the related post.', 'excitor' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'text',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_related_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Related Post Space', 'excitor' ),
			'subtitle' => esc_html__( 'Control the bottom margin the related post.', 'excitor' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.single-fw-portfolio .bt-related')
		),
	)
) );
