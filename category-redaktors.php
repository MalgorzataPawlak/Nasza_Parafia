<?php get_footer() ?>


<div id="archive-redaktors">
  <h2> Posty z kategorii: <?php echo get_category_link(single_redaktor_title()); ?></h2>
  <!-- <div class="alignright">
    <?php get_sidebar() ?>
  </div> -->

  <div class="category">
      <?php
        if ( have_posts() ) :  
          while ( have_posts() ) : the_post();
            ?><h1><a href="<?php the_permalink(); ?>"> <?php $x = get_the_title(); echo $x; ?> </a></h1>
            <?php
            get_template_part('redaktor');
          endwhile;
        endif;
      ?>
  </div>


</div>

<?php get_header(); ?>
