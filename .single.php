<?php get_header() ?>
<div id="single" class="content-area">

	<div class="cover">
    <?php
      if (have_posts()) :
        while (have_posts()) : the_post();?>

          <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            echo '<div class="cover_medium" style="background: url('. $url.'); background-size: contain; background-repeat: no-repeat, background-position: bottom;"></div>'
          ?>

        <?php endwhile;
      endif;
    ?>
  </div> <!--end of div class="cover"-->

  <div class="download">
		<?php
			if (have_posts()):
				the_post();

        the_content()
     endif;
		?>

  </div> <!--end of div class="download"





</div>
