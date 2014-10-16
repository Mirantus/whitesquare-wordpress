</div>
<footer>
	<div class="footer-content">
		<div class="twitter">
			<h3 class="footer-heading"><?php echo __('Twitter feed', 'whitesquare'); ?></h3>
			<time datetime="2012-10-23"><a href="#" class="twitter-time">23 oct</a></time>
			<p><?php echo __('In ultricies pellentesque massa a porta. Aliquam ipsum enim, hendrerit ut porta nec, ullamcorper et nulla. In eget mi dui, sit amet scelerisque nunc. Aenean aug', 'whitesquare'); ?></p>
		</div>
		<div class="sitemap">
			<h3 class="footer-heading"><?php echo __('Sitemap', 'whitesquare'); ?></h3>
			<div class="column first">
				<a href="/home/"><?php echo __('Home', 'whitesquare'); ?></a>
				<a href="/about/"><?php echo __('About', 'whitesquare'); ?></a>
				<a href="/services/"><?php echo __('Services', 'whitesquare'); ?></a>
			</div>
			<div class="column">
				<a href="/partners/"><?php echo __('Partners', 'whitesquare'); ?></a>
				<a href="/customers/"><?php echo __('Support', 'whitesquare'); ?></a>
				<a href="/contact/"><?php echo __('Contact', 'whitesquare'); ?></a>
			</div>
		</div>
		<div class="social">
			<h3 class="footer-heading"><?php echo __('Social networks', 'whitesquare'); ?></h3>
			<a href="http://twitter.com/" class="social-icon twitter-icon"></a>
			<a href="http://facebook.com/" class="social-icon facebook-icon"></a>
			<a href="http://plus.google.com/" class="social-icon google-plus-icon"></a>
			<a href="http://vimeo.com/" class="social-icon-small vimeo-icon"></a>
			<a href="http://youtube.com/" class="social-icon-small youtube-icon"></a>
			<a href="http://flickr.com/" class="social-icon-small flickr-icon"></a>
			<a href="http://instagram.com/" class="social-icon-small instagram-icon"></a>
			<a href="/rss/" class="social-icon-small rss-icon"></a>
		</div>
		<div class="footer-logo">
			<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/footer-logo.png" alt="Whitesquare logo"></a>
			<p><?php echo __('Copyright &copy; 2012 Whitesquare. A <a href="http://pcklab.com">pcklab</a> creation', 'whitesquare'); ?></p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>