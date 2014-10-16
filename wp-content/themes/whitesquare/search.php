<?php get_header(); ?>
<div class="main-heading">
	<h1>Search</h1>
</div>
<?php get_sidebar(); ?>
<section>
	<h2 class="content-heading"><?php printf(__('Search Results for: %s', 'whitesquare'), get_search_query()); ?></h2>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p><?php the_excerpt(); ?></p>
	<?php endwhile;	else:?>
		<p><?php echo __('Sorry, no results found', 'whitesquare'); ?></p>
	<?php endif; ?>
</section>
<?php get_footer(); ?>