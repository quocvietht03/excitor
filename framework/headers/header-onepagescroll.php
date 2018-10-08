<?php 
	global $excitor_options;
	$page_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'page_options'):array();
	
	$container_class = (isset($excitor_options['honepage1_fullwidth'])&&$excitor_options['honepage1_fullwidth'])?'fullwidth':'container';
	$menu_assign = isset($excitor_options['honepage1_menu_assign'])&&($excitor_options['honepage1_menu_assign'] != 'auto')?$excitor_options['honepage1_menu_assign']:'';
	if(isset($page_options['header_menu_assign'])&&$page_options['header_menu_assign'] != 'auto'){ $menu_assign = $page_options['header_menu_assign']; }
	
?>
<header id="bt_header" class="bt-header-onepage bt-header-onepagev1">
		
	<div class="bt-subheader bt-header-inner">
		<div class="bt-subheader-inner <?php echo esc_attr($container_class); ?>">
			<div class="bt-subheader-cell bt-left">
				<div class="bt-content text-left">
					<?php
						$logo = isset($excitor_options['honepage1_logo']['url'])?$excitor_options['honepage1_logo']['url']:'';
						
						$logo_height = (isset($excitor_options['honepage1_logo_height'])&&$excitor_options['honepage1_logo_height'])?$excitor_options['honepage1_logo_height']:'24';
						
						excitor_logo($logo, $logo_height); 
						
						
					?>
				</div>
			</div>
			
			<div class="bt-subheader-cell bt-right">
				<div class="bt-content text-right">
					<?php
						if(isset($excitor_options['honepage1_content_right_element'])&&$excitor_options['honepage1_content_right_element']&&isset($excitor_options['honepage1_content_right_element'])&&$excitor_options['honepage1_content_right_element']){
							echo '<div class="bt-menu-content-right">';
								foreach($excitor_options['honepage1_content_right_element'] as $sidebar_id){
									dynamic_sidebar( $sidebar_id );
								}
							echo '</div>';
						}
					?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="bt-scroll-menu-wrap">
		<?php
			excitor_nav_menu($menu_assign, 'main_navigation', 'bt-menu-list');
		?>
	</div>
		
</header>