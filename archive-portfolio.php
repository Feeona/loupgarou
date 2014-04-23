<?php get_header(); ?>
<article class="content layered-paper">
<div class="portSection clearfix">
		<?php
		if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


		<div class="portParts">
			<h2><a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a></h2>

			<?php $images = get_field('image'); ?>

			<figure>
				<a href="<?php the_permalink(); ?>"><img src="<?php echo $images[0]['images']['sizes']['thumbnail']; ?>" class="portImgSize"></a>			
			</figure>

			<p class="client"><?php the_field('client_name'); ?></p>
		</div>




<?php endwhile; // end of the loop. ?>
</div>
</article>
<article class="fSection"> </article>

<?php get_footer(); ?>