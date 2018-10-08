<?php
	global $excitor_options;
	$fullwidth = isset($excitor_options['titlebar_fullwidth'])&&$excitor_options['titlebar_fullwidth'] ? 'fullwidth': 'container';
	$titlebar_align = isset($excitor_options['titlebar_align']) ? $excitor_options['titlebar_align']: 'text-center';
?>
<div class="bt-titlebar bt-titlebar-v1">
	<div class="bt-titlebar-inner">
		<div class="bt-overlay"></div>
		<div class="bt-subheader">
			<div class="bt-subheader-inner <?php echo esc_attr($fullwidth); ?>">
				<div class="bt-subheader-cell bt-center">
					<div class="bt-content <?php echo esc_attr($titlebar_align); ?>">
						<div class="bt-page-title">
							<?php
								if(isset($excitor_options['titlebar_page_title_before'])&&$excitor_options['titlebar_page_title_before']&&isset($excitor_options['titlebar_page_title_before_content'])&&$excitor_options['titlebar_page_title_before_content']){
									echo '<div class="bt-before">'.$excitor_options['titlebar_page_title_before_content'].'</div>';
								}
							?>
							<h2><?php echo excitor_page_title(); ?></h2>
							<?php
								if(isset($excitor_options['titlebar_page_title_after'])&&$excitor_options['titlebar_page_title_after']&&isset($excitor_options['titlebar_page_title_after_content'])&&$excitor_options['titlebar_page_title_after_content']){
									echo '<div class="bt-after">'.$excitor_options['titlebar_page_title_after_content'].'</div>';
								}
							?>
						</div>
						<div class="bt-breadcrumb">
							<?php
								if(isset($excitor_options['titlebar_breadcrumb_before'])&&$excitor_options['titlebar_breadcrumb_before']&&isset($excitor_options['titlebar_breadcrumb_before_content'])&&$excitor_options['titlebar_breadcrumb_before_content']){
									echo '<div class="bt-before">'.$excitor_options['titlebar_breadcrumb_before_content'].'</div>';
								}
							?>
							<div class="bt-path">
								<?php
									$home_text = (isset($excitor_options['titlebar_breadcrumb_home_text'])&&$excitor_options['titlebar_breadcrumb_home_text'])?$excitor_options['titlebar_breadcrumb_home_text']: 'Home';
									$delimiter = (isset($excitor_options['titlebar_breadcrumb_delimiter'])&&$excitor_options['titlebar_breadcrumb_delimiter'])?$excitor_options['titlebar_breadcrumb_delimiter']: '-';
									
									echo excitor_page_breadcrumb($home_text, $delimiter);
								?>
							</div>
							<?php
								if(isset($excitor_options['titlebar_breadcrumb_after'])&&$excitor_options['titlebar_breadcrumb_after']&&isset($excitor_options['titlebar_breadcrumb_after_content'])&&$excitor_options['titlebar_breadcrumb_after_content']){
									echo '<div class="bt-after">'.$excitor_options['titlebar_breadcrumb_after_content'].'</div>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>