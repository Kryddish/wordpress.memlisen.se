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

	<div id='background-position' class='yui-t7'>
    <div id='top-line'>
      <div id='hd'>
        <div class='yui-gc'>
          <div class='yui-u first'>
            <h1>Emmelie Sundell</h1>
            <h2>Studerande på KYH</h2>
          </div>
          <div class='yui-u'>
            <div class='contact-info'>
              <h3><a id='pdf' href='documents/CV.pdf' download='documents/CV.pdf'>Ladda ner som PDF</a></h3>
              <h3><a href='emmelie.sundell@hotmail.com'>emmelie.sundell@hotmail.com</a></h3>
              <h3>0708769638</h3>
              <script src='//platform.linkedin.com/in.js' type='text/javascript'></script>
              <!-- linkedin plugin hämtad från deras hemsida -->
              <script type='IN/MemberProfile' data-id='https://www.linkedin.com/in/emmelie-sundell-41bba2128' data-format='hover'></script>
            </div><!--// .contact-info -->
          </div>
        </div><!--// .yui-gc -->
      </div><!--// hd -->
      <table>
       <tbody>
        <tr>
          <th>
            <article>
              <?php
                get_field('sammanfattning');
                the_row();
              ?>
              <h2><?php the_sub_field('title'); ?></h2>
          </th> 
          <td>
            <p>
              <?php the_sub_field('info'); ?>
            </p>
          </td>
        </tr>
          <tr>
            <th>
              <h2><?php the_field('arbeten'); ?></h2>
            </th>

            <?php
            if( have_rows('work') ) {
              while ( have_rows('work') ) { 
                  the_row(); ?>

            <td class='border-short'>
              <h3><?php the_sub_field('title'); ?></h3></p>
              <a class='profession'>
                <?php the_sub_field('date'); ?>
              </a>
              <p>
                <?php the_sub_field('info'); ?>
              </p>
            </td>
          </tr>
          <?php 
              }
            } ?>
          <tr>
            <th>
              <h2><?php the_field('utbildning_title'); ?></h2>
            </th>
            <td class='border-short'>
              <h3><?php the_field('kyh_title'); ?></h3>
              <em><p class='profession'><?php the_field('kyh_date'); ?></p></em>
              <p><?php the_field('kyh_info'); ?></p>

            </td>
          </tr>

          <tr>
            <th>

            </th>
            <td class='border-long'>
             <h3><?php the_field('spånga_titleu'); ?></h3>
             <em><p class='profession'><?php the_field('spånga_dateu'); ?></p></em>
             <p><?php the_field('spånga_infou'); ?></p>
           </td>
         </tr>

         <tr>
          <th>
            <h2>Tekniska kunskaper</h2>
          </th>
          <td class='border-long'>

          </div>
          <div class='yui-u'>

            <div class='talent'>
              <h2>Språk</h2>
              <ul>
                <li>Svenska</li>
                <li>Engelska</li>
                <li>Tyska</li>
              </ul>               
            </div>

            <div class='talent'>
              <h2>Program</h2>
              <ul>
                <li>HTML 5</li>
                <li>CSS</li>
                <li>Javascript</li>
                <li>Jquery</li>
                <li>Photoshop</li>
                <li>Office</li>
              </ul>   
            </div>

            <div class='talent'>
              <h2>Verktyg</h2>
              <ul>
                <li>SublimeText3</li>
                <li>Github</li>
                <li>Visual Studio</li>
              </ul>   
            </td> </div></div>
          </tr>
        </article>
      </tbody>
    </table>

<?php get_footer(); ?>