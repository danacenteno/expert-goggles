<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="blog-hero">
	<h3>Blog</h3>
</div>

<div class="main">
  <div class="container">

    <div class="index-content">

		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>