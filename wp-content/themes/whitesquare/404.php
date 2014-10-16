<?php get_header(); ?>
<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>
<?php get_sidebar(); ?>
<section>
	<p><?php echo __('It looks like nothing was found at this location.', 'whitesquare'); ?></p>
</section>
<?php get_footer(); ?>