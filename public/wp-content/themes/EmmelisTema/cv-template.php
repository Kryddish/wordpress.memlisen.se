	<?php 

	/* Template Name: cv-template */

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

	<div class="resume">

			<h1><?php the_field('sammanfattning_title'); ?></h1>
			<p><?php the_field('sammanfattning'); ?></p>

		<div>
			<h1><?php the_field('arbeten'); ?></h1>
			<h4><?php the_field('hornbach_title'); ?></h4>
			<p><?php the_field('hornbach_date'); ?></p>
			<h4><?php the_field('hornbach_info'); ?></h4>

			<h4><?php the_field('spånga_title'); ?></h4>
			<p><?php the_field('spånga_date'); ?></p>
			<p><?php the_field('spånga_info'); ?></p>
		</div>

		<div>
			<h1><?php the_field('utbildning_title'); ?></h1>
			<h4><?php the_field('kyh_title'); ?></h4>
			<p><?php the_field('kyh_date'); ?></p>
			<p><?php the_field('kyh_info'); ?></p>

			<h4><?php the_field('spånga_titleu'); ?></h4>
			<p><?php the_field('spånga_dateu'); ?></p>
			<p><?php the_field('spånga_infou'); ?></p>

			<h4><?php the_field('viksjoskolan_title'); ?></h4>
			<p><?php the_field('viksjoskolan_date'); ?></p>
			<p><?php the_field('viksjoskolan_info'); ?></p>
		</div>

	</div>

<?php get_footer(); ?>