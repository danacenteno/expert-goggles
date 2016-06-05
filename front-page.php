<?php get_header();  ?>
<div class="hero">
  <h2>
    <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <?php bloginfo( 'description' ); ?>
    </a>
  </h2>
</div>

<main class="main">
  <section class="about-short">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa praesentium inventore sunt, libero. Architecto nostrum dignissimos, reiciendis corporis distinctio inventore repellendus quia minus voluptas aperiam at dolorem quos doloribus.</p>
  </section>
  <div class="fp-container">
    <div class="fp-content">
      <div class="bar">
        <p>TEST TEST TEST</p>
        <a href=""><button>Read More</button></a>
      </div>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2><?php //the_title(); ?></h2>
        <h3><?php //the_field('subtitle_text'); ?></h3>
        <blockquote><?php //the_field('bio'); ?></blockquote>
        <?php $image = //get_field('bio_image'); ?>
        
        <img src="<?php echo $image['sizes']['square'] ?>" alt="">

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>