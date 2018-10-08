<?php
	global $excitor_options;
	$page_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'page_options'):array();
	
	$footer_class = 'bt-footer bt-footer-v1';
	
	$f1_fixed = (isset($excitor_options['f1_fixed'])&&$excitor_options['f1_fixed'])?$excitor_options['f1_fixed']:'';
	if(isset($page_options['footer_fixed'])&&$page_options['footer_fixed']){$f1_fixed = '';}
	if($f1_fixed){
		$footer_class .= ' bt-stick';
	}
	
	$f1_space = (isset($excitor_options['f1_footer_margin_space']['margin-top'])&&$excitor_options['f1_footer_margin_space']['margin-top'])?str_replace('px', '', $excitor_options['f1_footer_margin_space']['margin-top']):60;
	
	$container_class = (isset($excitor_options['f1_fullwidth'])&&$excitor_options['f1_fullwidth'])?'fullwidth':'container';
	if(isset($page_options['footer_fullwidth'])&&$page_options['footer_fullwidth']){ $container_class = 'container'; }
	
	$f1_footer_top = (isset($excitor_options['f1_footer_top'])&&$excitor_options['f1_footer_top'])?$excitor_options['f1_footer_top']:'';
	if(isset($page_options['footer_top'])&&$page_options['footer_top']){ $f1_footer_top = ''; }
	
	$f1_footer_top_columns = (isset($excitor_options['f1_footer_top_columns'])&&$excitor_options['f1_footer_top_columns'])?$excitor_options['f1_footer_top_columns']:4;
	switch ($f1_footer_top_columns) {
        case 4:
            $f1_footer_top_col_1_class = $f1_footer_top_col_2_class = $f1_footer_top_col_3_class = $f1_footer_top_col_4_class = 'col-sm-6 col-md-3';
            break;
		case 3:
            $f1_footer_top_col_1_class = $f1_footer_top_col_2_class = $f1_footer_top_col_3_class = $f1_footer_top_col_4_class = 'col-md-4';
            break;	
		case 2:
            $f1_footer_top_col_1_class = $f1_footer_top_col_2_class = $f1_footer_top_col_3_class = $f1_footer_top_col_4_class = 'col-md-6';
            break;
		case 1:
            $f1_footer_top_col_1_class = $f1_footer_top_col_2_class = $f1_footer_top_col_3_class = $f1_footer_top_col_4_class = 'col-md-12';
            break;
		default :
			$f1_footer_top_col_1_class = $f1_footer_top_col_2_class = $f1_footer_top_col_3_class = $f1_footer_top_col_4_class = 'col-sm-6 col-md-3';
			break;
	}
	if((isset($excitor_options['f1_footer_top_columns_class'])&&$excitor_options['f1_footer_top_columns_class'])){
		$f1_footer_top_col_1_class = (isset($excitor_options['f1_footer_top_col_1_class'])&&$excitor_options['f1_footer_top_col_1_class'])?$excitor_options['f1_footer_top_col_1_class']:'col-sm-6 col-md-3';
		$f1_footer_top_col_2_class = (isset($excitor_options['f1_footer_top_col_2_class'])&&$excitor_options['f1_footer_top_col_2_class'])?$excitor_options['f1_footer_top_col_2_class']:'col-sm-6 col-md-3';
		$f1_footer_top_col_3_class = (isset($excitor_options['f1_footer_top_col_3_class'])&&$excitor_options['f1_footer_top_col_3_class'])?$excitor_options['f1_footer_top_col_3_class']:'col-sm-6 col-md-3';
		$f1_footer_top_col_4_class = (isset($excitor_options['f1_footer_top_col_4_class'])&&$excitor_options['f1_footer_top_col_4_class'])?$excitor_options['f1_footer_top_col_4_class']:'col-sm-6 col-md-3';
	}
	
	$f1_footer_bottom_columns = (isset($excitor_options['f1_footer_bottom_columns'])&&$excitor_options['f1_footer_bottom_columns'])?$excitor_options['f1_footer_bottom_columns']:2;
	switch ($f1_footer_bottom_columns) {
		case 2:
            $f1_footer_bottom_col_1_class = $f1_footer_bottom_col_2_class = 'col-md-6';
            break;
		case 1:
            $f1_footer_bottom_col_1_class = $f1_footer_bottom_col_2_class = 'col-md-12';
            break;
		default :
			$f1_footer_bottom_col_1_class = $f1_footer_bottom_col_2_class = 'col-md-6';
			break;
	}
	if((isset($excitor_options['f1_footer_bottom_columns_class'])&&$excitor_options['f1_footer_bottom_columns_class'])){
		$f1_footer_bottom_col_1_class = (isset($excitor_options['f1_footer_bottom_col_1_class'])&&$excitor_options['f1_footer_bottom_col_1_class'])?$excitor_options['f1_footer_bottom_col_1_class']:'col-md-6';
		$f1_footer_bottom_col_2_class = (isset($excitor_options['f1_footer_bottom_col_2_class'])&&$excitor_options['f1_footer_bottom_col_2_class'])?$excitor_options['f1_footer_bottom_col_2_class']:'col-md-6';
	}
	
