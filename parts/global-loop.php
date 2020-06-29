<div class="posts">

    <?php while (have_posts()) : the_post(); ?>

        <article class="post">

            <h2 class="post-title">
                <a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a>
            </h2>

            <div class="category">
                Category: <a href="<?= get_category_link(get_the_category()[0]) ?>"><?= get_the_category()[0]->name ?></a>
            </div>

            <div class="wrap xl-table">
                <?php if (has_post_thumbnail()) { ?>
                    <div class="col xl-1-4">

                        <a href="<?= get_the_permalink() ?>">
                            <figure>
                                <?php the_post_thumbnail('medium'); ?>
                            </figure>
                        </a>

                    </div>
                <?php } ?>
                <div class="col">

                    <div class="excerpt">
                        <?php the_excerpt(); ?>
                    </div>

                    <div class="read-more">
                        <a href="<?= get_the_permalink() ?>">Read More...</a>
                    </div>

                </div>
            </div><br />

        </article>

    <?php endwhile; ?>


    <?php if (!have_posts()) : ?>

        <p>No content found here.</p>

    <?php endif; ?>


</div>

<div class="pagination">
    <?= paginate_links() ?>
</div>