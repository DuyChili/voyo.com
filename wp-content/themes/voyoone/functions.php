<?php

add_filter('template_include', 'force_single_product_template', 50);

function force_single_product_template($template)
{
    if (is_singular('product')) {
        $custom_template = get_stylesheet_directory() . '/woocommerce/single-product.php';
        if (file_exists($custom_template)) {
            return $custom_template;
        }
    }
    return $template;
}


// menu header
function register_my_menus()
{
    register_nav_menus(
        array(
            'main_menu' => __('Main Menu'),
        )
    );
}
add_action('init', 'register_my_menus');
require_once get_template_directory() . '/class-custom-nav-walker.php';

add_theme_support('title-tag');

add_theme_support('post-thumbnails');


function theme_enqueue_scripts()
{
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);

    wp_localize_script('theme-script', 'themeData', array(
        'templateUrl' => get_template_directory_uri(),
    ));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');



function theme_setup()
{
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'theme_setup');



function add_cart_icon_with_sidebar()
{
?>
    <!-- HTML cho biểu tượng giỏ hàng -->
    <div id="cart-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopping-cart.png" alt="Cart Icon" />
        <span id="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    </div>

    <!-- Overlay để đóng sidebar khi click bên ngoài -->
    <div id="cart-overlay"></div>

    <!-- HTML cho Sidebar giỏ hàng -->
    <div id="cart-sidebar">
        <div class="cart-header">
            <h3><i class="fas fa-shopping-cart"></i> Giỏ Hàng</h3>
            <button id="close-cart-sidebar">&times;</button>
        </div>

        <div class="cart-content">
            <?php
            if (WC()->cart->is_empty()) {
                echo '<div class="empty-cart">
                        <i class="fas fa-shopping-cart empty-icon"></i>
                        <p>Giỏ hàng của bạn đang trống</p>
                        <a href="' . get_permalink(wc_get_page_id('shop')) . '" class="btn btn-shop">Tiếp tục mua sắm</a>
                      </div>';
            } else {
                foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                    $product = $cart_item['data'];
                    $product_id = $product->get_id();
                    $product_name = $product->get_name();
                    $product_price = wc_price($product->get_price());
                    $product_quantity = $cart_item['quantity'];
                    $product_total = wc_price($cart_item['line_total']);
                    $product_image = $product->get_image('thumbnail');
                    $product_permalink = get_permalink($product_id);
                    $max_quantity = $product->get_stock_quantity() ? $product->get_stock_quantity() : 99;
            ?>
                    <div class="cart-item" data-cart-key="<?php echo esc_attr($cart_item_key); ?>">
                        <div class="cart-item-image">
                            <a href="<?php echo esc_url($product_permalink); ?>">
                                <?php echo $product_image; ?>
                            </a>
                        </div>

                        <div class="cart-item-details">
                            <h4><a href="<?php echo esc_url($product_permalink); ?>"><?php echo esc_html($product_name); ?></a></h4>
                            <div class="price-info">
                                <span class="unit-price"><?php echo $product_price; ?></span>
                                <span class="total-price"><?php echo $product_total; ?></span>
                            </div>

                            <div class="quantity-controls">
                                <button class="qty-btn minus" data-action="decrease">-</button>
                                <input type="number" class="qty-input" value="<?php echo $product_quantity; ?>"
                                    min="1" max="<?php echo $max_quantity; ?>" data-product-id="<?php echo $product_id; ?>">
                                <button class="qty-btn plus" data-action="increase">+</button>
                            </div>
                        </div>

                        <button class="remove-item" data-cart-key="<?php echo esc_attr($cart_item_key); ?>" title="Xóa sản phẩm">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                <?php
                }

                // Hiển thị tổng giá trị giỏ hàng
                ?>
                <div class="cart-summary">
                    <div class="subtotal">
                        <span>Tạm tính:</span>
                        <span class="subtotal-amount"><?php echo WC()->cart->get_cart_subtotal(); ?></span>
                    </div>
                    <?php if (WC()->cart->get_shipping_total() > 0): ?>
                        <div class="shipping">
                            <span>Phí vận chuyển:</span>
                            <span class="shipping-amount"><?php echo wc_price(WC()->cart->get_shipping_total()); ?></span>
                        </div>
                    <?php endif; ?>
                    <div class="total">
                        <span>Tổng cộng:</span>
                        <span class="total-amount"><?php echo WC()->cart->get_total(); ?></span>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <?php if (!WC()->cart->is_empty()): ?>
            <div class="cart-footer">
                <a href="<?php echo wc_get_cart_url(); ?>" class="btn btn-primary">
                    <i class="fas fa-shopping-cart"></i> Xem Giỏ Hàng
                </a>
                <a href="<?php echo wc_get_checkout_url(); ?>" class="btn btn-success">
                    <i class="fas fa-credit-card"></i> Thanh Toán
                </a>
            </div>
        <?php endif; ?>
    </div>

    <!-- CSS -->
    <style>
        /* Font Awesome Icons */
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');

        /* Biểu tượng giỏ hàng */
        #cart-icon {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #ff6b6b, #ff5722);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 8px 25px rgba(255, 87, 34, 0.3);
            cursor: pointer;
            z-index: 1000;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            animation: pulse 2s infinite;
        }

        #cart-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 12px 35px rgba(255, 87, 34, 0.4);
        }

        #cart-icon img {
            width: 24px;
            height: 24px;
            filter: brightness(0) invert(1);
        }

        #cart-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #e74c3c;
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
            border: 2px solid white;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 87, 34, 0.4);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(255, 87, 34, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 87, 34, 0);
            }
        }

        /* Overlay */
        #cart-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            visibility: hidden;
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 1500;
        }

        #cart-overlay.active {
            visibility: visible;
            opacity: 1;
        }

        /* Sidebar giỏ hàng */
        #cart-sidebar {
            position: fixed;
            top: 0;
            right: -100%;
            width: 400px;
            height: 100vh;
            background: #ffffff;
            box-shadow: -5px 0 25px rgba(0, 0, 0, 0.15);
            transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 2000;
            display: flex;
            flex-direction: column;
        }

        #cart-sidebar.active {
            right: 0;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 25px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .cart-header h3 {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
        }

        .cart-header h3 i {
            margin-right: 10px;
        }

        .cart-header button {
            background: none;
            border: none;
            font-size: 28px;
            color: #fff;
            cursor: pointer;
            padding: 5px;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .cart-header button:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(90deg);
        }

        .cart-content {
            flex-grow: 1;
            overflow-y: auto;
            padding: 0;
        }

        .empty-cart {
            text-align: center;
            padding: 60px 30px;
            color: #666;
        }

        .empty-icon {
            font-size: 80px;
            color: #ddd;
            margin-bottom: 20px;
        }

        .empty-cart p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn-shop {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-shop:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .cart-item {
            display: flex;
            align-items: flex-start;
            padding: 20px 25px;
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.3s ease;
            position: relative;
        }

        .cart-item:hover {
            background: #f8f9ff;
        }

        .cart-item-image {
            flex-shrink: 0;
            margin-right: 15px;
        }

        .cart-item-image img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .cart-item-details {
            flex-grow: 1;
        }

        .cart-item-details h4 {
            margin: 0 0 10px 0;
            font-size: 16px;
            line-height: 1.4;
        }

        .cart-item-details h4 a {
            color: #333;
            text-decoration: none;
            font-weight: 600;
        }

        .cart-item-details h4 a:hover {
            color: #667eea;
        }

        .price-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .unit-price {
            color: #666;
            font-size: 14px;
        }

        .total-price {
            font-weight: 700;
            color: #e74c3c;
            font-size: 16px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 0;
            background: #f8f9fa;
            border-radius: 25px;
            padding: 2px;
            width: fit-content;
        }

        .qty-btn {
            background: #667eea;
            border: none;
            color: white;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .qty-btn:hover {
            background: #5a67d8;
            transform: scale(1.1);
        }

        .qty-input {
            width: 50px;
            text-align: center;
            border: none;
            background: transparent;
            font-size: 16px;
            font-weight: 600;
            padding: 8px 5px;
        }

        .remove-item {
            position: absolute;
            top: 15px;
            right: 20px;
            background: #ff6b6b;
            border: none;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            opacity: 0.7;
        }

        .remove-item:hover {
            background: #e74c3c;
            opacity: 1;
            transform: scale(1.1);
        }

        .cart-summary {
            padding: 20px 25px;
            background: #f8f9ff;
            border-top: 1px solid #e9ecef;
        }

        .cart-summary>div {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
        }

        .subtotal,
        .shipping {
            font-size: 14px;
            color: #666;
        }

        .total {
            font-size: 18px;
            font-weight: 700;
            color: #333;
            border-top: 2px solid #667eea;
            padding-top: 12px !important;
            margin-top: 10px;
        }

        .cart-footer {
            padding: 25px;
            background: white;
            border-top: 1px solid #e9ecef;
            display: flex;
            gap: 15px;
        }

        .cart-footer .btn {
            flex: 1;
            padding: 15px 20px;
            border-radius: 8px;
            text-decoration: none;
            text-align: center;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: 2px solid transparent;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-success {
            background: linear-gradient(135deg, #56ab2f 0%, #a8e6cf 100%);
            color: white;
        }

        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(86, 171, 47, 0.4);
        }

        /* Responsive */
        @media (max-width: 480px) {
            #cart-sidebar {
                width: 100%;
                right: -100%;
            }

            .cart-item-image img {
                width: 60px;
                height: 60px;
            }

            .cart-footer {
                flex-direction: column;
            }
        }

        /* Loading animation */
        .loading {
            opacity: 0.6;
            pointer-events: none;
        }

        /* Smooth scrollbar */
        .cart-content::-webkit-scrollbar {
            width: 6px;
        }

        .cart-content::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .cart-content::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }

        .cart-content::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
    </style>



    <!-- JavaScript -->
       <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cartIcon = document.getElementById('cart-icon');
            const cartSidebar = document.getElementById('cart-sidebar');
            const closeCartSidebar = document.getElementById('close-cart-sidebar');
            const cartOverlay = document.getElementById('cart-overlay');

            // Mở Sidebar
            if (cartIcon) {
                cartIcon.addEventListener('click', function() {
                    cartSidebar.classList.add('active');
                    cartOverlay.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            }

            // Đóng Sidebar
            function closeSidebar() {
                cartSidebar.classList.remove('active');
                cartOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }

            if (closeCartSidebar) {
                closeCartSidebar.addEventListener('click', closeSidebar);
            }
            
            if (cartOverlay) {
                cartOverlay.addEventListener('click', closeSidebar);
            }

            // Xử lý thay đổi số lượng
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('qty-btn')) {
                    e.preventDefault();
                    const cartItem = e.target.closest('.cart-item');
                    const qtyInput = cartItem.querySelector('.qty-input');
                    const action = e.target.getAttribute('data-action');
                    const cartKey = cartItem.getAttribute('data-cart-key');

                    let currentQty = parseInt(qtyInput.value);
                    let newQty = currentQty;

                    if (action === 'increase') {
                        newQty = currentQty + 1;
                    } else if (action === 'decrease' && currentQty > 1) {
                        newQty = currentQty - 1;
                    }

                    if (newQty !== currentQty && newQty > 0) {
                        qtyInput.value = newQty;
                        updateCartQuantity(cartKey, newQty, cartItem);
                    }
                }
            });

            // Xử lý thay đổi số lượng từ input
            document.addEventListener('change', function(e) {
                if (e.target.classList.contains('qty-input')) {
                    const cartItem = e.target.closest('.cart-item');
                    const cartKey = cartItem.getAttribute('data-cart-key');
                    const newQty = parseInt(e.target.value);

                    if (newQty > 0) {
                        updateCartQuantity(cartKey, newQty, cartItem);
                    } else {
                        e.target.value = 1;
                    }
                }
            });

            // Xử lý xóa sản phẩm
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-item') || e.target.closest('.remove-item')) {
                    e.preventDefault();
                    const button = e.target.classList.contains('remove-item') ? e.target : e.target.closest('.remove-item');
                    const cartKey = button.getAttribute('data-cart-key');
                    const cartItem = button.closest('.cart-item');

                    if (cartKey && confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')) {
                        removeCartItem(cartKey, cartItem);
                    }
                }
            });

            // Function cập nhật số lượng
            function updateCartQuantity(cartKey, quantity, cartItem) {
                if (!cartKey || !quantity || quantity <= 0) {
                    console.error('Invalid parameters for updateCartQuantity');
                    return;
                }

                cartItem.classList.add('loading');

                const formData = new FormData();
                formData.append('action', 'update_cart_quantity');
                formData.append('cart_key', cartKey);
                formData.append('quantity', quantity);
                formData.append('nonce', '<?php echo wp_create_nonce("update_cart_nonce"); ?>');

                fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Update response:', data);
                        if (data.success) {
                            // Cập nhật UI ngay lập tức
                            const totalPriceElement = cartItem.querySelector('.total-price');
                            if (totalPriceElement && data.data.line_total) {
                                totalPriceElement.innerHTML = data.data.line_total;
                            }
                            
                            // Cập nhật số lượng trong icon
                            const cartCountElement = document.getElementById('cart-count');
                            if (cartCountElement && data.data.cart_count !== undefined) {
                                cartCountElement.textContent = data.data.cart_count;
                            }

                            // Cập nhật tổng giỏ hàng
                            updateCartSummary();
                        } else {
                            alert(data.data && data.data.message ? data.data.message : 'Có lỗi xảy ra khi cập nhật số lượng.');
                            // Khôi phục số lượng cũ nếu có lỗi
                            const qtyInput = cartItem.querySelector('.qty-input');
                            if (qtyInput) {
                                qtyInput.value = quantity - 1; // Rollback
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Có lỗi xảy ra khi cập nhật số lượng.');
                    })
                    .finally(() => {
                        cartItem.classList.remove('loading');
                    });
            }

            // Function xóa sản phẩm
            function removeCartItem(cartKey, cartItem) {
                if (!cartKey) {
                    console.error('Invalid cart_key for removeCartItem');
                    return;
                }

                cartItem.classList.add('loading');

                const formData = new FormData();
                formData.append('action', 'remove_cart_item');
                formData.append('cart_key', cartKey);
                formData.append('nonce', '<?php echo wp_create_nonce("remove_cart_nonce"); ?>');

                fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Remove response:', data);
                        if (data.success) {
                            // Xóa item khỏi UI
                            cartItem.style.transition = 'opacity 0.3s ease';
                            cartItem.style.opacity = '0';
                            
                            setTimeout(() => {
                                cartItem.remove();
                                
                                // Cập nhật số lượng trong icon
                                const cartCountElement = document.getElementById('cart-count');
                                if (cartCountElement && data.data.cart_count !== undefined) {
                                    cartCountElement.textContent = data.data.cart_count;
                                }

                                // Kiểm tra nếu giỏ hàng trống
                                const remainingItems = document.querySelectorAll('.cart-item');
                                if (remainingItems.length === 0) {
                                    location.reload(); // Reload để hiển thị empty cart
                                } else {
                                    updateCartSummary();
                                }
                            }, 300);
                        } else {
                            alert(data.data && data.data.message ? data.data.message : 'Có lỗi xảy ra khi xóa sản phẩm.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Có lỗi xảy ra khi xóa sản phẩm.');
                    })
                    .finally(() => {
                        cartItem.classList.remove('loading');
                    });
            }

            // Function cập nhật tổng giỏ hàng
            function updateCartSummary() {
                const formData = new FormData();
                formData.append('action', 'get_cart_totals');
                formData.append('nonce', '<?php echo wp_create_nonce("cart_totals_nonce"); ?>');

                fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Cập nhật các tổng tiền
                            const subtotalElement = document.querySelector('.subtotal-amount');
                            const totalElement = document.querySelector('.total-amount');
                            
                            if (subtotalElement && data.data.subtotal) {
                                subtotalElement.innerHTML = data.data.subtotal;
                            }
                            
                            if (totalElement && data.data.total) {
                                totalElement.innerHTML = data.data.total;
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Error updating cart summary:', error);
                    });
            }
        });
    </script>
