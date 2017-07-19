	<footer>

	<!-- <hr>
	<?php wp_nav_menu(array('menu' => "Linki")); ?> -->
	<script
	src="https://code.jquery.com/jquery-3.2.1.js"
	integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	crossorigin="anonymous"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/app.js"></script>
  <?php wp_footer(); ?>

		<div class="footer_area">

			<div class="sidebar-container">
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div><!-- #primary-sidebar -->
			</div> <!--end of class="sidebar-container"> -->


		Powered by MP 2017 (my first site)
		</div>

	</footer>
</body>
</html>
