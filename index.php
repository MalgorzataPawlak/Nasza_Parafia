<?php get_header(); ?>


<div id="content">
	<div class="main">

		<?php if (have_posts()): ?>
			<?php while (have_posts()): the_post(); ?>

				<?php
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile;?>

      <!-- <?php start_the_posts_navigation(); ?> -->

		<?php else : ?>

			<?php get_template_part( 'content-none' ); ?>

		<?php endif; ?>


	</div> <!--end of div class="main"-->
</div> <!--end of div id="content"-->

<?php get_footer() ?>
