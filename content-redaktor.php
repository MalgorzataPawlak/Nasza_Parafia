<?php
/**
 * @package nasza_parafia
 */
?>


<div id="content-redaktor">

  <div class="redaktor">

    <div class="row">

      <div class="col">

        <div class="picture">
          <img src="<?php the_field('zdjęcie');?>">
        </div> <!--end of div class="picture"-->

      </div> <!--end of div class="col"-->

      <div class="col">

        <div class="name">
          <h1>  <?php the_title(); ?></h1>
        </div> <!--end of div class="name"-->

        <div class="dates">

          <p style="display:inline-block">e-mail:</p>
          <a style="display:inline-block" href="mailto:<?php the_field('e-mail');?>"><?php the_field('e-mail');?></a>
          <br>telefon:
          <?php the_field('numer_telefonu'); ?>

        </div> <!--end of div class="dates"-->

      </div> <!--ebd of div class="col"-->

    </div> <!-- end of div class="row"-->

    <div class="row">

      <div class="description">
        <?php the_content();?>

      </div> <!--end of div class="description"-->

    </div> <!-- end of div class="row"-->



  </div> <!--end of div class="redaktor"-->
  <hr>

</div> <!-- end of div id="content">
