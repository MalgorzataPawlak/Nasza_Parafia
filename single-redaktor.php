
<?php get_header(); ?>






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
            <div class="dates">

              <p style="display:inline-block">e-mail:</p>
              <a style="display:inline-block" href="mailto:<?php the_field('e-mail');?>"><?php the_field('e-mail');?></a>
              <br>telefon:
              <?php the_field('numer_telefonu'); ?>

            </div> <!--end of div class="dates"-->
          <?php endwhile;
        endif; ?>
      </div> <!--end ofdiv class="description"-->

    </div> <!-- end of div class="row"-->

  </div> <!--end of div class="single_redaktor"-->

  <div class="alignright">
    <?php get_sidebar() ?>
  </div>

</div> <!-- end of div id="content"> -->

<?php get_footer(); ?>
