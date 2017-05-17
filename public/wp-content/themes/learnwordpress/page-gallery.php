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
		<h4>Välkommen till mitt galleri! Klicka på en bild för mer info, för att beställa klicka på info.</h4>
			<button>Alla</button>
			<button>Bilar</button>
			<button>Djur</button>
			<button>Natur</button>
			<button>Övrigt</button>
			<button>Info</button>		

			<div class="all">
				<div class="cars">
					<!-- <img src="wp-content/themes/learnwordpress/images/meguiars.jpg"> -->
				<img src="https://www.driving.co.uk/s3/st-driving-prod/uploads/2015/12/sti_Large-5861McLaren-570S-Coupe-Mantis-Green-012jpg-JS195027594.jpg">
			</div>

			<div class="animals">
				<img src="https://s-media-cache-ak0.pinimg.com/736x/aa/c8/97/aac897078e2f67e83c64f52d688d771a.jpg">
			</div>

			<div class="nature">
				<img src="http://daypic.ru/pars/20130215/20130215_1532/12.jpg">
			</div>

			<div class="other">
				<img src="https://i.imgur.com/vcnVaVV.png">
			</div>

			<div class="info">
				<form>
					Huehue<input type="" name="">
				</form>
			</div>
		</div>
	</div>

<?php get_footer(); ?>