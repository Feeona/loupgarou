<?php /* Template Name: Custom Scrolling Example*/ ?>


<?php get_header();  ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full home">
    
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div>
    
    <div class="about">
      <!-- ================================ ABOUT SECTION STARTS ==================== -->

      <?php $about = new WP_Query(array(
        'post_type'=>'page',
        'page_id'=> 88
      )); ?>
      <?php if($about->have_posts()) while($about->have_posts()) : $about->the_post(); ?>
        <h2><?php the_title();?></h2>
        <?php the_content(); ?>
      <?php endwhile; ?>
      
      <!-- ================================ ABOUT SECTION ENDS ====================== -->
    </div>
    
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>