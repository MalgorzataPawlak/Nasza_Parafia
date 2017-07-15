
	<?php get_header(); ?>

	<div id="content">

		<div id="about_us">
			<?php
				if (have_posts()):
					while (have_posts()): the_post();
						echo the_content();
					endwhile;
				endif;
			?>
		</div><!--end of div id="about_us"-->

	</div><!--end of div id="content"-->

	<?php get_footer() ?>
