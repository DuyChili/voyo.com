<?php get_header(); ?>

<main id="main" class="site-main container py-5">
    <h1 class="archive-title mb-4 mt-5"><?php the_archive_title(); ?></h1>
    <div class="archive-description mb-5 text-muted"><?php the_archive_description(); ?></div>

    <?php if ( have_posts() ) : ?>
        <div class="row g-4">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-6 col-lg-4">
                    <article <?php post_class('card h-100 shadow-sm'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                            </a>
                        <?php endif; ?>
                        <div class="card-body">
                            <h2 class="card-title h5">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="entry-summary card-text text-muted small">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-primary">Đọc tiếp</a>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-5">
            <?php
            the_posts_pagination([
                'mid_size'  => 2,
                'prev_text' => __('« Trước'),
                'next_text' => __('Tiếp »'),
                'screen_reader_text' => ' ',
                'class' => 'pagination justify-content-center'
            ]);
            ?>
        </div>
    <?php else : ?>
        <div class="alert alert-warning" role="alert">
            Không có bài viết nào.
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
