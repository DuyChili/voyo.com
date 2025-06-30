<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <!-- Menu, logo -->
        <section>
            <nav class="navbar navbar-expand-sm navbar-white bg-white fixed-top pt-5" id="section2">
                <div class="container">
                    <a class="navbar-brand m-3" href="<?php echo esc_url(home_url('/')); ?>">
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            // Hiển thị tên trang web nếu chưa có logo
                            bloginfo('name');
                        }
                        ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                            'container' => false,
                            'menu_class' => 'navbar-nav ms-auto',
                            'fallback_cb' => false,
                            'walker' => new Custom_Nav_Walker(), // Sử dụng custom walker để xử lý dropdown.
                        ));
                        ?>

                        <div class="d-flex ms-lg-3 mt-2 mt-sm-0">
                            <form class="d-flex" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                <input class="form-control me-2" type="search" name="s" placeholder="Tìm bài viết..." aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Tìm</button>
                            </form>
                        </div>

                    </div>



                </div>
            </nav>
        </section>
    </header>