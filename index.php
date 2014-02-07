<?php get_header(); ?>


<div class="aboutMe">
	<img src="<?php bloginfo('template_directory'); ?>/img/MyPhoto.png" alt="My pretty cool photo" class="photo">
	<div class="deskription">
		<h2>Rainy day to you!</h2>
		<p>Hello, my unnown friend, and welkome to my unpretentious site. As you might see, I'm not good enogh in such things as webdesign and coding, but I try to do my best to improve my results. On this site I will lay out my works to see, if I get better. So, wish me good luck and thank you to visit my page.</p>
	</div>
	
</div>

<div class="posts">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="posttext">
				<?php the_content(); ?>
			</div>

		</div>

	<?php endwhile;

	else : echo "Not Found";

	endif;
	?>

	</div>

<?php get_footer(); ?>