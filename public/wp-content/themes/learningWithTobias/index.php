<?php

get_header();

wp_nav_menu();


if (have_posts() ){
	while (have_posts() ){
		the_post();
		echo "<div class='post'>";
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

get_footer();
?>
