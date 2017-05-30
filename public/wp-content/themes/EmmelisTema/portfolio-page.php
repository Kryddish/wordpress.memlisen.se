<?php 

	/* Template Name: Portfolio */

	get_header(); ?>

	<div class="blog-header">
		<div class="blog-title">
			<p><?php bloginfo('name'); ?></p>
		</div>
		<nav class="blog-menu">
			<?php $args = array('theme_location' => 'primary');
			wp_nav_menu($args); ?>
		</nav>
	</div>
	<div class="post-container"></div>
<?php
$cats = get_categories();
query_posts("cat=5&post_per_page=100");

if (have_posts() ) {
	while (have_posts() ) {
		the_post(); ?>




<?php
	}
}


get_footer(); ?>
