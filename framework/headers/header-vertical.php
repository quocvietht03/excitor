<?php 
	global $excitor_options;
	
?>
<div class="bt-menu-toggle"></div>
<header id="bt_header" class="bt-header bt-header-vertical">
	
	<div class="bt-header-inner">
		<div class="bt-logo">
			<?php
				$logo = isset($excitor_options['hvertical_logo']['url'])?$excitor_options['hvertical_logo']['url']:'';
				
				$logo_height = (isset($excitor_options['hvertical_logo_height'])&&$excitor_options['hvertical_logo_height'])?$excitor_options['hvertical_logo_height']:'24';
				
				excitor_logo($logo, $logo_height); 
			?>
		</div>
		
		<div class="bt-vertical-menu-wrap">
			<?php
				$menu_assign = isset($excitor_options['hvertical_menu_assign'])&&($excitor_options['hvertical_menu_assign'] != 'auto')?$excitor_options['hvertical_menu_assign']:'';
				excitor_nav_menu($menu_assign, 'main_navigation', 'bt-menu-list');
			?>
		</div>
		
		<div class="bt-sidebar">
			<?php
				if(isset($excitor_options['hvertical_content_bottom_element'])&&$excitor_options['hvertical_content_bottom_element']&&isset($excitor_options['hvertical_content_bottom_element'])&&$excitor_options['hvertical_content_bottom_element']){
					echo '<div class="bt-menu-content-right">';
						foreach($excitor_options['hvertical_content_bottom_element'] as $sidebar_id){
							dynamic_sidebar( $sidebar_id );
						}
					echo '</div>'; 
				}
			?>
		</div>
		
	</div>
		
</header>