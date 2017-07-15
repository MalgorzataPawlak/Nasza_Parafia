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
		endif;
	?>

	</div> <!--end of div class="ma in"-->
</div> <!--end of div id="content"-->

<?php get_footer() ?>
