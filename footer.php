<div class="order-now">
    <h2>Don't waste your time Order now</h2>
    <a href="#" class="order-now-btn aster_signup_submit">Order</a>
</div>
<footer>
		<div class="container">
			<div class="footer__columns">
				<div class="footer__col">
                      <?php if(is_active_sidebar('sitemap')) : ?>
                        <?php dynamic_sidebar('sitemap'); ?>
                      <?php endif; ?>
				</div>
				<div class="footer__col">
                      <?php if(is_active_sidebar('support')) : ?>
                        <?php dynamic_sidebar('support'); ?>
                      <?php endif; ?>
				</div>
				<div class="footer__col">
					<h4>COMMUNITY</h4>
					<ul>
						<li>
							<a class="no-following-link" href="<?php echo get_theme_mod('social_facebook', 'http://facebook.com'); ?>">
								<span class="ico-circle">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</span>
								Facebook
							</a>
						</li>
						<li>
							<a class="no-following-link" href="<?php echo get_theme_mod('social_twitter', 'http://twitter.com'); ?>">
								<span class="ico-circle">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</span>
								Twitter
							</a>
						</li>
						<li>
							<a class="no-following-link" href="<?php echo get_theme_mod('social_google_plus', 'http://plus.google.com'); ?>">
								<span class="ico-circle">
									<i class="fa fa-google-plus" aria-hidden="true"></i>
								</span>
								Google Plus
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer__payments">
				<h4>WE ACCEPT:</h4>
				<i class="fa fa-cc-paypal" aria-hidden="true"></i>
				<i class="fa fa-cc-mastercard" aria-hidden="true"></i>
				<i class="fa fa-cc-visa" aria-hidden="true"></i>
				<i class="fa fa-cc-amex" aria-hidden="true"></i>
				<i class="fa fa-cc-discover" aria-hidden="true"></i>
			</div>
		</div>
		<div class="container">
			<div class="copyright">
				<?php echo get_theme_mod('copywrite', '2017 (c) Essay-au.com. All rights reserved'); ?>
			</div>
		</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
