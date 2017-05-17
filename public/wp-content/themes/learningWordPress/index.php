<?php

get_header();
?>
			<nav class="site-nav header-menu">
			
				<?php
				
				$args = array(
					'theme_location' => 'primary');				
				?>
				<?php wp_nav_menu(  $args ); ?>
			</nav>
      <script type="text/javascript">
        
      </script>
			
<div class="about">
   <h2>Om mig</h2>
   <img src="http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg" alt="">
   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
   <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil</p>
   <p> imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus.</p> 
</div>

<div class="services">
    <h1>Mina tjänster</h1>
    
    <div class="service-box">
      <img src="http://criticalens.com/assets/camera_white-dc9c88d0660fb5c0776371230daca0b6.png" alt="">
       <h3>Porträtt</h3>
       <p>Ad has dicat ridens consetetur, eos eu option persius. Mollis cotidieque conclusionemque per id, ne nam alienum liberavisse.</p>
        
    </div>
    
    <div class="service-box">
        <img src="https://static.wixstatic.com/media/55fe0b_31087b640de0449c9706e78178e01bd7~mv2.png" alt="">
         <h3>Webbsidor</h3>
          <p>Ad has dicat ridens consetetur, eos eu option persius. Mollis cotidieque conclusionemque per id, ne nam alienum liberavisse.</p>
    </div>
    
    <div class="service-box">
        <img src="http://www.nicholshillssocialmedia.com/website-design-3-xxl.png" alt="">
         <h3>Webbdesign</h3>
          <p>Ad has dicat ridens consetetur, eos eu option persius. Mollis cotidieque conclusionemque per id, ne nam alienum liberavisse.</p>
    </div> 
</div>
   
<div class="work">
   <h2>Mina projekt</h2>
   
   <ul>
       <li><a href="#">Alla</a></li>
       <li><a href="#">Webbsidor</a></li>
       <li><a href="#">Spel</a></li>
       <li><a href="#">Bilder</a></li>
   </ul>
   
    <table>
        <tr>
            <td>
                <img src="http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg" alt="">
                <img src="http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg" alt="">
                <img src="http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg" alt="">
            </td>
        </tr>
            <tr>
            <td>
                <img src="http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg" alt="">
                <img src="http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg" alt="">
                <img src="http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg" alt="">
            </td>
        </tr>
            <tr>
            <td>
                <img src="http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg" alt="">
                <img src="http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg" alt="">
                <img src="http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg" alt="">
            </td>
        </tr>
    </table> 
</div>
    
<div class="contact">
   <h2>Kontakta mig</h2>
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
	
	

	<?php
get_footer();

?>