
	<?php get_header(); ?>

	<div id="content">

    <div class="main">

      <?php
  			if (have_posts()) :
  				while (have_posts()) : the_post();?>
          <div class="post_area">
            <h1 style="text-align: center;"><a href="<?php the_permalink(); ?>"> <?php $x = get_the_title(); echo $x; ?> </h1> <!--get_the_title zwraca wartość, ale jej nie wyświetla, dlatego musimy ją włożyć do zmiennej i wyświetlić zmienną-->
            <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
              echo '<div class="cover_small" style="background: url('. $url.'); background-size: contain; background-repeat: no-repeat, background-position: bottom;"></div>'
            ?>
						</a>
          </div> <!--end of div class="post_area"-->
  				<?php endwhile;
  			endif;
      ?>

    </div> <!--end of div class="main"-->


	</div> <!--end of div id="content"-->

	<?php get_footer() ?>
