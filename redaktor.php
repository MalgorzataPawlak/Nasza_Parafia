<?php get_header(); ?>

<div class="wrap">
	<!-- <div id="primary" class="content-area"> -->
		<main id="main" class="site-main" role="main">
			<div class="archive-redaktors">
			<?php
			if (have_posts()):
				while (have_posts()): the_post();
					// the_content();
					get_template_part('redaktor');

				endwhile;
			endif; ?>
			</div> <!--and of div class="archive-redaktors"-->
		</main><!-- #main -->
	<!-- </div><!-- #primary --> -->
</div><!-- .wrap -->

<?php get_footer();
  
