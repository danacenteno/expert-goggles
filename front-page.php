<?php 

/*
  Template Name: Full Page, No Sidebar
*/

get_header();  
?>
<div class="hero">
  <h1>
      <?php bloginfo( 'name' ); ?>
  </h1>

  <h2>
    <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <?php bloginfo( 'description' ); ?>
    </a>
  </h2>
</div>

<main class="main">
  <div class="container">
      <div class="intro-bar">
        <div class="wrapper">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, culpa!</p>
        </div>
      </div>

      <div class="about-bar">
        <div class="wrapper">
          <p>The main entrance to the control bunker's on the far side of that landing platform. This isn't gonna be easy. Hey, don't worry. Chewie and me got into a lot of places more heavily guarded than this. What's he saying? He says there's a secret entrance on the other side of the ridge.</p>
          <button>Read More</button>
        </div>
      </div>

      <div class="content">
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h2><?php //the_title(); ?></h2>
          <h3><?php the_field('subtitle_text'); ?></h3>
          <p><?php the_field('bio'); ?></p>
          <?php $image = get_field('bio_image'); ?>

          <img src="<?php echo $image['sizes']['square'] ?>" alt="">

          <?php the_content(); ?>
          <?php get_post(); ?>

        <?php endwhile; // end the loop?>
      </div> <!-- /,content -->
  </div> <!-- /.container -->

</main> <!-- /.main -->

<?php get_footer(); ?>

