<?php get_header();  ?>
<div class="hero">
  <h2>
    <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <?php bloginfo( 'description' ); ?>
    </a>
  </h2>
</div>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <h3><?php the_field('subtitle_text'); ?></h3>
        <p><?php the_field('bio'); ?></p>
        <?php $image = get_field('bio_image'); ?>

        <!-- <pre><?php print_r($image); ?></pre> -->
        
        <img src="<?php echo $image['sizes']['square'] ?>" alt="">

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>