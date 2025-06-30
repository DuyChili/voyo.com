<?php
/*
Template Name: Home 4
*/
get_header(); // Gọi header
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style4.css" />
<main>
    <section class="a">
        <div class="container text-center text-white">
            <div class="row large-padding">
                <div class="col-sm-12 text-center mb-5 mt-5">
                    <span class="py-3 px-4" style="border: 2px solid white; font-size: 50px;">CREATIVE <span
                            class="main-text text-success">AGENCY</span></span>
                </div>
                <div class="col-sm-12 text-center">
                    <p class="custom-bg-p mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo
                        tempore quia enim quod, perferendis <br> illum, quae id natus dolores temporibus, in qui? Quos
                        tempore illo, dolor illum est nesciunt amet.</p>
                    <p class="mb0">
                        <a href="#" class="btn btn-success p-3">PURCHASE</a>
                        &nbsp; <span class="uppercase" style="font-size: 20px;">OR</span> &nbsp;
                        <a href="#" class="btn btn-outline-success p-3">SEE FEATURES</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="b">
        <div class="container text-center " style="margin-top: 100px; margin-bottom: 100px;">
            <div id="b" class="row my-5">
                <div class="col-sm-4 border-right">
                    <div class="box-content">
                        <i class="bi bi-check-square p-4 circle-icon"></i>
                        <h3 class="my-4">MAINTAINABLE</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae rerum quaerat similique
                            cumque dolorum..</p>
                    </div>
                </div>
                <div class="col-sm-4 border-right">
                    <div class="box-content">
                        <i class="bi bi-gear-fill p-4  circle-icon"></i>
                        <h3 class="my-4">CUSTOMIZABLE</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae rerum quaerat similique
                            cumque dolorum.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box-content">
                        <i class="bi bi-send-fill p-4  circle-icon"></i>
                        <h3 class="my-4">KNOWLEDGEBASE</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae rerum quaerat similique
                            cumque dolorum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: rgb(64, 64, 64);">
        <div class="container text-white">
            <div class="row pt-5 pb-5">
                <div class="col-sm-6 col-12 mb-4 xs-box2">
                    <div class="d-flex  animated bounceIn  my-5" data-anim="bounceIn">
                        <div class="box-left me-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/browser.png" alt="service" class="img-fluid"
                                style="height: 70px; width: 100px;">
                        </div>
                        <div class="box-right">
                            <h3 class="h5 bt3 mb-3">Cross Browser</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim temporibus quae, aliquid!
                                Ipsam officiis obcaecati beatae!</p>
                        </div>
                    </div>

                    <div class="d-flex animated bounceIn" data-anim="bounceIn">
                        <div class="box-left me-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tablet.png" alt="service" class="img-fluid"
                                style="height: 70px; width: 100px;">
                        </div>
                        <div class="box-right">
                            <h3 class="h5 bt3 mb-3">Mobile Friendly</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim temporibus quae, aliquid!
                                Ipsam officiis obcaecati beatae!</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h3 class="h3 text-white mt-4">Our Skills</h3>

                    <div class="progress">
                        <div class="progress-bar progress-bar-animated bg-success" role="progressbar"
                            style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            <span class="text-start ms-4"><i class="bi bi-wordpress"></i> Wordpress 85%</span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-animated bg-success" role="progressbar"
                            style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            <span class="text-start ms-4"><i class="fa fa-drupal"></i> Drupal 70%</span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-animated bg-success" role="progressbar"
                            style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <span class="text-start ms-4"><i class="bi bi-filetype-html"></i> HTML 100%</span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-animated bg-success" role="progressbar"
                            style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            <span class="text-start ms-4"><i class="bi bi-joystick"></i> Joomla 60%</span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-animated bg-success" role="progressbar"
                            style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <span class="text-start ms-4"><i class="bi bi-joystick"></i> CSS3 100%</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="image">
        <div class="container-fuild">
            <div class="row g-0">
                <div class="col-6 col-md-3">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-225.jpg" class="img-fluid" alt="Image 1">
                        <div class="overlay">
                            <i class="bi bi-search"></i> <!-- Tìm kiếm -->
                            <i class="bi bi-download"></i> <!-- Tải xuống -->
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-223.jpg" class="img-fluid" alt="Image 2">
                        <div class="overlay">
                            <i class="bi bi-search"></i>
                            <i class="bi bi-download"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-224.jpg" class="img-fluid" alt="Image 3">
                        <div class="overlay">
                            <i class="bi bi-search"></i>
                            <i class="bi bi-download"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-222.jpg" class="img-fluid" alt="Image 4">
                        <div class="overlay">
                            <i class="bi bi-search"></i>
                            <i class="bi bi-download"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-217.jpg" class="img-fluid" alt="Image 5">
                        <div class="overlay">
                            <i class="bi bi-search"></i>
                            <i class="bi bi-download"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-218.jpg" class="img-fluid" alt="Image 6">
                        <div class="overlay">
                            <i class="bi bi-search"></i>
                            <i class="bi bi-download"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-219.jpg" class="img-fluid" alt="Image 7">
                        <div class="overlay">
                            <i class="bi bi-search"></i>
                            <i class="bi bi-download"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-220.jpg" class="img-fluid" alt="Image 8">
                        <div class="overlay">
                            <i class="bi bi-search"></i>
                            <i class="bi bi-download"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="c">
        <div class="container p-5 text-white text-center">
            <h2 class="section-title mt-2 mb-5">If you like what we have done, it is worth to see more!</h2>
            <a href="#" class="text-decoration-none p-2 mb-3">SEE MORE PROJECTS</a>
        </div>
    </section>

    <section class="large-padding custom-bg custom-bg2 bg-right parallax">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 m-5">
                    <h2 class="section-title st2 text-left mb25 color-default my-4">Responsive Design</h2>
                    <p class="mb25 color-default my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta
                        quae aliquid quod excepturi, est, nulla animi, saepe asperiores dolorem odit adipisci.</p>
                    <p class="color-default my-4"><i class="bi bi-check-square"></i> &nbsp; Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.</p>
                    <p class="color-default my-4"><i class="bi bi-database-fill"></i> &nbsp; Odit voluptatibus quos,
                        repellendus consequatur.</p>
                    <p class="color-default my-4"><i class="bi bi-pencil-square"></i> &nbsp; Iusto quo excepturi
                        officiis eveniet deserunt.</p>
                    <p class="color-default my-4"><i class="bi bi-graph-up-arrow"></i> &nbsp; Ipsam nulla hic maxime
                        voluptates accusamus illum alias.</p>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: rgb(64, 64, 64);">
        <div class="container text-center text-white py-5">
            <div class="row py-3">
                <div class="col-sm-12 ">
                    <h2 class="section-title st2 mb25">Latest blog Posts</h2>
                    <div class="text-center">
                        <p class="mb0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi a commodi quae
                            modi beatae quo tempore consectetur ullam amet, error assumenda voluptatibus praesentium
                            eaque minus ad laudantium perspiciatis suscipit, nam fuga labore ut quaerat distinctio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <div class="blog-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-225.jpg" alt="blog post" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body p-4">
                            <h3 class="post-title">About Magento</h3>
                            <div class="sub-post-title my-3">
                                <span class="date text-success">12 June 2014</span>
                                <span class="author text-success">
                                    <i class="ps-4 bi bi-person-fill text-success"></i>
                                    <a class="text-decoration-none text-success" href="#">by John Doe</a>
                                </span>
                            </div>
                            <p style="font-size: 20px;" class="my-5">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Veritatis, ipsum, optio.</p>
                            <a href="blog_single_left.html" class="read-more text-decoration-none text-success ">Read
                                More <i class="ps-2 bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <div class="blog-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-224.jpg" alt="blog post" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body p-4">
                            <h3 class="post-title">About Wordpress</h3>
                            <div class="sub-post-title my-3">
                                <span class="date text-success">12 June 2014</span>
                                <span class="author text-success">
                                    <i class="ps-4 bi bi-person-fill text-success"></i>
                                    <a class="text-decoration-none text-success" href="#">by John Doe</a>
                                </span>
                            </div>
                            <p style="font-size: 20px;" class="my-5">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Veritatis, ipsum, optio.</p>
                            <a href="blog_single_left.html" class="read-more text-decoration-none text-success ">Read
                                More
                                <i class="ps-2 bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <div class="blog-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-204.jpg" alt="blog post" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body p-4">
                            <h3 class="post-title">About Drupal</h3>
                            <div class="sub-post-title my-3">
                                <span class="date text-success">12 June 2014</span>
                                <span class="author text-success">
                                    <i class="ps-4 bi bi-person-fill text-success"></i>
                                    <a class="text-decoration-none text-success" href="#">by John Doe</a>
                                </span>
                            </div>
                            <p style="font-size: 20px;" class="my-5">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                                Veritatis, ipsum, optio.</p>
                            <a href="blog_single_left.html" class="read-more text-decoration-none text-success ">Read
                                More <i class="ps-2 bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <div class="blog-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-203.jpg" alt="blog post" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body p-4">
                            <h3 class="post-title">About Joomla</h3>
                            <div class="sub-post-title my-3">
                                <span class="date text-success">12 June 2014</span>
                                <span class="author text-success">
                                    <i class="ps-4 bi bi-person-fill text-success"></i>
                                    <a class="text-decoration-none text-success" href="#">by John Doe</a>
                                </span>
                            </div>
                            <p style="font-size: 20px;" class="my-5">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                                Veritatis, ipsum, optio.</p>
                            <a href="blog_single_left.html" class="read-more text-decoration-none text-success ">Read
                                More <i class="ps-2 bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="divider d-flex align-items-center mt-0 mb-3">
                        <hr class="flex-grow-1">
                        <span class="mx-2"><i class="bi bi-three-dots"></i></span>
                        <hr class="flex-grow-1">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container pt-4 pb-5 text-dark">
            <div class="row mt-2 page-services mb-4">
                <div class="col-sm-4 col-md-3 sm-box">
                    <ul class="nav nav-pills flex-column">
                        <li id="nav" class="nav-item">
                            <a class="nav-link py-2 mb-2 text-dark active" id="tab1-tab" data-bs-toggle="pill"
                                href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Responsive Design</a>
                        </li>
                        <li id="nav" class="nav-item">
                            <a class="nav-link py-2 mb-2 text-dark " id="tab2-tab" data-bs-toggle="pill" href="#tab2"
                                role="tab" aria-controls="tab2" aria-selected="false">Clean Code</a>
                        </li>
                        <li id="nav" class="nav-item">
                            <a class="nav-link py-2 mb-2 text-dark" id="tab3-tab" data-bs-toggle="pill" href="#tab3"
                                role="tab" aria-controls="tab3" aria-selected="false">Do it yourself</a>
                        </li>
                        <li id="nav" class="nav-item">
                            <a class="nav-link text-dark" id="tab4-tab" data-bs-toggle="pill" href="#tab4" role="tab"
                                aria-controls="tab4" aria-selected="false">Customizable</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-8 col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                            <h3 class="box-title mt-0 mb-3">Dark Section Style</h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, distinctio
                                omnis dolorum nostrum alias nulla placeat id sit debitis molestiae neque tenetur
                                consequatur in unde aliquam optio quasi beatae veritatis rem delectus eveniet!</p>
                            <p class="mb-4"><i class="bi bi-cloud-arrow-down-fill text-white bg-success px-3 py-2"
                                    style="border-radius: 6px; font-size: 20px;"></i> &nbsp; Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit facere, distinctio. </p>
                            <p class="mb-0"><i class="bi bi-cloud-fill text-white bg-success px-3 py-2"
                                    style="border-radius: 6px; font-size: 20px;"></i> &nbsp; Omnis dolorum nostrum alias
                                nulla placeat id sit debitis molestiae neque</p>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <h3 class="box-title mt-0 mb-4">Followed the best practices</h3>
                            <p><i class="bi bi-filetype-html text-success"></i> &nbsp; Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit facere, distinctio. </p>
                            <p><i class="bi bi-wordpress text-success"></i> &nbsp; Omnis dolorum nostrum alias nulla
                                placeat id sit debitis molestiae neque</p>
                            <p class="mb-0 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi velit,
                                suscipit tempore. Blanditiis adipisci, porro labore quae cum sunt neque. Ut voluptate
                                incidunt eaque non sapiente!</p>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <h3 class="box-title mt-0 mb-4">Create your home page by yourself</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, distinctio omnis
                                dolorum nostrum alias nulla placeat id sit debitis molestiae neque tenetur consequatur
                                in unde aliquam.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio sunt obcaecati deleniti ut
                                non adipisci cupiditate, perspiciatis quibusdam voluptatum.</p>
                        </div>
                        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                            <h3 class="box-title mt-0 mb-4">Customize whatever you want</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, distinctio omnis
                                dolorum nostrum alias nulla placeat id sit debitis molestiae neque tenetur consequatur
                                in unde aliquam optio quasi beatae veritatis rem delectus eveniet! Aliquid, minima,
                                natus, odit cumque consequuntur ratione eligendi est pariatur maiores recusandae
                                asperiores tenetur optio id cum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_content();
    }
}
?>
  <script>
        // Lắng nghe sự kiện cuộn trang
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');

            // Kiểm tra vị trí cuộn trang
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled'); // Thêm class 'scrolled' khi cuộn
            } else {
                navbar.classList.remove('scrolled'); // Xóa class 'scrolled' khi chưa cuộn
            }
        });

    </script>
<?php
get_footer(); // Gọi footer
?>