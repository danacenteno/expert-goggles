<?php 

/*
  Template Name: Full Page, No Sidebar
*/

get_header();  
?>
<div class="hero">
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
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et aut aliquid deleniti ducimus quis quos nemo fugiat iusto consectetur. Ratione!</p>
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

        <?php endwhile; // end the loop?>
      </div> <!-- /,content -->
  </div> <!-- /.container -->

</main> <!-- /.main -->

<?php get_footer(); ?>

