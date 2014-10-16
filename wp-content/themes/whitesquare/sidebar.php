<aside>
	<nav class="aside-navigation">
		<? wp_nav_menu(array('menu' => 'aside-menu', 'menu_class' => 'aside-menu')); ?>
	</nav>
	<h2 class="sidebar-heading"><?php echo __('Our offices', 'whitesquare'); ?></h2>
	<div class="map">
		<img src="<?php bloginfo('template_url'); ?>/images/sample.png" width="230" height="180" alt="<?php echo __('Our offices', 'whitesquare'); ?>">
	</div>
</aside>