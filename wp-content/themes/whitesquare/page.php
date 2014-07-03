<?php get_header(); ?>
<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>
<?php get_sidebar(); ?>
<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>