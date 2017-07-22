<?php get_header(); ?>


<div id="content">
	<div class="main">

		<?php if (have_posts()): ?>
			<?php while (have_posts()): the_post(); ?>

				<?php
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile;?>

    <?php else : ?>

			<?php get_template_part( 'content-none' ); ?>

		<?php endif; ?>

  </div> <!--end of div class="main"-->

	<div class="alignright">
		<?php get_sidebar() ?>
	</div>

</div> <!--end of div id="content"-->



<div class="navigation">
  <?php wp_pagenavi();?>
</div> <!--end of div class="navigation"-->

<?php get_footer() ?>
