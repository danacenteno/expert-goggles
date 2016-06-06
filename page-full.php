<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="page-hero">
	<h2>
		<?php the_title(); ?>
	</h2>
</div>

<div class="full-main">
  <div class="full-container">
	<div class="wrapper">
		<div class="float-box">
		    <?php // Start the loop ?>
		    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		      <?php the_content(); ?>
		    <?php endwhile; // end the loop?>
	    </div>
    </div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>