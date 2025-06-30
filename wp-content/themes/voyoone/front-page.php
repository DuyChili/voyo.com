<?php
/*
Template Name: Home Page
*/
get_header(); // Gọi header


?>
<main>
    <section>
        <p style="width: 100%; padding: 2px; background-color: rgb(0, 59, 20);"></p>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s-303.jpg" alt="#" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s-201-a.jpg" alt="#" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s-201-a.jpg" alt="#" class="d-block w-100">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <section class="c">
        <div class="container p-5">
            <div class="row mt-3">
                <div class="col-lg-4 mb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="icon text-center p-2">
                                <i style="font-size: 40px;" class="bi bi-cloud-arrow-down-fill"></i>
                            </div>
                        </div>
                        <div class="col-9">
                            <h4 class="box-title-2">Free Updates</h4>
                            <p class="alhpa">Lorem ipsum dolor sit amet, consect adipisicing elit lorem ipsum!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="icon text-center p-2">
                                <i style="font-size: 40px;" class="bi bi-journal-text"></i>
                            </div>
                        </div>
                        <div class="col-9">
                            <h4 class="box-title-2">Detailed Documentation</h4>
                            <p class="alhpa">Lorem ipsum dolor sit amet, consect adipisicing elit lorem ipsum!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-3">
                            <div class="icon text-center p-2">
                                <i style="font-size: 40px;" class="bi bi-chat-dots-fill"></i>
                            </div>
                        </div>
                        <div class="col-9">
                            <h4 class="box-title-2">Friendly Support</h4>
                            <p class="alhpa">Lorem ipsum dolor sit amet, consect adipisicing elit lorem ipsum!</p>
                        </div>
                    </div>
                </div>
            </div>
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

    <section class="section-3">
        <div id="section-3" class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <div class="row justify-content-center text-center p-4">
                        <div class="col-6 col-md-6 p-3">
                            <div id="c-1" class="client">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-201.png" class="img-fluid fade-image"
                                    alt="Client Logo 1" id="img-1">
                            </div>
                        </div>
                        <div class="col-6 col-md-6 p-3">
                            <div id="c-2" class="client">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-204.png" class="img-fluid fade-image"
                                    alt="Client Logo 2" id="img-2">
                            </div>
                        </div>
                        <div class="col-6 col-md-6 p-3">
                            <div id="c-3" class="client">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-201.png" class="img-fluid fade-image"
                                    alt="Client Logo 3" id="img-3">
                            </div>
                        </div>
                        <div class="col-6 col-md-6 p-3 d-none d-md-block">
                            <div id="c-4" class="client">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-206.png" class="img-fluid fade-image"
                                    alt="Client Logo 4" id="img-4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 bg-white ms-auto  rounded-left"
                    style="border-top-left-radius:20% ; border-bottom-left-radius: 20%;  background-color: rgba(255, 255, 255, 0.9) !important; padding: 120px; ">
                    <h2 class="section-title text-left mb-4 color-dark">About <span class="main-text">us</span></h2>
                    <p class="color-default mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex
                        assumenda, alias, earum vel molestias quia. Vitae ullam, modi ex dolorum! Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit. Aut aspernatur laborum consectetur isas.</p>
                    <h3 class="box-title color-dark mb-4">Satisfied Customers</h3>
                    <p class="color-default mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum
                        ipsum, cumque! Voluptas omnis voluptatem, natus. Vero dolores laboriosam explicabo, iusto.</p>
                    <a href="#" class="read-more text-decoration-none text-success ">Read More <i
                            class="ps-2 bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container p-5">
            <div class="row my-5">
                <div class="col-sm-5">
                    <h2 class="section-title st2 mb-5 color-default text-left">Featured projects</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laborum pariatur, iusto eveniet
                        deleniti, optio voluptas quae fugiat earum sit ratione natus. Magni nulla accusantium!</p>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="box-title mb-5"><i
                                    class="bi bi-cloud-download-fill bg-danger px-2 py-1 text-white "
                                    style="border-radius: 8px; "></i> &nbsp; Every project</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maiores repudiandae,
                                accusantium reiciendis commodi!</p>
                        </div>
                        <div class="col-sm-6">
                            <h3 class="box-title mb-5"><i
                                    class="bi bi-cloud-upload-fill  bg-danger px-2 py-1 text-white"
                                    style="border-radius: 8px;"></i> &nbsp; is Featured</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maiores repudiandae,
                                accusantium reiciendis commodi!</p>
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

    <section>
        <div class="container-fuild p-5" style="background-color: rgb(243, 243, 243);">
            <div class="row p-5">
                <div class="col-sm-6 col-md-6">
                    <div class="row">
                        <div class="col-sm-3 text-end mt-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/browser.png" alt="">
                        </div>
                        <div class="col-sm-9 mt-5">
                            <div class="box-right">
                                <h3 class="box-title bt3">Cross Browser</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim temporibus quae,
                                    aliquid! Ipsam officiis obcaecati beatae!</p>
                            </div>
                        </div>

                        <div class="col-sm-3 text-end mt-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tablet.png" alt="">
                        </div>
                        <div class="col-sm-9 mt-5">
                            <div class="box-right">
                                <h3 class="box-title bt3">Mobile Friendly</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim temporibus quae,
                                    aliquid! Ipsam officiis obcaecati beatae!</p>
                            </div>
                        </div>
                        <div class="col-sm-3 text-end mt-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brightness.png" alt="">
                        </div>
                        <div class="col-sm-9 mt-5">
                            <div class="box-right">
                                <h3 class="box-title bt3">Top notch Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim temporibus quae,
                                    aliquid! Ipsam officiis obcaecati beatae!</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="row">
                        <div class="col-sm-12 mt-5">
                            <h3 class="box-title mb-4">Why should you choose us?</h3>
                            <p style="width: 80%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam
                                doloremque, aperiam nemo doloribus laboriosam non officiis obcaecati beatae dolorum.</p>
                        </div>
                        <div class="col-sm-12 col-md-6 " style="width: 45%;">
                            <div class="feature-list d-flex align-items-center mt-4 " style="height: 30px;">
                                <i class="bi bi-check" style="font-size: 30px; color: rgb(6, 97, 97);"></i>
                                <p class="mb-0 d-flex align-items-center" style="margin-left: 10px;">Tons of elements
                                </p>
                            </div>
                            <div class="feature-list d-flex align-items-center my-2 " style="height: 30px;">
                                <i class="bi bi-check" style="font-size: 30px; color: rgb(6, 97, 97);"></i>
                                <p class="mb-0 d-flex align-items-center" style="margin-left: 10px;">Unlimited Colors
                                </p>
                            </div>
                            <div class="feature-list d-flex align-items-center my-2 " style="height: 30px;">
                                <i class="bi bi-check" style="font-size: 30px; color: rgb(6, 97, 97);"></i>
                                <p class="mb-0 d-flex align-items-center" style="margin-left: 10px;">Fiendly Support</p>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="feature-list d-flex align-items-center mt-4 " style="height: 30px;">
                                <i class="bi bi-check" style="font-size: 30px; color: rgb(6, 97, 97);"></i>
                                <p class="mb-0 d-flex align-items-center" style="margin-left: 10px;">Boxed / Wide Layout
                                </p>
                            </div>
                            <div class="feature-list d-flex align-items-center my-2 " style="height: 30px;">
                                <i class="bi bi-check" style="font-size: 30px; color: rgb(6, 97, 97);"></i>
                                <p class="mb-0 d-flex align-items-center" style="margin-left: 10px;">Detailed
                                    Documentation</p>
                            </div>
                            <div class="feature-list d-flex align-items-center my-2 " style="height: 30px;">
                                <i class="bi bi-check" style="font-size: 30px; color: rgb(6, 97, 97);"></i>
                                <p class="mb-0 d-flex align-items-center" style="margin-left: 10px;">Free Updates</p>
                            </div>

                        </div>
                        <div class="col-sm-12 mt-5">
                            <div class="alert alert-2 alert-dismissable bg-danger d-flex align-items-center"
                                style="width: 80%;">
                                <i class="bi bi-cloud-upload-fill text-white me-4" style="font-size: 30px;"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae
                                    molestiae facere suscipit harum quae ab ipsum.</p>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d">
        <div class="container text-center " style="margin-top: 100px; margin-bottom: 100px;">
            <div id="d" class="row my-5">
                <div class="col-sm-4 border-right">
                    <div class="box-content">
                        <i class="bi bi-cloud-fill p-4 circle-icon"></i>
                        <h3 class="my-4">Knowledgebase</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab corrupti, quasi dolorum.</p>
                    </div>
                </div>
                <div class="col-sm-4 border-right">
                    <div class="box-content">
                        <i class="bi bi-chat-fill p-4  circle-icon"></i>
                        <h3 class="my-4">Knowledgebase</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab corrupti, quasi dolorum.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box-content">
                        <i class="bi bi-envelope-fill p-4  circle-icon"></i>
                        <h3 class="my-4">Knowledgebase</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab corrupti, quasi dolorum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="e">
        <div class="container-fuild">
            <div class="container">
                <div class="row py-5">
                    <div class="col-sm-12 col-md-6 sm-box text-white my-5">
                        <h2 class="section-title text-left mt-3 mb-4">Get in touch with us</h2>
                        <p class="contact-p mb-5" style="width: 85%;">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Earum sunt nemo enim pariatur nesciunt id voluptatibus non!</p>
                        <address class="mb-5">
                            <p><i class="bi bi-geo-alt-fill me-2"
                                    style="align-items: center; justify-content: center; height:40px ; width: 40px; background-color: green; padding: 8px; border-radius: 8px;"></i>
                                1800 Los Angeles, USA</p>
                            <p class="my-4"><i class="bi bi-telephone-fill me-2"
                                    style="align-items: center; justify-content: center; height:40px ; width: 40px; background-color: green; padding: 8px; border-radius: 8px;"></i>
                                0 800-55-22-55</p>
                            <p><i class="bi bi-envelope-fill me-2"
                                    style="align-items: center; justify-content: center; height:40px ; width: 40px; background-color: green; padding: 8px; border-radius: 8px;"></i>
                                support@company.com</p>
                        </address>
                        <div class="nav-tab">
                            <a href="javascript:void(0)" class="btn btn-success me-3" id="contact-btn"
                                onclick="showForm('contact')">Contact</a>
                            <a href="javascript:void(0)" class="btn btn-success" id="subscribe-btn"
                                onclick="showForm('subscribe')">Subscribe</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 my-5 text-white">
                        <!-- Form contact (hiển thị mặc định) -->
                        <div id="contact-form" class="form-section" style="display:block;">
                             <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form 1"]'); ?>
                        </div>

                        <!-- Form subscribe (ẩn ban đầu) -->
                        <div id="subscribe-form" class="form-section" style="display:none;">
                            <form action="">
                                <div class="input-container d-flex align-items-center">
                                    <input type="text" class="form-control my-3" name="email" id="email"
                                        placeholder="Email">
                                    <a href="" class="btn btn-success ms-2">Subscribe</a>
                                </div>
                                <h3 class="box-title mt-5">Why subscribe? And don't worry. No spam!</h3>
                                <p class="contact-p mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Praesentium temporibus laborum nostrum, optio in nisi eius suscipit ad cum, corrupti
                                    illo beatae nemo doloremque consequuntur fugit quia dicta, quas! Ipsa!</p>
                            </form>
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
<?php
get_footer(); // Gọi footer
?>