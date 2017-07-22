<?php get_header(); ?>

<div id="single" class="content-area">

	<?php if (have_posts()):
		while (have_posts()): the_post();
			the_content();
		endwhile;
	endif;?>

</div> <!--end of div id="single"-->
