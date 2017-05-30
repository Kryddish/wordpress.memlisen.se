	<?php 
/* Template Name: FrontPage */ 

get_header();?>
		<div class="header-bg">	
			<nav class="site-nav">
				<?php 
				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				
			</nav>
				<div class="header-info">
				<p class="name"><?php bloginfo('name'); ?></p>
				<p><?php bloginfo('description'); ?></p>
				<div class="arrow-down"></div>
			</div>
		</div>

			<nav class="header-menu">
			
				<?php
				
				$args = array(
					'theme_location' => 'primary');				
				?>
				<?php wp_nav_menu(  $args ); ?>
			</nav>

<div class='about-section'>
	<p class='header-text'>Om mig</p>
	<hr width="15%">
	<img src='wp-content/themes/EmmelisTema/images/me.JPG'>


		<div class="about-text">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius justo velit, et eleifend ex pellentesque nec. Donec mattis ut nulla sed maximus. Sed sit amet aliquam ex. Quisque eu bibendum elit, a fermentum ligula. Donec efficitur nunc sed sem faucibus pulvinar. Sed imperdiet magna a scelerisque eleifend. Vivamus lacinia finibus magna, in facilisis nisl vehicula vel.</p>
			<p>
				 Donec elit ante, venenatis at nibh ac, porttitor consequat est. Cras vel ultrices orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque erat turpis, egestas non lectus eget, congue posuere ipsum. Nam volutpat dapibus interdum. Nam convallis nisi sit amet augue bibendum, eget pharetra sapien sodales. Donec quis purus justo. </p>
			<p>
				Nullam pulvinar massa quis congue accumsan. Pellentesque mauris eros, condimentum ut ante tempus, vestibulum dictum purus. Integer in magna dui. Morbi varius, massa vitae gravida feugiat, tortor massa lobortis nibh, ut pharetra ante eros nec orci. Vestibulum pellentesque aliquam est, et laoreet libero. Morbi non consequat felis. Curabitur in accumsan orci.
			 </p>
			<button class="laddaNer">Visa mitt cv</button>
			<button class="btn">Mitt portfolio</button>

		</div>
		<div class="icons">
			<p></p><p> </p><p> </p><p> </p><p> </p>
		</div>
</div>

<div class="first-paralax">

	<div class="services">
		<img class="camera-icon" src="wp-content/themes/EmmelisTema/images/camera.png">
		<h1>Porträtt</h1>
		<p>Jag är väldigt intresserad utav att fotografera och gör det mycket på fritiden. Om du kikar in i mitt galleri kan du hitta olika foton, även foton du kan köpa. </p>
	</div>

	<div class="services">
		<p class="header-text">Mina tjänster</p>
		<img class="camera-icon" style="padding: 13%; padding-bottom: 2%;" src="wp-content/themes/EmmelisTema/images/webbsite.png">
		<h1>Webbsidor</h1>
		<p>Jag är väldigt intresserad utav att fotografera och gör det mycket på fritiden. Om du kikar in i mitt galleri kan du hitta olika foton, även foton du kan köpa. </p>
	</div>

	<div class="services">
		<img class="camera-icon" src="wp-content/themes/EmmelisTema/images/wordpress.png">
		<h1>Teman</h1>
		<p>Jag är väldigt intresserad utav att fotografera och gör det mycket på fritiden. Om du kikar in i mitt galleri kan du hitta olika foton, även foton du kan köpa. </p>
	</div>


</div>

<div class="portfolio">
	<p class="header-text">Portfolio</p>
	<p>Mina senaste arbeten</p>
	<button class="btn-style">Visa alla</button>
<img src="http://cdn.images.express.co.uk/img/dynamic/59/590x/secondary/MacBook-2016-Review-UK-Review-MacBook-USB-C-2016-Refresh-Is-It-Worth-Buying-MacBook-vs-Pro-vs-Air-Which-Is-The-Best-Apple-MacBoo-531943.jpg">


