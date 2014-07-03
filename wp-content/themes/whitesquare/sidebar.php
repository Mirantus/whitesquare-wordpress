<?php $current_post_id = $post->ID; ?>
<aside>
	<nav class="aside-navigation">
		<ul class="aside-menu">		
			<?php query_posts('showposts=10');?>
			<?php while (have_posts()): the_post();?>
				<?php if ($current_post_id == $post->ID): ?>
					<li class="active">
				<?php else: ?>
					<li>
				<?php endif; ?>
				<a href="<?php the_permalink();?>"><?php the_title();?></a></li>
			<?php endwhile;?>
			<?php wp_reset_query();?>
		</ul>
	</nav>
	<h2 class="sidebar-heading">Our offices</h2>
	<div class="map">
		<img src="<?php bloginfo('template_url'); ?>/images/sample.png" width="230" height="180" alt="Our offices">
	</div>
</aside>