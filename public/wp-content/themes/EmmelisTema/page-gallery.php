	<?php 
	/* Template Name: Gallery */ 

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


	
	<div class="categories">
		<h1>Gallery</h1>
		<h5>Välkommen till mitt galleri! Klicka på en bild för mer info, för att beställa klicka på info.</h5>
		<button>Alla</button>
		<button>Bilar</button>
		<button>Djur</button>
		<button>Natur</button>
		<button>Övrigt</button>
		<button>Info</button>
	</div>
	<div class="images"></div>
	<div class="info"><center><h1>Info kommer snart!</h1></center></div>	

<?php get_footer(); ?>