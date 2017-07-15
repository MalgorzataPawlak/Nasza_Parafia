<?php
/**
 * @package nasza_parafia
 */
?>gj,gjh

 <article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
	<header class="entry-header"> -->
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<!-- <div class="entry-meta">
			<?php start_posted_on(); ?>
		</div><!-- .entry-meta --> -->

		<!-- <?php the_post_thumbnail(); ?> -->
	<!-- </header><!-- .entry-header --> -->

	<!-- <div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'start' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<!-- <footer class="entry-footer">
		<?php start_entry_footer(); ?>
	</footer><!-- .entry-footer -->
<!-- </article><!-- #post-## --> --> --> --> -->


<!-- <div class="alignright">
  <?php get_sidebar() ?>
</div> -->


<div id="content">

  <div class="single_redaktor">

    <div class="row">

      <div class="name">
        <h1>  <?php the_title(); ?></h1>
      </div> <!--end of div class="name"-->

    </div> <!-- end of div class="row"

    <!-- <div class="row">

      <div class="picture">
        <img src="<?php the_field('zdjęcie');?>">
      </div> <!--end of div class="picture"--> -->

      <!-- <div class="description">
        <?php if(have_posts()):
          while (have_posts()): the_post();
            echo the_content();?>
            <br>e-mail:
            <?php the_field('e-mail');?>
            <br>telefon:
            <?php the_field('numer_telefonu');
          endwhile;
        endif; ?>
      </div> <!--end ofdiv class="description"--> -->

    <!-- </div> <!-- end of div class="row"--> -->

  </div> <!--end of div class="single_redaktor"-->

</div> <!-- end of div id="content"> -->
