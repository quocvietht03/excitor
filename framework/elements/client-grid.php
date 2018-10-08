<?php
class WPBakeryShortCode_bt_client_grid extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'layout' =>  'default',
			'columns' =>  'col-6',
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'css' => ''
			
		), $atts));
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-client-grid-element',
			$layout,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		/* Item */
		$item_class = array();
		$item_class[] = 'bt-item';
		$item_class[] = (!empty($columns)) ? $columns: 'col-6';
		
		$item_attributes = array();
		if ( ! empty( $item_class ) ) {
			$item_attributes[] = 'class="' . esc_attr( implode(' ', $item_class) ) . '"';
		}
		
		ob_start();
		?>
		<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>" <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
			<?php
				$client_logo = vc_param_group_parse_atts( $atts['client_logo'] );
				if(!empty($client_logo)){
					foreach($client_logo as $logo){
						/* Link */
						$link = isset($logo['link'])?vc_build_link( $logo['link'] ):array();
						$link_before = $link_after = '';
						$link_attributes = array();
						$link_attributes[] = 'class="bt-link"';
						if(!empty($link)){
							if ( ! empty( $link['url'] ) ) {
								$link_attributes[] = 'href="' . esc_attr( $link['url'] ) . '"';
							}
							
							if ( ! empty( $link['target'] ) ) {
								$link_attributes[] = 'target="' . esc_attr( $link['target'] ) . '"';
							}
							
							if ( ! empty( $link['rel'] ) ) {
								$link_attributes[] = 'rel="' . esc_attr( $link['rel'] ) . '"';
							}
							
							if ( ! empty( $link['title'] ) ) {
								$link_attributes[] = 'title="'.esc_attr($link['title']).'"';
							}
							$link_before = '<a '.implode(' ', $link_attributes).'>';
							$link_after = '</a>';
						}
						
						/* Logo */
						$attachment_image = wp_get_attachment_image_src($logo['logo'], 'full', false);
						$logo_img = $attachment_image[0]?'<img src="'.esc_url($attachment_image[0]).'" alt="'.esc_attr($logo['name']).'"/>':'';
						
						if($logo_img){
							echo '<div '.implode(' ', $item_attributes).'>'.$link_before.$logo_img.$link_after.'</div>';
						}
					}
				}
			?>
		</div>
		<?php
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => esc_html__('Client Logo Grid', 'excitor'),
	'base' => 'bt_client_grid',
	'category' => esc_html__('BT Elements', 'excitor'),
	'icon' => 'bt-icon',
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Columns', 'excitor'),
			'param_name' => 'columns',
			'value' => array(
				esc_html__('6 Items', 'excitor') => 'col-6',
				esc_html__('5 Items', 'excitor') => 'col-5',
				esc_html__('4 Items', 'excitor') => 'col-4',
				esc_html__('3 Items', 'excitor') => 'col-3',
				esc_html__('2 Items', 'excitor') => 'col-2',
				esc_html__('1 Item', 'excitor') => 'col-1'
			),
			'description' => esc_html__('The number of items you want to see on the screen.', 'excitor')
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
		array(
			'type' => 'param_group',
			'heading' => esc_html__('Client Logo', 'excitor'),
			'param_name' => 'client_logo',
			'value' => '',
			'group' => esc_html__('Data Setting', 'excitor'),
			'description' => esc_html__('Please, select logo for option - client_logo.', 'excitor'),
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => 'Name',
					'param_name' => 'name',
					'value' => 'Logo name',
					'description' => esc_html__('Enter text used as name of logo.', 'excitor'),
					'admin_label' => true,
				),
				array(
					'type' => 'attach_image',
					'heading' => esc_html__('Logo', 'excitor'),
					'param_name' => 'logo',
					'value' => '',
					'description' => esc_html__('Select client logo in this element.', 'excitor')
				),
				array(
					'type' => 'vc_link',
					'heading' => esc_html__('URL (Link)', 'excitor'),
					'param_name' => 'link',
					'description' => esc_html__('Add link of logo in this element.', 'excitor')
				),
			)
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__('CSS box', 'excitor'),
			'param_name' => 'css',
			'group' => esc_html__('Design Options', 'excitor'),
		)
	)
));
