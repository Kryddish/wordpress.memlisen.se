<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title>Memlisen.se | Emmelie Sundell | Hem | Student KYH</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  </head>
  <body>
  <!--facebook share plugin, hämtad kod-->
  <div id='fb-root'></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = '//connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.8';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  			<nav class="menu-position navbar" id="myNavbar">
			
				<?php
				
				$args = array(
					'theme_location' => 'primary');				
				?>
				<?php wp_nav_menu(  $args ); ?>
			</nav>

<div id='nav-container'>
  <div class='toggle-icon'>
    <span class='bar'></span>
    <span class='bar'></span>
    <span class='bar'></span>
  </div><!-- /toggle-icon -->
</div><!-- /nav-container -->