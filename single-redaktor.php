
<?php get_header(); ?>



<div class="alignright">
  <?php get_sidebar() ?>
</div>


<div id="content">

  <div class="single_redaktor">

    <div class="row">  

      <div class="name">
        <h1>  <?php the_title(); ?></h1>
      </div> <!--end of div class="name"-->

    </div> <!-- end of div class="row"-->

    <div class="row">

      <div class="picture">
        <img src="<?php the_field('zdjęcie');?>">
      </div> <!--end of div class="picture"-->

      <div class="description">
        <?php if(have_posts()):
          while (have_posts()): the_post();
            echo the_content();?>
            <br>e-mail:
            <?php the_field('e-mail');?>
            <br>telefon:
            <?php the_field('numer_telefonu');
          endwhile;
        endif; ?>
      </div> <!--end ofdiv class="description"-->

    </div> <!-- end of div class="row"-->

  </div> <!--end of div class="single_main"-->

</div> <!-- end of div id="content"> -->

<?php get_footer(); ?>
