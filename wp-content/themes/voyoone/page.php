<?php get_header(); ?>

<main class="py-5">
    <div class="container mt-5">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="bg-white p-4 p-md-5 rounded shadow-sm">
                <h1 class="mb-3 text-primary"><?php the_title(); ?></h1>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="mb-4">
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
                    </div>
                <?php endif; ?>
                <div class="fs-5 lh-lg">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
