	<?php 
	/* Template Name: Blog */ 
	get_header();

	query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
	
	<header class="blog-header">
		<div class="blog-title">
			<p><?php bloginfo('name'); ?></p>
		</div>
		<nav class="blog-menu">
			<?php $args = array('theme_location' => 'primary');
			wp_nav_menu($args); ?>
		</nav>
	</header>
	<div class="blog-container">
		<div class="blog-posts">
			<?php if (have_posts() ){
			while (have_posts() ){
				the_post(); ?>
				<div class='blog-post'>
					<h1><?php the_title(); ?></h1>
					<p>
						<?php
						// the_modified_time('F jS, Y');
						the_time('Y-m-d H:i');
						the_content(); ?>
					</p><br>
					<p>Författare: <?php the_author(); ?></p>
				</div><?php
				}
			} ?>
		</div><div class="blog-about"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Britskorthaar-64091287828362D7bA.jpg/250px-Britskorthaar-64091287828362D7bA.jpg"><h2>About me</h2><p>Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p></div>
	</div>

<?php get_footer(); ?>