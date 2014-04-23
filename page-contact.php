<?php 
/*
Template Name: Contact Page
*/
 ?>


<?php get_header(); ?>

<!-- Content -->


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article class="content layered-paper">
		<div></div>
	<?php the_content(); ?>

			</article>
		<?php endwhile; ?>



<article class="fSection"> </article>
<?php get_footer(); ?>