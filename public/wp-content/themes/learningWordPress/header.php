<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
    <div class="overlay"> </div>
		<div class="bg-header">
    </div>
		</div>
		<div class="container">

			<!-- site-header -->
			
			<header class="site-header">
				<h1><?php bloginfo('name'); ?></h1>
				<h5><?php bloginfo('description'); ?></h5>
				<button class="learn-more">Learn more</button>
			</header><!-- /site-header -->
			<?php if (is_page) { ?>
			<?php }?>