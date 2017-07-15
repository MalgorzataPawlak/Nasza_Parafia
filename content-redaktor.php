<?php
/**
 * @package nasza_parafia
 */
?>


<div id="content-redaktor">

  <div class="redaktor">

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
        <?php the_content();?>  
        <br>e-mail:
        <?php the_field('e-mail');?>
        <br>telefon:
        <?php the_field('numer_telefonu'); ?>
      </div> <!--end of div class="description"-->

    </div> <!-- end of div class="row"-->

  </div> <!--end of div class="single_redaktor"-->

</div> <!-- end of div id="content">
