<?php 
	/* Template Name: Blog */ 
	get_header();

	query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

	<div class="blog-header">
		<div class="blog-title">
			<p><?php bloginfo('name'); ?></p>
		</div>
		<nav class="blog-menu">
			<?php $args = array('theme_location' => 'primary');
			wp_nav_menu($args); ?>
		</nav>
	</div>
<div class="blogg">
		<p>Hello</p>
	</div>
<div class="blog-about">
	<img src="http://www.critterbabies.com/wp-content/gallery/parrots/a-baa-baby-parrots-cute.jpg">
	<h4>About me</h4>
	<p>Text</p>
	<?php wp_get_archives( array( 'type' => 'daily', 'limit' => 16) ); ?>
	
</div>
<?php
if (have_posts()) :
	
	while (have_posts()) : the_post(); ?>
	
	<article class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<p class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in
			
			<?php
			
			$categories = get_the_category();
			$separator = ", ";
			$output = '';
			
			if ($categories) {
				
				foreach ($categories as $category) {
				
					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
					
				}
				
				echo trim($output, $separator);
				
			}
			
			?>
			
			</p>
		
		<?php the_excerpt(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif; ?>



<?php
get_footer();

?>