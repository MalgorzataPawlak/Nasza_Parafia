<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package nasza_parafia
 */

get_header();?>


<div id="content">
	<div class="main">

		<?php if (have_posts()): ?>
			<?php while (have_posts()): the_post(); ?>

				<?php
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile;
			else : ?>

				<?php get_template_part( 'content-none' );
		endif;?>


	</div> <!--end of div class="main"-->
</div> <!--end of div id="content"-->

<div class="navigation">
  <?php wp_pagenavi();?>
</div> <!--end of div class="navigation"-->

<?php get_footer() ?>