<?php
}

// AJAX handler cho cập nhật số lượng
function handle_update_cart_quantity()
{
    // Kiểm tra nonce và dữ liệu
    if (
        !isset($_POST['nonce'], $_POST['cart_key'], $_POST['quantity']) ||
        !wp_verify_nonce($_POST['nonce'], 'update_cart_nonce')
    ) {
        wp_send_json_error(array('message' => 'Invalid request.'));
        return;
    }

    $cart_key = sanitize_text_field($_POST['cart_key']);
    $quantity = intval($_POST['quantity']);

    if ($quantity <= 0) {
        wp_send_json_error(array('message' => 'Số lượng không hợp lệ.'));
        return;
    }

    // Kiểm tra cart key có tồn tại không
    $cart = WC()->cart->get_cart();
    if (!isset($cart[$cart_key])) {
        wp_send_json_error(array('message' => 'Sản phẩm không tồn tại trong giỏ hàng.'));
        return;
    }

    // Cập nhật số lượng
    $result = WC()->cart->set_quantity($cart_key, $quantity, true);
    
    if ($result) {
        WC()->cart->calculate_totals();
        
        // Lấy thông tin sản phẩm sau khi cập nhật
        $updated_cart = WC()->cart->get_cart();
        $line_total = '';
        
        if (isset($updated_cart[$cart_key])) {
            $line_total = wc_price($updated_cart[$cart_key]['line_total']);
        }

        wp_send_json_success(array(
            'message' => 'Đã cập nhật số lượng sản phẩm',
            'cart_count' => WC()->cart->get_cart_contents_count(),
            'cart_total' => WC()->cart->get_total(),
            'line_total' => $line_total,
        ));
    } else {
        wp_send_json_error(array('message' => 'Không thể cập nhật số lượng sản phẩm.'));
    }
}

