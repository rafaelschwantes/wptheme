<?php 
echo 'Page';

get_header(); 
?>

<main id="primary" class="site-main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</main><!-- #main -->

<?php get_footer();



