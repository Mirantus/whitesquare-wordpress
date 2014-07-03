<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<header>
		<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Whitesquare logo"></a>
		<?php get_search_form(); ?> 
	</header>
	<nav class="main-navigation">
		<ul class="top-menu">
			<?php wp_list_pages('title_li='); ?>
		</ul>
	</nav>