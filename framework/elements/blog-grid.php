<?php
class WPBakeryShortCode_bt_blog_grid extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'layout_type' => 'bt-grid-auto',
			'columns' =>  '',
			'space' =>  30,
			'show_pagination' => 0,
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'category' => '',
			'post_ids' => '',
			'posts_per_page' => 10,
			'orderby' => 'none',
			'order' => 'none',
			
			'layout' => 'default',
			'zigzag' => 0,
			'media_type' => 'simple',
			'multi_media' => 'standard,video,gallery',
			'img_size' => '',
			'excerpt_limit' => 20,
			'excerpt_more' => '.',
			'readmore_text' => 'Read More',
			
			'columns_md' => '',
			'columns_sm' => '',
			'columns_xs' => '',
			
			
			'css' => ''
			
		), $atts));
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-blog-grid-element',
			$layout_type,
			$layout,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		/* Space */
		$item_style = array();
		$item_style[] = 'padding-left: '.($space/2).'px;';
		$item_style[] = 'padding-right: '.($space/2).'px;';
		$item_style[] = 'margin-bottom: '.$space.'px;';
		
		$item_attributes = array();
		if ( ! empty( $item_style ) ) {
			$item_attributes[] = 'style="' . esc_attr( implode(' ', $item_style) ) . '"';
		}
		
		/* Columns */
		$column_class = array();
		$column_class[] = (!empty($columns)) ? $columns: 'col-lg-3';
		if($columns != 'col-lg-12'){
			$column_class[] = (!empty($columns_md)) ? $columns_md : 'col-md-4';
			$column_class[] = (!empty($columns_sm)) ? $columns_sm : 'col-sm-6';
			$column_class[] = (!empty($columns_xs)) ? $columns_xs : 'col-xs-12';
		}
		
		if ( ! empty( $column_class ) ) {
			$item_attributes[] = 'class="' . esc_attr( implode(' ', $column_class) ) . '"';
		}
		
		/* Query */
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
		
		$args = array(
			'posts_per_page' => $posts_per_page,
			'paged' => $paged,
			'orderby' => $orderby,
			'order' => $order,
			'post_type' => 'post',
			'post_status' => 'publish');
		if (isset($category) && $category != '') {
			$cats = explode(',', $category);
			$taxonomy = array();
			foreach ((array) $cats as $cat){
				$taxonomy[] = trim($cat);
			}
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => $taxonomy
				)
			);
		}
		if (isset($post_ids) && $post_ids != '') {
			$ids = explode(',', $post_ids);
			$p_ids = array();
			foreach ((array) $ids as $id){
				$p_ids[] = trim($id);
			}
			$args['post__in'] = $p_ids;
		}
		$wp_query = new WP_Query($args);
		
		wp_enqueue_script('html5lightbox');
		if($layout_type == 'bt-grid-masonry') wp_enqueue_script('isotope');
		
		ob_start();
		if ( $wp_query->have_posts() ) {
		?>
			<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>"  <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
				<div class="row">
					<?php $count = 0; while ( $wp_query->have_posts() ) { $wp_query->the_post(); ?>
						<div <?php echo implode(' ', $item_attributes); ?>>
							<?php require get_template_directory().'/framework/elements/blog_layouts/'.$layout.'.php'; ?>
						</div>
					<?php $count++; } ?>
				</div>
				<?php if ($show_pagination) excitor_paginate_links($wp_query); ?>
			</div>
		<?php
		} else {
			esc_html_e('Post not found!', 'excitor');
		}
		wp_reset_query();
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => esc_html__('Blog Grid', 'excitor'),
	'base' => 'bt_blog_grid',
	'category' => esc_html__('BT Elements', 'excitor'),
	'icon' => 'bt-icon',
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Layout', 'excitor'),
			'param_name' => 'layout_type',
			'value' => array(
				esc_html__('Auto', 'excitor') => 'bt-grid-auto',
				esc_html__('Fixed Row', 'excitor') => 'bt-grid-fixed',
				esc_html__('Masonry', 'excitor') => 'bt-grid-masonry'
			),
			'admin_label' => true,
			'description' => esc_html__('Select layout display in this element.', 'excitor')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Columns', 'excitor'),
			'param_name' => 'columns',
			'value' => array(
				'4 Columns' => 'col-lg-3',
				'3 Columns' => 'col-lg-4',
				'2 Columns' => 'col-lg-6',
				'1 Column' => 'col-lg-12'
			),
			'description' => esc_html__('Select columns display in this element.', 'excitor')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Item Space', 'excitor'),
			'param_name' => 'space',
			'value' => 30,
			'description' => esc_html__('Please, enter number space in this element.', 'excitor')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Show Pagination', 'excitor'),
			'param_name' => 'show_pagination',
			'value' => '',
			'description' => esc_html__('Show or not pagination in this element.', 'excitor')
		),
		vc_map_add_css_animation(),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Element ID', 'excitor'),
			'param_name' => 'el_id',
			'value' => '',
			'description' => esc_html__('Enter element ID (Note: make sure it is unique and valid).', 'excitor')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Extra Class', 'excitor'),
			'param_name' => 'el_class',
			'value' => '',
			'description' => esc_html__('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'excitor')
		),
		array (
			'type' => 'bt_taxonomy',
			'taxonomy' => 'category',
			'heading' => esc_html__('Categories', 'excitor'),
			'param_name' => 'category',
			'group' => esc_html__('Data Setting', 'excitor'),
			'description' => esc_html__('Note: By default, all your posts will be displayed. If you want to narrow output, select category(s) above. Only selected categories will be displayed.', 'excitor')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Post IDs', 'excitor'),
			'param_name' => 'post_ids',
			'group' => esc_html__('Data Setting', 'excitor'),
			'description' => esc_html__('Enter post IDs to be excluded (Note: separate values by commas (,)).', 'excitor'),
		),
		array (
			'type' => 'textfield',
			'heading' => esc_html__('Count', 'excitor'),
			'param_name' => 'posts_per_page',
			'value' => '10',
			'group' => esc_html__('Data Setting', 'excitor'),
			'description' => esc_html__('The number of posts to display on each page. Set to "-1" for display all posts on the page.', 'excitor')
		),
		array (
			'type' => 'dropdown',
			'heading' => esc_html__('Order by', 'excitor'),
			'param_name' => 'orderby',
			'value' => array (
					esc_html__('None', 'excitor') => 'none',
					esc_html__('Title', 'excitor') => 'title',
					esc_html__('Date', 'excitor') => 'date',
					esc_html__('ID', 'excitor') => 'ID'
			),
			'group' => esc_html__('Data Setting', 'excitor'),
			'description' => esc_html__('Select order type.', 'excitor')
		),
		array (
			'type' => 'dropdown',
			'heading' => esc_html__('Order', 'excitor'),
			'param_name' => 'order',
			'value' => Array (
					esc_html__('None', 'excitor') => 'none',
					esc_html__('ASC', 'excitor') => 'ASC',
					esc_html__('DESC', 'excitor') => 'DESC'
			),
			'group' => esc_html__('Data Setting', 'excitor'),
			'description' => esc_html__('Select sorting order.', 'excitor')
		),
		array(
			'type' => 'bt_layout',
			'folder' => 'blog',
			'heading' => esc_html__('Layout', 'excitor'),
			'param_name' => 'layout',
			'value' => array(
				esc_html__('Default', 'excitor') => 'default',
				esc_html__('Layout 1', 'excitor') => 'layout1',
				esc_html__('Layout 2', 'excitor') => 'layout2',
				esc_html__('Layout List 1', 'excitor') => 'layout-list1',
				esc_html__('Layout List 2', 'excitor') => 'layout-list2'
			),
			'admin_label' => true,
			'group' => esc_html__('Item Setting', 'excitor'),
			'description' => esc_html__('Select layout of items display in this element.', 'excitor')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Zigzag', 'excitor'),
			'param_name' => 'zigzag',
			'value' => '',
			'dependency' => array(
				'element'=>'layout',
				'value'=> array('layout-list1', 'layout-list2')
			),
			'group' => esc_html__('Item Setting', 'excitor'),
			'description' => esc_html__('Zigzag items display in this element.', 'excitor')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Media Type', 'excitor'),
			'param_name' => 'media_type',
			'value' => array(
				esc_html__('Simple', 'excitor') => 'simple',
				esc_html__('Multi', 'excitor') => 'multi'
			),
			'dependency' => array(
				'element'=>'layout',
				'value'=> array('default', 'layout1', 'layout2')
			),
			'group' => esc_html__('Item Setting', 'excitor'),
			'description' => esc_html__('Select media type of items display in this element.', 'excitor')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Multi Media', 'excitor'),
			'param_name' => 'multi_media',
			'value' => array(
				esc_html__('Standard', 'excitor') => 'standard',
				esc_html__('Video', 'excitor') => 'video',
				esc_html__('Audio', 'excitor') => 'audio',
				esc_html__('Quote', 'excitor') => 'quote',
				esc_html__('Link', 'excitor') => 'link',
				esc_html__('Gallery', 'excitor') => 'gallery'
			),
			'std' => 'standard,video,gallery',
			'dependency' => array(
				'element'=>'media_type',
				'value'=> 'multi'
			),
			'group' => esc_html__('Item Setting', 'excitor'),
			'description' => esc_html__('Select multi media type of items display in this element.', 'excitor')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Image size', 'excitor'),
			'param_name' => 'img_size',
			'value' => 'full',
			'group' => esc_html__('Item Setting', 'excitor'),
			'description' => esc_html__('Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'excitor'),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Excerpt Limit', 'excitor'),
			'param_name' => 'excerpt_limit',
			'value' => 20,
			'group' => esc_html__('Item Setting', 'excitor'),
			'description' => esc_html__('Please, Enter number excerpt limit of post in this element.', 'excitor')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Excerpt More', 'excitor'),
			'param_name' => 'excerpt_more',
			'value' => '.',
			'group' => esc_html__('Item Setting', 'excitor'),
			'description' => esc_html__('Please, Enter text excerpt more of post in this element.', 'excitor')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Readmore Text', 'excitor'),
			'param_name' => 'readmore_text',
			'value' => 'Read More',
			'group' => esc_html__('Item Setting', 'excitor'),
			'description' => esc_html__('Please, Enter text of label button readmore in this element.', 'excitor')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Columns Medium Screen', 'excitor'),
			'param_name' => 'columns_md',
			'value' => array(
				esc_html__('Auto', 'excitor') => '',
				esc_html__('4 Columns', 'excitor') => 'col-md-3',
				esc_html__('3 Columns', 'excitor') => 'col-md-4',
				esc_html__('2 Columns', 'excitor') => 'col-md-6',
				esc_html__('1 Column', 'excitor') => 'col-md-12'
			),
			'group' => esc_html__('Responsive', 'excitor'),
			'description' => esc_html__('Select columns display in this element (Screen width >=992px and <1199px).', 'excitor')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Columns Small Screen', 'excitor'),
			'param_name' => 'columns_sm',
			'value' => array(
				esc_html__('Auto', 'excitor') => '',
				esc_html__('4 Columns', 'excitor') => 'col-sm-3',
				esc_html__('3 Columns', 'excitor') => 'col-sm-4',
				esc_html__('2 Columns', 'excitor') => 'col-sm-6',
				esc_html__('1 Column', 'excitor') => 'col-sm-12'
			),
			'group' => esc_html__('Responsive', 'excitor'),
			'description' => esc_html__('Select columns display in this element (Screen width >=768px and <992px).', 'excitor')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Columns Extra Screen', 'excitor'),
			'param_name' => 'columns_xs',
			'value' => array(
				esc_html__('Auto', 'excitor') => '',
				esc_html__('4 Columns', 'excitor') => 'col-xs-3',
				esc_html__('3 Columns', 'excitor') => 'col-xs-4',
				esc_html__('2 Columns', 'excitor') => 'col-xs-6',
				esc_html__('1 Column', 'excitor') => 'col-xs-12'
			),
			'group' => esc_html__('Responsive', 'excitor'),
			'description' => esc_html__('Select columns display in this element (Screen <768px).', 'excitor')
		),
		
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'CSS box', 'excitor' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design Options', 'excitor' ),
		)
	)
));