?>
<footer id="bt_footer" class="<?php echo esc_attr($footer_class); ?>" data-space="<?php echo esc_attr($f1_space); ?>">
	<!-- Start Footer Top -->
	<?php if($f1_footer_top){ ?>
		<div class="bt-footer-top">
			<div class="bt-overlay"></div>
			<div class="<?php echo esc_attr($container_class); ?>">
				<div class="row">
					<div class="<?php echo esc_attr($f1_footer_top_col_1_class); ?>">
						<div class="bt-content">
							<?php
								if(isset($excitor_options['f1_footer_top_col_1'])&&$excitor_options['f1_footer_top_col_1']){
									foreach($excitor_options['f1_footer_top_col_1'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								}
							?>
						</div>
					</div>
					<?php if($f1_footer_top_columns > 1){ ?>
						<div class="<?php echo esc_attr($f1_footer_top_col_2_class); ?>">
							<div class="bt-content">
								<?php
									if(isset($excitor_options['f1_footer_top_col_2'])&&$excitor_options['f1_footer_top_col_2']){
										foreach($excitor_options['f1_footer_top_col_2'] as $sidebar_id){
											dynamic_sidebar( $sidebar_id );
										}
									}
								?>
							</div>
						</div>
					<?php } ?>
					<?php if($f1_footer_top_columns > 2){ ?>
						<div class="<?php echo esc_attr($f1_footer_top_col_3_class); ?>">
							<div class="bt-content">
								<?php
									if(isset($excitor_options['f1_footer_top_col_3'])&&$excitor_options['f1_footer_top_col_3']){
										foreach($excitor_options['f1_footer_top_col_3'] as $sidebar_id){
											dynamic_sidebar( $sidebar_id );
										}
									}
								?>
							</div>
						</div>
					<?php } ?>
					<?php if($f1_footer_top_columns > 3){ ?>
						<div class="<?php echo esc_attr($f1_footer_top_col_4_class); ?>">
							<div class="bt-content">
								<?php
									if(isset($excitor_options['f1_footer_top_col_4'])&&$excitor_options['f1_footer_top_col_4']){
										foreach($excitor_options['f1_footer_top_col_4'] as $sidebar_id){
											dynamic_sidebar( $sidebar_id );
										}
									}
								?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
	<!-- End Footer Top -->
	<!-- Start Footer Bottom -->
	<div class="bt-footer-bottom">
		<div class="<?php echo esc_attr($container_class); ?>">
			<div class="row">
				<div class="<?php echo esc_attr($f1_footer_bottom_col_1_class); ?>">
					<div class="bt-content">
						<?php
							if(isset($excitor_options['f1_footer_bottom_col_1'])&&$excitor_options['f1_footer_bottom_col_1']){
								foreach($excitor_options['f1_footer_bottom_col_1'] as $sidebar_id){
									dynamic_sidebar( $sidebar_id );
								}
							}
						?>
					</div>
				</div>
				<?php if($f1_footer_bottom_columns > 1){ ?>
					<div class="<?php echo esc_attr($f1_footer_bottom_col_2_class); ?>">
						<div class="bt-content">
							<?php
								if(isset($excitor_options['f1_footer_bottom_col_2'])&&$excitor_options['f1_footer_bottom_col_2']){
									foreach($excitor_options['f1_footer_bottom_col_2'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								}
							?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- End Footer Bottom -->
</footer>