<img src="http://cdn.images.express.co.uk/img/dynamic/59/590x/secondary/MacBook-2016-Review-UK-Review-MacBook-USB-C-2016-Refresh-Is-It-Worth-Buying-MacBook-vs-Pro-vs-Air-Which-Is-The-Best-Apple-MacBoo-531943.jpg">
<img src="http://cdn.images.express.co.uk/img/dynamic/59/590x/secondary/MacBook-2016-Review-UK-Review-MacBook-USB-C-2016-Refresh-Is-It-Worth-Buying-MacBook-vs-Pro-vs-Air-Which-Is-The-Best-Apple-MacBoo-531943.jpg">

<img src="http://cdn.images.express.co.uk/img/dynamic/59/590x/secondary/MacBook-2016-Review-UK-Review-MacBook-USB-C-2016-Refresh-Is-It-Worth-Buying-MacBook-vs-Pro-vs-Air-Which-Is-The-Best-Apple-MacBoo-531943.jpg">
<img src="http://cdn.images.express.co.uk/img/dynamic/59/590x/secondary/MacBook-2016-Review-UK-Review-MacBook-USB-C-2016-Refresh-Is-It-Worth-Buying-MacBook-vs-Pro-vs-Air-Which-Is-The-Best-Apple-MacBoo-531943.jpg">
<img src="http://cdn.images.express.co.uk/img/dynamic/59/590x/secondary/MacBook-2016-Review-UK-Review-MacBook-USB-C-2016-Refresh-Is-It-Worth-Buying-MacBook-vs-Pro-vs-Air-Which-Is-The-Best-Apple-MacBoo-531943.jpg">
</div>

<div class="second-paralax">
	<p>You like what you seen this far?</p>
	<p>Please give me some feedback!</p>
	<input type="text" name="" placeholder="Meassage..">
	<button>Send</button>
</div>

<div class="gallery">
	<p class="header-text">Gallery</p>
	<p>Senaste bilderna</p>
	<button class="btn-style">Visa fler</button>
<img class="head-img" src="http://i.stack.imgur.com/WCveg.jpg">

<img class="small-img" src="http://i.stack.imgur.com/WCveg.jpg">
<img class="small-img"  src="http://i.stack.imgur.com/WCveg.jpg">
<img class="small-img"  src="http://i.stack.imgur.com/WCveg.jpg">
<img class="small-img"  src="http://i.stack.imgur.com/WCveg.jpg">
<img class="small-img" src="http://i.stack.imgur.com/WCveg.jpg">
<img class="small-img"  src="http://i.stack.imgur.com/WCveg.jpg">
<img class="small-img"  src="http://i.stack.imgur.com/WCveg.jpg">
<img class="small-img" src="http://i.stack.imgur.com/WCveg.jpg">
<img class="small-img"  src="http://i.stack.imgur.com/WCveg.jpg">
<img class="small-img"  src="http://i.stack.imgur.com/WCveg.jpg">
<img class="small-img" src="http://i.stack.imgur.com/WCveg.jpg">
<img class="small-img"  src="http://i.stack.imgur.com/WCveg.jpg">
</div>

<div class="third-paralax">
<p class="header-text">Kontakta mig!</p>
	  Järfälla, Sweden<br>
      Mobil: 0708769638<br>
      Email: emmelie.sundell@hotmail.com<br>
    <p>Swing by for a cup of coffee, or leave me a note:</p>
    <div class="contact">
   	  <center>
   	  <form>
		   <label for="">Ditt namn</label>
		   <input type="text" placeholder="Anders karlsson">
		   <label for="">Din emailadress</label>
		   <input type="text" placeholder="email@hotmail.com">
		   <label for="">Ditt telefonnummer</label>
		   <input type="text" placeholder="07000000">
		   <label for="">Meddelande</label>
		   <input type="meassage" placeholder="Jag är en fråga..">
		  <input type="submit">
	   </form>
	 </center>
</div>	

</div>

<?php
get_footer();
?>