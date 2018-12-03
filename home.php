<?php get_header(); ?>

<main>
	<section>
		<div class="wrap container">
			<div class="col">


			<?php while ( have_posts() ) : the_post(); ?>

				<article>

					<h2 class="post-title">
						<a href="<?=get_the_permalink()?>"><?php the_title(); ?></a>
					</h2>

					<div class="category">
						Category: <a href="<?=get_category_link( get_the_category()[0] )?>"><?=get_the_category()[0]->name?></a>
					</div><br/>

					<div class="wrap xl-table">
						<?php if ( has_post_thumbnail(get_the_id()) ) { ?>
						<div class="col xl-1-4">

							<a href="<?=get_the_permalink()?>">
								<figure>
									<img src="<?=get_the_post_thumbnail_url(get_the_id(), 'medium')?>" alt=""/>
								</figure>
							</a>

						</div>
						<?php } ?>
						<div class="col">

							<div class="excerpt">
								<?php the_excerpt(); ?>
							</div>

							<div class="read-more">
								<a href="<?=get_the_permalink()?>">Read More...</a>
							</div>

						</div>
					</div><br/>

				</article>

			<?php endwhile; ?>


			</div>
		</div>
		<div class="wrap paginate">
			<div class="col">
				<?=paginate_links()?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>