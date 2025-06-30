<?php
/*
Template Name: Blog page
*/
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style_blog.css" />
<?php
get_header(); // Gọi header
?>

<main>
    <section class="b bg-success">
        <div class="container " style="margin-top: 100px;">
            <div class="row py-4">
                <div class="col-sm-12 col-md-6">
                    <h1 class="page-title pull-left text-white">Blog</h1>
                </div>
                <div class="col-sm-12 col-md-6 text-end text-white mt-3">
                    <a class="text-white text-decoration-none" href="">Home</a> /
                    <a class="text-white text-decoration-none" href="">Blog</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="blog-list mt-5">
                <div class="row">
                    <?php
                    // Lấy trang hiện tại (nếu không có thì mặc định là 1)
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 6, // Số bài viết trên mỗi trang
                        'paged' => $paged, // Thêm tham số phân trang
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm rounded">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                                        </a>
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                                                <?php the_title(); ?>
                                            </a>
                                        </h5>
                                        <div class="sub-post-title">
                                            <span class="date text-success"><?php echo get_the_date(); ?></span>
                                            <span class="author text-success"><i class="ps-4 bi bi-person-fill text-success"></i>
                                                <a class="text-decoration-none text-success" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">by <?php the_author(); ?></a>
                                            </span>
                                        </div>
                                        <p class="mt-4 mb-4"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-success btn-sm">Đọc tiếp</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                </div> <!-- /.row -->

                <!-- Phân trang -->
                <div class="d-flex justify-content-center mt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php
                            $big = 999999999; // số lớn để thay thế trong paginate_links
                            $pagination_links = paginate_links(array(
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'current' => max(1, $paged),
                                'total' => $query->max_num_pages,
                                'prev_text' => '&laquo;',
                                'next_text' => '&raquo;',
                                'type' => 'array', // trả về mảng để dễ xử lý
                                'mid_size' => 1,
                            ));

                            if (is_array($pagination_links)) {
                                foreach ($pagination_links as $link) {
                                    // Kiểm tra xem link này có active hay disabled không để thêm class tương ứng của Bootstrap
                                    $class = 'page-item';
                                    if (strpos($link, 'current') !== false) {
                                        $class .= ' active';
                                    }
                                    if (strpos($link, 'disabled') !== false) {
                                        $class .= ' disabled';
                                    }
                                    // Thay đổi thẻ a thành thẻ li với class page-link
                                    // Bởi vì $link đã là thẻ a, ta chỉ cần bọc nó trong li với class tương ứng
                                    echo '<li class="' . $class . '">' . str_replace('page-numbers', 'page-link', $link) . '</li>';
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>

            <?php
                        wp_reset_postdata();
                    else : ?>
                <div class="col-12">
                    <p>Không có bài viết nào.</p>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php
get_footer(); // Gọi footer
?>