<?php 

/*
  Template Name: Full Page, No Sidebar
*/

get_header();  
?>
<div id="top" class="hero">
  <h1>
      <?php bloginfo( 'name' ); ?>
  </h1>

  <h2>
    <?php bloginfo( 'description' ); ?>
  </h2>

  <a href="#main-content"><i class="fa fa-chevron-down"></i></a>
</div>

<main id="main-content" class="main">
  <div class="container">
      <div class="intro-bar">
        <div class="wrapper">
          <h5>Never tell me the odds!</h5>
            <div class="icons">
              <figure>
                <i class="fa fa-star"></i>
                <figcaption class>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque deserunt est, dolorem quia recusandae in!
                </figcaption>
              </figure>
              <figure>
                <i class="fa fa-rebel"></i>
                <figcaption class>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fugit necessitatibus nesciunt, rerum excepturi culpa!
                </figcaption>
              </figure>
              <figure>
                <i class="fa fa-rocket"></i>
                <figcaption class>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, rem error dicta et, inventore officia!
                </figcaption>
              </figure>
            </div>

        </div>
      </div>

      <div class="about-bar">
        <div class="wrapper">
          <p>The main entrance to the control bunker's on the far side of that landing platform. This isn't gonna be easy. Hey, don't worry. Chewie and me got into a lot of places more heavily guarded than this. What's he saying? He says there's a secret entrance on the other side of the ridge.</p>
          <button>Read More</button>
        </div>
      </div>

      <div class="blog-bar">
        <h4>Recent Posts</h4>
        <div class="wrapper">
          <figure>
            <img src="https://unsplash.it/400/400?image=765" alt="night sky covered with stars">
            <figcaption>
              Antar Four Hapes Teyr Hoth Talasea Aridus Gamorr. Nim Drovis Sacorria Kuat Telti Corellia Kessel J't'p'tan Lwhekk.
              <button>Continue reading</button>
            </figcaption>
          </figure>
          <figure>
            <img src="https://unsplash.it/400/400?image=723" alt="purple and pink nebula">
            <figcaption>
              Han Solo Ree-Yees Jacen Solo Beru Lars Lobot Droopy McCool. Ponda Baba Max Rebo Biggs Darklighter Greedo, IG-88 Mon Mothma!
              <button>Continue reading</button>
            </figcaption>
          </figure>
          <figure>
            <img src="https://unsplash.it/400/400?image=38" alt="large photo of a crescent moon">
            <figcaption>
              Antar Four Hapes Teyr Hoth Talasea Aridus Gamorr. Nim Drovis Sacorria Kuat Telti Corellia Kessel J't'p'tan Lwhekk.
              <button>Continue reading</button>
            </figcaption>
          </figure>
        </div>
      </div>

      <div class="content">
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h2><?php //the_title(); ?></h2>
          <h3><?php //the_field('subtitle_text'); ?></h3>
          <p><?php //the_field('bio'); ?></p>
          <?php //$image = get_field('bio_image'); ?>

          <img src="<?php //echo $image['sizes']['square'] ?>" alt="">

          <?php the_content(); ?>
          <?php get_post(); ?>

        <?php endwhile; // end the loop?>
      </div> <!-- /,content -->
  </div> <!-- /.container -->

</main> <!-- /.main -->

<?php get_footer(); ?>

