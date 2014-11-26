		</div> <!-- end #container -->
		<footer class="page-footer" role="contentinfo">
			<div class="container">
				<div id="inner-footer" class="clearfix">
				  <div id="widget-footer" class="clearfix row">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
					<?php endif; ?>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
					<?php endif; ?>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
					<?php endif; ?>
				  </div>

					<nav class="footer-nav clearfix">
						<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>

					<div class="copyright">
						<p class="nexa pull-right"><a href="http://320press.com" id="credit320" title="By the dudes of 320press">Based on theme by 320press</a></p>
						<p class="nexa attribution">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
					</div>
				</div> <!-- end #inner-footer -->
			</div> <!-- end .container -->
		</footer> <!-- end footer -->

		<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

		<?php wp_footer(); // js scripts are inserted using this function ?>
	</body>

</html>