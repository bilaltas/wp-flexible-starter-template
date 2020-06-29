<?php get_header(); ?>

<main id="single">
	<section>
		<div class="wrap xl-1 container">
			<div class="col">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( has_post_thumbnail() ) { ?>
				<figure>
					<?php the_post_thumbnail('medium'); ?>
				</figure>
				<?php } ?>

				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>

			<?php endwhile; ?>


			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>