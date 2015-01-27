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
							<div class="row">
								<div class="col-sm-3">
									<p class="attribution" data-toggle="tooltip" data-placement="top" title="Answers to 'Adam Tarnowsky'">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
								</div>
								<div class="col-sm-6">
									<ul class="footer-icons text-center list-inline">
										<li data-toggle="tooltip" data-placement="top" title="LinkedIn"><a href="https://www.linkedin.com/in/atarnowsky"><i class="fa fa-linkedin fa-3x"></i></a></li>
										<li data-toggle="tooltip" data-placement="top" title="GitHub"><a href="https://github.com/erudite-chimp"><i class="fa fa-github-alt fa-3x"></i></a></li>
										<li class="hide" data-toggle="tooltip" data-placement="top" title="Resume"><a href="https://eruditechimp.com/"><i class="fa fa-file-text fa-3x"></i></a></li>
									</ul>
								</div>
							<div class="col-sm-3 text-right">
								<p><a href="http://320press.com" id="credit320" data-toggle="tooltip" data-placement="top" title="By the dudes of 320press">Based on wp-bootstrap theme</a></p>
							</div>
					</div>
				</div> <!-- end #inner-footer -->
			</div> <!-- end .container -->
		</footer> <!-- end footer -->

		<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		<script type="text/javascript">
			jQuery(function () {
				jQuery('[data-toggle="tooltip"]').tooltip();
			});
		</script>
		<?php wp_footer(); // js scripts are inserted using this function ?>
	</body>

</html>