// AJAX handler cho xóa sản phẩm
function handle_remove_cart_item()
{
    if (
        !isset($_POST['nonce'], $_POST['cart_key']) ||
        !wp_verify_nonce($_POST['nonce'], 'remove_cart_nonce')
    ) {
        wp_send_json_error(array('message' => 'Invalid request.'));
        return;
    }

    $cart_key = sanitize_text_field($_POST['cart_key']);

    if (WC()->cart->remove_cart_item($cart_key)) {
        WC()->cart->calculate_totals();
        wp_send_json_success(array(
            'message' => 'Đã xóa sản phẩm khỏi giỏ hàng',
            'cart_count' => WC()->cart->get_cart_contents_count(),
            'cart_total' => WC()->cart->get_total(),
        ));
    } else {
        wp_send_json_error(array('message' => 'Không thể xóa sản phẩm.'));
    }
}


// Đăng ký các action hooks
add_action('wp_footer', 'add_cart_icon_with_sidebar');
add_action('wp_ajax_update_cart_quantity', 'handle_update_cart_quantity');
add_action('wp_ajax_nopriv_update_cart_quantity', 'handle_update_cart_quantity');
add_action('wp_ajax_remove_cart_item', 'handle_remove_cart_item');
add_action('wp_ajax_nopriv_remove_cart_item', 'handle_remove_cart_item');





?>