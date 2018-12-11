<?php
class WPBakeryShortCode_bt_services_carousel extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'rows' => 1,
			'items' => '',
			'margin' => '',
			'loop' => '',
			'autoplay' => '',
			'autoplayhoverpause' => '',
			'smartspeed' => '',
			'nav' => '',
			'dots' => '',
			
			'category' => '',
			'post_ids' => '',
			'posts_per_page' => 10,
			'orderby' => 'none',
			'order' => 'none',
			
			'layout' => 'default',
			'style' => 'icon-top',
			'align' => 'text-left',
			'img_size' => '',
			'excerpt_limit' => 15,
			'excerpt_more' => '.',
			'readmore_text' => 'Read More',
			
			'items_md' => '',
			'items_sm' => '',
			'items_xs' => '',
			'nav_xs' => '',
			'dots_xs' => '',
			
			'css' => ''
			
		), $atts));
		
		global $excitor_options;
		$nav_dots = (isset($excitor_options['nav_dots_style'])&&$excitor_options['nav_dots_style'])?'nav-dots-style'.$excitor_options['nav_dots_style']:'nav-dots-style0';
		
		$space_class = ( ! empty( $margin ) ) ? 'space'.$margin : 'space0';
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-services-carousel-element',
			$layout,
			$style,
			$nav_dots,
			$space_class,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		if($style == 'icon-top') $css_class[] = $align;
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		/* Owl */
		$owl_attributes = array();
		$owl_attributes['items'] = ( ! empty( $items ) ) ? $items : 4;
		$owl_attributes['margin'] = ( ! empty( $margin ) ) ? (int)$margin : 0;
		$owl_attributes['loop'] = ( ! empty( $loop ) ) ? true : false;
		$owl_attributes['autoplay'] = ( ! empty( $autoplay ) ) ? true : false;
		$owl_attributes['autoplayHoverPause'] = ( ! empty( $autoplayhoverpause ) ) ? true : false;
		$owl_attributes['smartSpeed'] = ( ! empty( $smartspeed ) ) ? (int)$smartspeed : 500;
		$owl_attributes['nav'] = ( ! empty( $nav ) ) ? true : false;
		if ( ! empty( $nav ) ) $owl_attributes['navText'] = array('<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>');
		$owl_attributes['dots']= ( ! empty( $dots ) ) ? true : false;
		
		if($items != 1){
			$items_md = ( ! empty( $items_md ) ) ? $items_md : 3;
			$items_sm = ( ! empty( $items_sm ) ) ? $items_sm : 2;
			$items_xs = ( ! empty( $items_xs ) ) ? $items_xs : 1;
		}else{
			$items_md = $items_sm = $items_xs = 1;
		}
		
		if(! empty( $nav )){
			$nav_xs = ( ! empty( $nav_xs ) ) ? false : true;
		}else{
			$nav_xs = false;
		}
		
		if(! empty( $dots )){
			$dots_xs = ( ! empty( $dots_xs ) ) ? false : true;
		}else{
			$dots_xs = false;
		}
		
		$owl_attributes['responsive'] = array(
			1200 => array(
				'items' => $items
			),
			992 => array(
				'items' => $items_md
			),
			768 => array(
				'items' => $items_sm
			),
			0 => array(
				'items' => $items_xs,
				'nav' => $nav_xs,
				'dots' => $dots_xs
			),
		);
		
		
		$owl_json = json_encode($owl_attributes);
		
		
		/* Query */
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
		
		$args = array(
			'posts_per_page' => $posts_per_page,
			'paged' => $paged,
			'orderby' => $orderby,
			'order' => $order,
			'post_type' => 'bt_services',
			'post_status' => 'publish');
		if (isset($category) && $category != '') {
			$cats = explode(',', $category);
			$taxonomy = array();
			foreach ((array) $cats as $cat){
				$taxonomy[] = trim($cat);
			}
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'bt_services_category',
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
		
		$data_script = "jQuery(document).ready(function($) {
							if ($('.bt-services-carousel-element .owl-carousel').length) {
								$('.bt-services-carousel-element .owl-carousel').each(function() {
									$(this).owlCarousel($(this).data('owl'));
								});
							}
						});";
		
		wp_enqueue_script('owl-carousel');
		wp_add_inline_script( 'excitor-main', $data_script );
		wp_enqueue_style('owl-carousel');
		
		ob_start();
		if ( $wp_query->have_posts() ) {
		?>
			<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>">
				<div class="owl-carousel" data-owl="<?php echo esc_attr($owl_json); ?>">
					<?php
						if($rows == 1){
							while ( $wp_query->have_posts() ) { $wp_query->the_post();
								require get_template_directory().'/framework/elements/services_layouts/'.$layout.'.php';
							}
						}else{
							$post_count = $wp_query->post_count;
							$count = 0;
							while ( $wp_query->have_posts() ) { $wp_query->the_post();
								if($count == 0 || $count%$rows == 0) echo '<div class="bt-items">';
									require get_template_directory().'/framework/elements/services_layouts/'.$layout.'.php';
									$count++;
								if($count == $post_count || $count%$rows == 0) echo '</div>';
							}
						}
					?>
				</div>
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
	'name' => esc_html__('Services Carousel', 'excitor'),
	'base' => 'bt_services_carousel',
	'category' => esc_html__('BT Elements', 'excitor'),
	'icon' => 'bt-icon',
    'params' => array(
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
			'taxonomy' => 'bt_services_category',
			'heading' => esc_html__('Categories', 'excitor'),
			'param_name' => 'category',
			'group' => esc_html__('Data Setting', 'excitor'),
			'description' => esc_html__('Note: By default, all your projects will be displayed. If you want to narrow output, select category(s) above. Only selected categories will be displayed.', 'excitor')
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
			'value' => 10,
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
			'folder' => 'services',
			'heading' => esc_html__('Layout', 'excitor'),
			'param_name' => 'layout',
			'value' => array(
				esc_html__('Default', 'excitor') => 'default',
				esc_html__('Layout Icon 1', 'excitor') => 'layout1',
				esc_html__('Layout Image 1', 'excitor') => 'layout-img1',
				esc_html__('Layout Image 2', 'excitor') => 'layout-img2',
				esc_html__('Layout Image 3', 'excitor') => 'layout-img3',
				esc_html__('Layout Image 4', 'excitor') => 'layout-img4'
			),
			'admin_label' => true,
			'group' => esc_html__('Item Setting', 'excitor'),
			'description' => esc_html__('Select layout of items display in this element.', 'excitor')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Style', 'excitor'),
			'param_name' => 'style',
			'value' => array(
				esc_html__('Icon Top', 'excitor') => 'icon-top',
				esc_html__('Icon Left', 'excitor') => 'icon-left',
				esc_html__('Icon Right', 'excitor') => 'icon-right'
			),
			'dependency' => array(
				'element'=>'layout',
				'value'=> 'default'
			),
			'group' => esc_html__('Item Setting', 'excitor'),
			'description' => esc_html__('Select layout style in this elment.', 'excitor')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Align', 'excitor'),
			'param_name' => 'align',
			'value' => array(
				esc_html__('Left', 'excitor') => 'text-left',
				esc_html__('Center', 'excitor') => 'text-center',
				esc_html__('Right', 'excitor') => 'text-right',
			),
			'dependency' => array(
				'element'=>'style',
				'value'=> 'icon-top'
			),
			'group' => esc_html__('Item Setting', 'excitor'),
			'description' => esc_html__('Select layout align in this elment.', 'excitor')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Image size', 'excitor'),
			'param_name' => 'img_size',
			'value' => 'full',
			'dependency' => array(
				'element'=>'layout',
				'value'=> array('layout2', 'layout3', 'layout5', 'layout7', 'layout8', 'layout9')
			),
			'group' => esc_html__('Item Setting', 'excitor'),
			'description' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'excitor' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Excerpt Limit', 'excitor'),
			'param_name' => 'excerpt_limit',
			'value' => 15,
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
			'heading' => esc_html__('Items', 'excitor'),
			'param_name' => 'rows',
			'value' => array(
				esc_html__('1 Row', 'excitor') => 1,
				esc_html__('2 Rows', 'excitor') => 2,
				esc_html__('3 Rows', 'excitor') => 3
				
			),
			'group' => esc_html__('Owl Setting', 'excitor'),
			'description' => esc_html__('The number of rows you want to see on the screen.', 'excitor')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Items', 'excitor'),
			'param_name' => 'items',
			'value' => array(
				esc_html__('4 Items', 'excitor') => 4,
				esc_html__('3 Items', 'excitor') => 3,
				esc_html__('2 Items', 'excitor') => 2,
				esc_html__('1 Item', 'excitor') => 1
			),
			'group' => esc_html__('Owl Setting', 'excitor'),
			'description' => esc_html__('The number of items you want to see on the screen.', 'excitor')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Margin', 'excitor'),
			'param_name' => 'margin',
			'value' => array(
				esc_html__('0px', 'excitor') => 0,
				esc_html__('10px', 'excitor') => 10,
				esc_html__('20px', 'excitor') => 20,
				esc_html__('30px', 'excitor') => 30
			),
			'group' => esc_html__('Owl Setting', 'excitor'),
			'description' => esc_html__('Margin-right(px) on item.', 'excitor')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Loop', 'excitor'),
			'param_name' => 'loop',
			'value' => '',
			'group' => esc_html__('Owl Setting', 'excitor'),
			'description' => esc_html__('Infinity loop. Duplicate last and first items to get loop illusion.', 'excitor')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Autoplay.', 'excitor'),
			'param_name' => 'autoplay',
			'value' => '',
			'group' => esc_html__('Owl Setting', 'excitor'),
			'description' => esc_html__('Autoplay.', 'excitor')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('AutoplayHoverPause', 'excitor'),
			'param_name' => 'autoplayhoverpause',
			'value' => '',
			'group' => esc_html__('Owl Setting', 'excitor'),
			'description' => esc_html__('Pause on mouse hover.', 'excitor')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('SmartSpeed', 'excitor'),
			'param_name' => 'smartspeed',
			'value' => 500,
			'group' => esc_html__('Owl Setting', 'excitor'),
			'description' => esc_html__( 'Speed Calculate.', 'excitor' )
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Nav', 'excitor'),
			'param_name' => 'nav',
			'value' => '',
			'group' => esc_html__('Owl Setting', 'excitor'),
			'description' => esc_html__('Show next/prev buttons.', 'excitor')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Dots', 'excitor'),
			'param_name' => 'dots',
			'value' => '',
			'group' => esc_html__('Owl Setting', 'excitor'),
			'description' => esc_html__('Show dots navigation.', 'excitor')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Items Medium Screen', 'excitor'),
			'param_name' => 'items_md',
			'value' => array(
				esc_html__('Auto', 'excitor') => '',
				esc_html__('4 Items', 'excitor') => 4,
				esc_html__('3 Items', 'excitor') => 3,
				esc_html__('2 Items', 'excitor') => 2,
				esc_html__('1 Item', 'excitor') => 1
			),
			'group' => esc_html__('Responsive', 'excitor'),
			'description' => esc_html__('The number of items you want to see on the screen(>=992px and <1199px).', 'excitor')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Items Small Screen', 'excitor'),
			'param_name' => 'items_sm',
			'value' => array(
				esc_html__('Auto', 'excitor') => '',
				esc_html__('4 Items', 'excitor') => 4,
				esc_html__('3 Items', 'excitor') => 3,
				esc_html__('2 Items', 'excitor') => 2,
				esc_html__('1 Item', 'excitor') => 1
			),
			'group' => esc_html__('Responsive', 'excitor'),
			'description' => esc_html__('The number of items you want to see on the screen(>=768px and <992px).', 'excitor')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Items Extra Screen', 'excitor'),
			'param_name' => 'items_xs',
			'value' => array(
				esc_html__('Auto', 'excitor') => '',
				esc_html__('4 Items', 'excitor') => 4,
				esc_html__('3 Items', 'excitor') => 3,
				esc_html__('2 Items', 'excitor') => 2,
				esc_html__('1 Item', 'excitor') => 1
			),
			'group' => esc_html__('Responsive', 'excitor'),
			'description' => esc_html__('The number of items you want to see on the screen(<768px).', 'excitor')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Disable Nav On Extra Screen', 'excitor'),
			'param_name' => 'nav_xs',
			'value' => '',
			'group' => esc_html__('Responsive', 'excitor'),
			'description' => esc_html__('Disable next/prev buttons on the screen(<768px).', 'excitor')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Disable Dots On Extra Screen', 'excitor'),
			'param_name' => 'dots_xs',
			'value' => '',
			'group' => esc_html__('Responsive', 'excitor'),
			'description' => esc_html__('Disable dots navigation on the screen(<768px).', 'excitor')
		),
		
		array(
			'type' => 'css_editor',
			'heading' => esc_html__('CSS box', 'excitor'),
			'param_name' => 'css',
			'group' => esc_html__('Design Options', 'excitor'),
		)
	)
));
