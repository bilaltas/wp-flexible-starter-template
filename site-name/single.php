<?php get_header(); ?>

<main>
	<section>
		<div class="wrap container">
			<div class="col">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( has_post_thumbnail(get_the_id()) ) { ?>
				<figure>
					<img src="<?=get_the_post_thumbnail_url(get_the_id(), 'medium')?>" alt=""/>
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