<?php

/**
 * Template Name: Modern Product Detail Page
 */
get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style_shop_single.css" />
<main>
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>">Cửa hàng</a></li>
                            <li class="breadcrumb-item active"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            global $product;
    ?>
            <!-- Product Detail Section -->
            <section class="product-detail-section">
                <div class="container">
                    <div class="row">
                        <!-- Product Images -->
                        <div class="col-lg-6 col-md-12">
                            <div class="product-images">
                                <!-- Main Image -->
                                <div class="main-image-container">
                                    <div class="product-badge-container">
                                        <?php if ($product->is_on_sale()) : ?>
                                            <span class="product-badge sale-badge">
                                                -<?php echo round((($product->get_regular_price() - $product->get_sale_price()) / $product->get_regular_price()) * 100); ?>%
                                            </span>
                                        <?php endif; ?>

                                        <?php if (!$product->is_in_stock()) : ?>
                                            <span class="product-badge out-of-stock-badge">Hết hàng</span>
                                        <?php endif; ?>

                                        <?php if ($product->is_featured()) : ?>
                                            <span class="product-badge featured-badge">Nổi bật</span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="main-image" id="mainImage">
                                        <?php echo $product->get_image('woocommerce_single', array('class' => 'img-fluid main-img')); ?>
                                    </div>

                                    <div class="image-zoom-lens" id="zoomLens"></div>
                                    <div class="image-zoom-result" id="zoomResult"></div>
                                </div>

                                <!-- Thumbnail Images -->
                                <div class="thumbnail-images">
                                    <?php
                                    $attachment_ids = $product->get_gallery_image_ids();
                                    $main_image_id = $product->get_image_id();

                                    if ($main_image_id) {
                                        echo '<div class="thumbnail-item active" data-image="' . wp_get_attachment_image_url($main_image_id, 'woocommerce_single') . '">';
                                        echo wp_get_attachment_image($main_image_id, 'woocommerce_thumbnail', false, array('class' => 'img-fluid'));
                                        echo '</div>';
                                    }

                                    foreach ($attachment_ids as $attachment_id) {
                                        echo '<div class="thumbnail-item" data-image="' . wp_get_attachment_image_url($attachment_id, 'woocommerce_single') . '">';
                                        echo wp_get_attachment_image($attachment_id, 'woocommerce_thumbnail', false, array('class' => 'img-fluid'));
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <!-- Product Info -->
                        <div class="col-lg-6 col-md-12">
                            <div class="product-info">
                                <div class="product-meta">
                                    <span class="product-sku">SKU: <?php echo $product->get_sku() ? $product->get_sku() : 'N/A'; ?></span>
                                    <div class="product-rating">
                                        <?php echo wc_get_rating_html($product->get_average_rating()); ?>
                                        <span class="rating-count">(<?php echo $product->get_review_count(); ?> đánh giá)</span>
                                    </div>
                                </div>

                                <h1 class="product-title"><?php the_title(); ?></h1>

                                <div class="product-price">
                                    <?php if ($product->is_on_sale()) : ?>
                                        <span class="regular-price"><?php echo wc_price($product->get_regular_price()); ?></span>
                                        <span class="sale-price"><?php echo wc_price($product->get_sale_price()); ?></span>
                                        <span class="save-amount">Tiết kiệm: <?php echo wc_price($product->get_regular_price() - $product->get_sale_price()); ?></span>
                                    <?php else : ?>
                                        <span class="normal-price"><?php echo $product->get_price_html(); ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="product-description">
                                    <?php echo $product->get_short_description(); ?>
                                </div>

                                <!-- Product Attributes -->
                                <?php
                                $attributes = $product->get_attributes();
                                if (!empty($attributes)) :
                                ?>
                                    <div class="product-attributes">
                                        <h4>Thông số kỹ thuật</h4>
                                        <ul class="attributes-list">
                                            <?php foreach ($attributes as $attribute) : ?>
                                                <li>
                                                    <strong><?php echo wc_attribute_label($attribute->get_name()); ?>:</strong>
                                                    <?php
                                                    if ($attribute->is_taxonomy()) {
                                                        echo implode(', ', wc_get_product_terms($product->get_id(), $attribute->get_name(), array('fields' => 'names')));
                                                    } else {
                                                        echo $attribute->get_options()[0];
                                                    }
                                                    ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <!-- Stock Status -->
                                <div class="stock-status">
                                    <?php if ($product->is_in_stock()) : ?>
                                        <span class="in-stock">
                                            <i class="fas fa-check-circle"></i>
                                            Còn hàng
                                            <?php if ($product->get_stock_quantity()) : ?>
                                                (<?php echo $product->get_stock_quantity(); ?> sản phẩm)
                                            <?php endif; ?>
                                        </span>
                                    <?php else : ?>
                                        <span class="out-of-stock">
                                            <i class="fas fa-times-circle"></i>
                                            Hết hàng
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <!-- Add to Cart Form -->
                                <?php if ($product->is_purchasable() && $product->is_in_stock()) : ?>
                                    <form class="cart-form" method="post" enctype="multipart/form-data">
                                        <div class="quantity-selector">
                                            <label for="quantity">Số lượng:</label>
                                            <div class="quantity-controls">
                                                <button type="button" class="qty-btn minus">-</button>
                                                <input type="number" id="quantity" name="quantity" value="1" min="1"
                                                    max="<?php echo $product->get_stock_quantity() ? $product->get_stock_quantity() : 99; ?>"
                                                    class="qty-input">
                                                <button type="button" class="qty-btn plus">+</button>
                                            </div>
                                        </div>

                                        <div class="cart-actions">
                                            <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>"
                                                class="btn btn-add-to-cart">
                                                <i class="fas fa-shopping-cart"></i>
                                                Thêm vào giỏ hàng
                                            </button>

                                            <button type="button" class="btn btn-buy-now">
                                                <i class="fas fa-bolt"></i>
                                                Mua ngay
                                            </button>
                                        </div>
                                    </form>
                                <?php endif; ?>

                                <!-- Product Actions -->
                                <div class="product-actions">
                                    <button class="action-btn wishlist-btn" data-product-id="<?php echo $product->get_id(); ?>">
                                        <i class="far fa-heart"></i>
                                        Yêu thích
                                    </button>
                                    <button class="action-btn compare-btn" data-product-id="<?php echo $product->get_id(); ?>">
                                        <i class="fas fa-balance-scale"></i>
                                        So sánh
                                    </button>
                                    <button class="action-btn share-btn">
                                        <i class="fas fa-share-alt"></i>
                                        Chia sẻ
                                    </button>
                                </div>

                                <!-- Social Share -->
                                <div class="social-share" id="socialShare" style="display: none;">
                                    <h5>Chia sẻ sản phẩm</h5>
                                    <div class="share-buttons">
                                        <a href="#" class="share-btn facebook" data-platform="facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="share-btn twitter" data-platform="twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="share-btn pinterest" data-platform="pinterest">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                        <a href="#" class="share-btn copy-link" data-platform="copy">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Shipping Info -->
                                <div class="shipping-info">
                                    <div class="shipping-item">
                                        <i class="fas fa-truck"></i>
                                        <span>Miễn phí vận chuyển cho đơn hàng trên 500.000đ</span>
                                    </div>
                                    <div class="shipping-item">
                                        <i class="fas fa-undo"></i>
                                        <span>7 ngày đổi trả miễn phí</span>
                                    </div>
                                    <div class="shipping-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <span>Bảo hành chính hãng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Related Products -->
            <section class="related-products-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="section-title">Sản phẩm liên quan</h3>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $related_products = wc_get_related_products($product->get_id(), 8);
                        if (!empty($related_products)) :
                            foreach ($related_products as $related_id) :
                                $related_product = wc_get_product($related_id);
                        ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product-card">
                                        <div class="product-image-wrapper">
                                            <a href="<?php echo get_permalink($related_id); ?>">
                                                <?php echo $related_product->get_image('woocommerce_thumbnail', array('class' => 'product-image')); ?>
                                            </a>
                                            <?php if ($related_product->is_on_sale()) : ?>
                                                <span class="sale-badge">
                                                    -<?php echo round((($related_product->get_regular_price() - $related_product->get_sale_price()) / $related_product->get_regular_price()) * 100); ?>%
                                                </span>
                                            <?php endif; ?>
                                            <div class="product-overlay">
                                                <button class="btn btn-quick-view" onclick="window.location.href='<?php echo get_permalink($related_id); ?>'">
                                                    <i class="fas fa-eye"></i>
                                                </button>

                                                <a href="<?php echo esc_url('?add-to-cart=' . $related_id); ?>" class="btn btn-add-to-cart-quick">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-name">
                                                <a href="<?php echo get_permalink($related_id); ?>"><?php echo $related_product->get_name(); ?></a>
                                            </h4>
                                            <div class="product-price">
                                                <?php echo $related_product->get_price_html(); ?>
                                            </div>
                                            <div class="product-rating">
                                                <?php echo wc_get_rating_html($related_product->get_average_rating()); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </section>

    <?php
        endwhile;
    else :
        echo '<div class="container"><div class="row"><div class="col-12 text-center py-5"><h2>Sản phẩm không tồn tại</h2></div></div></div>';
    endif;
    ?>
</main>


<?php
get_footer(); // Gọi footer
?>