	<footer class="site-footer">
			<nav class="site-nav">
				<!-- use wp to include nav_menu -->
						<!-- use wp to include nav_menu -->
				<?php 
					$args = array(
						'theme_location' => "footer"
						// create second theme location
						);
				 ?>
				<?php wp_nav_menu( $args ); ?> 
			</nav>

		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

	</footer>
	<?php wp_footer(); ?>

</div> 
<!-- .container in header ended here  -->
</body>
</html>