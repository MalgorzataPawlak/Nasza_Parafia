<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package nasza_parafia
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="archive-redaktors">
			<?php
			if (have_posts()):?>
				<!-- <div class="one"> -->
				<?php while (have_posts()): the_post();

				get_template_part('content-redaktor', get_post_format() );?>
				<!-- </div> -->
				<?php endwhile;
			endif; ?>
			</div> <!--and of div class="archive-redaktors"-->

			<div class="alignright">
				<?php get_sidebar(); ?>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->



</div><!-- .wrap -->

<div class="navigation">
  <?php wp_pagenavi();?>
</div> <!--end of div class="navigation"-->

<?php get_footer();
