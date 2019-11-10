<!-- Footer
		============================================= -->
		<footer id="footer" class="noborder bg-white">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap row pb-5 clearfix">

					<div class="col-md-8">

						<div class="widget clearfix">

							<img src="<?php echo base_url("assets/images/venoweblogo.png");?>" alt="Footer Logo" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #DDD; max-height: 35px;" >

							<p>We are company that focus on web development and data science.</p>

							<div class="line line-sm"></div>

							<div class="row">

								<div class="col-lg-3 col-6 bottommargin-sm widget_links">
									<ul>
										<li><a href="<?php echo base_url() ?>">Home</a></li>
										<li><a href="<?php echo base_url('faq') ?>">FAQs</a></li>
										<li><a href="<?php echo base_url('about') ?>">About</a></li>
										<li><a href="<?php echo base_url('portfolio') ?>">Portfolio</a></li>
									</ul>
								</div>

								<div class="col-lg-3 col-6 bottommargin-sm widget_links">
									<ul>
										<li><a href="<?php echo base_url('services/webdevelopment') ?>">Web Development</a></li>
										<li><a href="<?php echo base_url('services/datascience') ?>">Data Science</a></li>
									</ul>
								</div>

								<div class="col-lg-3 col-6 bottommargin-sm widget_links">
									<ul>
										<li><a href="<?php echo base_url('careers') ?>">Careers</a></li>
									</ul>
								</div>

							</div>

						</div>

					</div>

					<div class="col-md-4">

						<div class="widget clearfix">

							<div class="row clearfix">

								<div class="col-12">
									<div class="feature-box fbox-light" style="padding-left: 70px">
										<div class="fbox-icon">
											<i class="icon-envelope nobg noborder"></i>
										</div>
										<span class="text-muted" id="call">Call Us:</span><br>
										<h3 class="nott ls0 t600">(+62)856-4324-555-4</h3>
									</div>
								</div>

								<div class="col-12 mt-4">
									<div class="feature-box fbox-light" style="padding-left: 70px">
										<div class="fbox-icon">
											<i class="icon-phone3 nobg noborder"></i>
										</div>
										<span class="text-muted">Email Us:</span><br>
										<h3 class="nott ls0 t600">info@venoweb.com</h3>
									</div>
								</div>

							</div>

						</div>

<!-- 						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<div class="input-group-prepend">
										<div class="input-group-text nobg"><i class="icon-email2"></i></div>
									</div>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<div class="input-group-append">
										<button class="btn btn-success button button-color nott ls0 m-0" type="submit">Subscribe</button>
									</div>
								</div>
							</form>
						</div> -->

<!-- 						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-lg-6 col-md-12 col-6 clearfix bottommargin-sm">
									<a href="#" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" target="_blank" class="text-dark"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-lg-6 col-md-12 col-6 clearfix">
									<a href="#" target="_blank" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#" target="_blank" class="text-dark"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>

						</div> -->

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>


			<!-- Copyrights
			============================================= -->
			<div id="copyrights" style="background: url('<?php echo base_url("assets/demos/seo/images/hero/footer.svg"); ?>') no-repeat top center; background-size: cover; padding-top: 70px;">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2019 All Rights Reserved by Venoweb Inc.<br>
						<div class="copyright-links"><a href="<?php echo base_url('home/terms_of_use') ?>">Terms of Use</a> / 
						<a href="<?php echo base_url('home/privacy_policy') ?>">Privacy Policy</a></div>
					</div>

					<!-- <div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links clearfix">
							<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
						</div>
					</div> -->

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/plugins.js"); ?>"></script>


	<!-- Footer Scripts
	============================================= -->
	<script src="<?php echo base_url("assets/js/functions.js"); ?>"></script>

	<script>
		//Pricing Table Script
		jQuery(document).ready( function($){
			function pricingSwitcher( elementCheck, elementParent, elementPricing ) {
				elementParent.find('.pts-left,.pts-right').removeClass('pts-switch-active');
				elementPricing.find('.pts-switch-content-left,.pts-switch-content-right').addClass('hidden');

				if( elementCheck.filter(':checked').length > 0 ) {
					elementParent.find('.pts-right').addClass('pts-switch-active');
					elementPricing.find('.pts-switch-content-right').removeClass('hidden');
				} else {
					elementParent.find('.pts-left').addClass('pts-switch-active');
					elementPricing.find('.pts-switch-content-left').removeClass('hidden');
				}
			}

			$('.pts-switcher').each( function(){
				var element = $(this),
					elementCheck = element.find(':checkbox'),
					elementParent = $(this).parents('.pricing-tenure-switcher'),
					elementPricing = $( elementParent.attr('data-container') );

				pricingSwitcher( elementCheck, elementParent, elementPricing );

				elementCheck.on( 'change', function(){
					pricingSwitcher( elementCheck, elementParent, elementPricing );
				});
			});
		});

	</script>

</body>
</html>