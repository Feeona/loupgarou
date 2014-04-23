<?php get_header(); ?>


<!-- WE ENDED THE HEADER HERE-->

<!-- Content -->


<div class="theGoodies">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1>Loup Garou</h1>
		<?php wp_pagenavi(); ?>
		<?php $comic = get_field('weekly_comic_image'); ?>
						<img src="<?php echo $comic["url"] ?>">

			<?php endwhile; ?>
		<?php wp_pagenavi(); ?>


</div>

<?php get_footer(); ?>