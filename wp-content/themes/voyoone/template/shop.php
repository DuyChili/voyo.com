<?php
/*
Template Name: Shop page
*/
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style_shops.css" />
<?php
get_header(); // Gọi header
?>

<main>
    <section class="b bg-success">
        <div class="container " style="margin-top: 100px;">
            <div class="row py-4">
                <div class="col-sm-12 col-md-6">
                    <h1 class="page-title pull-left text-white">Shop Grid</h1>
                </div>
                <div class="col-sm-12 col-md-6 text-end text-white mt-3">
                    <a class="text-white text-decoration-none" href="">Home</a> /
                    <a class="text-white text-decoration-none" href="">Shop</a> /
                    <a class="text-white text-decoration-none" href="">Grid</a>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container mt-5">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="toolbar-shop d-flex align-items-center flex-wrap">
                        <!-- Grid and List View Buttons -->
                        <div class="shop-ordering me-3">
                            <a href="shop_grid.html" class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Display Grid">
                                <i class="bi bi-grid-3x3-gap-fill"></i>
                            </a>
                            <a href="shop_list.html" class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Display List">
                                <i class="bi bi-list"></i>
                            </a>
                        </div>
                        <!-- Sort By Dropdown -->
                        <div class="dropdown me-3 shop-ordering">
                            <button class="btn btn-outline-success dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Sort by
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                                <li><a class="dropdown-item" href="#">Name</a></li>
                                <li><a class="dropdown-item" href="#">Price</a></li>
                                <li><a class="dropdown-item" href="#">Sales</a></li>
                                <li><a class="dropdown-item" href="#">Rating</a></li>
                            </ul>
                        </div>
                        <!-- Sort Ascending Button -->
                        <div class="shop-ordering me-3">
                            <button type="button" class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Sort ascending">
                                <i class="bi bi-sort-alpha-down"></i>
                            </button>
                        </div>
                        <!-- Show Products Dropdown -->
                        <div class="dropdown shop-ordering d-none d-sm-block">
                            <button class="btn btn-outline-success dropdown-toggle" type="button" id="showDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Show 10 products
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="showDropdown">
                                <li><a class="dropdown-item" href="#">Show 10 products</a></li>
                                <li><a class="dropdown-item" href="#">Show 15 products</a></li>
                                <li><a class="dropdown-item" href="#">Show 20 products</a></li>
                                <li><a class="dropdown-item" href="#">Show 25 products</a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row g-4 text-center mb-5">
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 9, // Số lượng sản phẩm hiển thị
                );
                $loop = new WP_Query($args);

                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post();
                        global $product;
                ?>
                        <div class="col-sm-12 col-md-3">
                            <figure class="shop-product position-relative">
                                <!-- Product Image -->
                                <div class="shop-image position-relative overflow-hidden">
                                    <div class="shop-img-title" style="height: 300px;">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo $product->get_image('woocommerce_single', array('class' => 'img-fluid')); ?>
                                        </a>
                                        <?php if ($product->is_on_sale()) : ?>
                                            <span class="shop-offer position-absolute top-0 start-0 bg-danger text-white py-3 px-2 small" style="font-size: 17px;">
                                                <?php echo wc_format_sale_price($product->get_regular_price(), $product->get_sale_price()); ?> off
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <!-- Shop Actions -->
                                    <div class="shop-actions" style="height: 300px;">
                                        <p class="text-dark pt-3 pb-4"><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-outline-success" data-bs-toggle="tooltip" title="See details">
                                            <i class="bi bi-search"></i>
                                        </a>
                                        <a href="?add-to-cart=<?php echo esc_attr($product->get_id()); ?>" class="btn btn-outline-success ajax_add_to_cart" data-bs-toggle="tooltip" title="Add to cart">
                                            <i class="bi bi-cart-plus"></i>
                                        </a>
                                        <div class="rating-system pt-4" style="cursor: pointer;">
                                            <?php
                                            echo wc_get_rating_html($product->get_average_rating());
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Details -->
                                <figcaption class="shop-description text-center my-4">
                                    <h4 class="mb-2"><?php the_title(); ?></h4>
                                    <div>
                                        <?php echo $product->get_price_html(); ?>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center">No products found</p>';
                endif;
                ?>
            </div>

            <div class="row mb-5">
                <div class="col-sm-12">
                    <?php
                    $big = 999999999; // số bất kỳ để thay thế sau này

                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $loop->max_num_pages,
                        'prev_text' => '<i class="bi bi-chevron-left"></i>',
                        'next_text' => '<i class="bi bi-chevron-right"></i>',
                        'type' => 'list', // để ra dạng <ul>
                    ));
                    ?>
                </div>
            </div>

        </div>
    </section>
</main>

<?php
get_footer(); // Gọi footer
?>