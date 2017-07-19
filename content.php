
<div class="post">
  <a href="<?php the_permalink(); ?>">
  <h1 style="text-align: center;"> <?php $x = get_the_title(); echo $x; ?> </h1> <!--get_the_title zwraca wartość, ale jej nie wyświetla, dlatego musimy ją włożyć do zmiennej i wyświetlić zmienną-->
  <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    echo '<div class="cover_small" style="background: url('. $url.');
    background-size: contain; background-repeat: no-repeat, background-position: bottom;"></div>'
  ?>
  </a>

</div> <!--end of div class="post"-->
