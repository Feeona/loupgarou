<?php 
/*
Template Name: Home Page
*/
?>


<?php get_header(); ?>

<!-- Content -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


	<article class="content layered-paper">
		<div class="mahFace clearfix">
			<?php $Faceimg = get_field('enter_image'); ?>

			<img src="<?php echo $Faceimg["url"] ?>">

			<h1><?php the_field('enter_name'); ?></h1>

			<div class="jobTitles">
				<h2><?php the_field('job_title'); ?></h2>	</div>
				<div class="jobTitles jobTitles1">
					<h2><a href="<?php the_field('job_title_link'); ?>" class ="jobLink" target="_blank"><?php the_field('job_title2'); ?></a></h2></div>
					<div class="jobTitles">
						<h2><?php the_field('job_title3'); ?></h2></div>
					</div>

					<div class="links clearfix">



						<?php $SMimg1 = get_field('social_media1'); ?>
						<?php $SMimg2 = get_field('social_media2'); ?>
						<?php $SMimg3 = get_field('social_media3'); ?>
						<?php $SMimg4 = get_field('social_media4'); ?>

						<div class ="socialMedia"><a href="<?php the_field('social_media_link1'); ?>" target="_blank"><img src="<?php echo $SMimg1["url"] ?>"></a></div>
						<div class ="socialMedia"><a href="<?php the_field('social_media_link2'); ?>" target="_blank"><img src="<?php echo $SMimg2["url"] ?>"></a></div>
						<div class ="socialMedia"><a href="<?php the_field('social_media_link3'); ?>" target="_blank"><img src="<?php echo $SMimg3["url"] ?>"></a></div>
						<div class ="socialMedia"><a href="<?php the_field('social_media_link4'); ?>" target="_blank"><img src="<?php echo $SMimg4["url"] ?>"></a></div>
					</div>
				</div>



			</article>

			<article class="fSection">
				<div class="skillSection">
					<h3><?php the_field('skill_name'); ?></h3>
					<?php $SIimg1 = get_field('skill_icon1'); ?>
					<img src="<?php echo $SIimg1["url"] ?>" class="SIimg">
					<div class="progressRAWR"><progress max="100" value="95"></progress></div>

				</div>

				<div class="skillSection">
					<h3><?php the_field('skill_name2'); ?></h3>
					<?php $SIimg2 = get_field('skill_icon2'); ?>
					<img src="<?php echo $SIimg2["url"] ?>" class="SIimg">
					<div class="progressRAWR"><progress max="100" value="85"></progress></div>
				</div>

				<div class="skillSection">
					<h3><?php the_field('skill_name3'); ?></h3>
					<?php $SIimg3 = get_field('skill_icon3'); ?>
					<img src="<?php echo $SIimg3["url"] ?>" class="SIimg">
					<div class="progressRAWR"><progress max="100" value="65"></progress>

				</div>

			</article>

			<article class="content layered-paper">
				<div class="contentStyle clearfix">
					<h2>Wee bit more about me</h2>

					<div class="hobbiesSection">	
						<?php $AMimg1 = get_field('about_me_image'); ?>
						<img src="<?php echo $AMimg1["url"] ?>" class="AMimg">
						<p>I breed and show gerbils with the <a href="http://www.agsgerbils.org/" target="_blank">American Gerbil Society</a>, you can see me at <a href="http://www.caledoniagerbils.com" target="_blank">Caledonia Clan Gerbils</a>. </p>
				 	</div>

					<div class="hobbiesSection">
						<?php $AMimg2 = get_field('about_me_image2'); ?>
						<img src="<?php echo $AMimg2["url"] ?>" class="AMimg">
						<p>Ever since running through Sonic's adventures on my Sega Master System I've been a video game fanatic. These days I'm a big PC gamer, find me on <a href="http://steamcommunity.com/profiles/76561197990106622" target="_blank">Steam!</a></p>
					</div>

					<div class="hobbiesSection">
						<?php $AMimg3 = get_field('about_me_image3'); ?>
						<img src="<?php echo $AMimg3["url"] ?>" class="AMimg">
						<p>It wasn't until I moved to Toronto that I realised how much I miss plants, I manage my own balcony garden growing lots of edibles.</p>
					</div>

					<div class="hobbiesSection">
						<?php $AMimg3 = get_field('about_me_image4'); ?>
						<img src="<?php echo $AMimg3["url"] ?>" class="AMimg">
						<p>Self confessed Sci-Fi/Fantasy book nerd, goal this year is to read 200 books, why not help and throw me a recommendation on <a href="https://www.goodreads.com/user/show/27251638-fiona-martin" target="_blank">Goodreads.</a></p>
					</div>


					


				</div>


			</article>


		<?php endwhile; ?>
	</div>
</div>




<?php get_footer(); ?>