

<?php get_header(); ?>
<article class="content layered-paper">
	<div class="contentStyle">
		<?php
		if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>

<!--<//?php $technologies = get_terms('technologies'); ?>
<ul>
<//?php foreach($technologies as $tech){
$url = get_bloginfo('url') . "/" . $tech->taxonomy . "/" . $tech->slug;
echo "<li><a href='$url'>$tech->name</a></li>";
} ?>
</ul>-->
<div class="holdPort">

	<?php while(has_sub_field('image')): ?> 


		<?php $image = get_sub_field('images'); ?>

		<img src="<?php echo $image['sizes']['thumbnail']; ?>">



	<?php endwhile; //end images loop ?>

</div>
<div class="buttonDiv">
	<a href="<?php the_field('demo_link'); ?>" class="button-big" target="_blank">Live demo</a>
</div>
<?php the_content(); ?>	


<?php endwhile; // end of the loop. ?>
</div>
</article>
<article class="fSection"> </article>
<?php get_footer(); ?>