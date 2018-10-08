<article <?php post_class(); ?>>
	<div class="bt-post-item">
		<?php
			echo excitor_post_title_render();
			echo excitor_post_media_render();
			echo excitor_post_meta_render();
			echo excitor_post_content_render();
		?>
	</div>
</article>
