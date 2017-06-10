	<?php 

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

<?php
if (have_posts() ){
	while (have_posts() ){
		the_post();
		echo "<div class='post-index post'>";
		the_title("<h1>", "</h1>");
		echo "<p>";
		// the_modified_time('Y-m-d');
		// the_modified_time('F jS, Y');
		the_time('Y-m-d H:i');
		the_content();
		echo "</p>";
		echo "Författare: ";
		the_author();
		echo "</div>";
	}
}

if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('custom_sidebar') ) : ?>


<?php endif; ?>


 get_footer(); ?>