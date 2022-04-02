<footer class="footer text-center py-2 theme-bg-dark">
				<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
						<div id="footer-1" style="display: flex; flex-direction: column; align-items: center; justify-content: center">
							<?php dynamic_sidebar('footer-1'); ?>
						</div>
					<?php } ?>

				<p class="copyright"><a href="https://www.robertgarofalo.com">Robert Garofalo</a></p>
	    </footer>
    
    </div>
    
	<?php
		wp_footer();
	?>

</body>
</html> 
