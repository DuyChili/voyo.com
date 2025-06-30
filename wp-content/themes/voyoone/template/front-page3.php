<?php
/*
Template Name: Home 3
*/
get_header(); // Gọi header
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style3.css" />
<main>
    <section>
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

    <section class="a" style="background-color: rgb(64, 64, 64);">
        <div class="container text-white">
            <div class="row py-5" style=" display: flex; justify-content: flex-end;">
                <div class="col-sm-12 col-md-6 py-4">
                    <div class="row my-5">
                        <div class="box-left col-2 col-md-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/browser (1).png" alt="service">
                        </div>
                        <div class="box-right col-10 col-md-10">
                            <h3 class="box-title bt3 color-default">Cross Browser</h3>
                            <p class="color-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim
                                temporibus quae, aliquid! Ipsam officiis obcaecati beatae!</p>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="box-left col-2 col-md-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tablet (1).png" alt="service">
                        </div>
                        <div class="box-right col-10 col-md-10">
                            <h3 class="box-title bt3 color-default">Mobile Friendly</h3>
                            <p class="color-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim
                                temporibus quae, aliquid! Ipsam officiis obcaecati beatae!</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="box-left col-2 col-md-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pencil.png" alt="service">
                        </div>
                        <div class="box-right col-10 col-md-10">
                            <h3 class="box-title bt3 color-default">Unlimited colors</h3>
                            <p class="color-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim
                                temporibus quae, aliquid! Ipsam officiis obcaecati beatae!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container p-5">
            <div class="row py-4 g-0 mt-3 mb-3">
                <div class="col-sm-6 col-md-3">
                    <div class="card text-center box1">
                        <div class="card-body">
                            <i class="bi bi-book fs-1"></i>
                            <h3 class="card-title">Documentation</h3>
                        </div>
                        <div class="card-footer">
                            <p class="descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos amet
                                aut, distinctio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card text-center box2">
                        <div class="card-body">
                            <i class="bi bi-cart fs-1"></i>
                            <h3 class="card-title">Shop Pages</h3>
                        </div>
                        <div class="card-footer">
                            <p class="descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos amet
                                aut, distinctio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card text-center box3">
                        <div class="card-body">
                            <i class="bi bi-file-earmark-text fs-1"></i>
                            <h3 class="card-title">Clean Code</h3>
                        </div>
                        <div class="card-footer">
                            <p class="descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos amet
                                aut, distinctio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card text-center box4">
                        <div class="card-body">
                            <i class="bi bi-hand-thumbs-up fs-1"></i>
                            <h3 class="card-title">Free Updates</h3>
                        </div>
                        <div class="card-footer">
                            <p class="descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos amet
                                aut, distinctio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card text-center box3">
                        <div class="card-body">
                            <i class="bi bi-phone fs-1"></i>
                            <h3 class="card-title">Responsive</h3>
                        </div>
                        <div class="card-footer">
                            <p class="descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos amet
                                aut, distinctio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card text-center box4">
                        <div class="card-body">
                            <i class="bi bi-list fs-1"></i>
                            <h3 class="card-title">Megamenu</h3>
                        </div>
                        <div class="card-footer">
                            <p class="descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos amet
                                aut, distinctio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card text-center box1">
                        <div class="card-body">
                            <i class="bi bi-bar-chart fs-1"></i>
                            <h3 class="card-title">Charts</h3>
                        </div>
                        <div class="card-footer">
                            <p class="descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos amet
                                aut, distinctio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card text-center box2">
                        <div class="card-body">
                            <i class="bi bi-chat-dots fs-1"></i>
                            <h3 class="card-title">Support</h3>
                        </div>
                        <div class="card-footer">
                            <p class="descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos amet
                                aut, distinctio.</p>
                        </div>
                    </div>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-201.png" class="img-fluid fade-image" alt="Client Logo 1"
                                    id="img-1">
                            </div>
                        </div>
                        <div class="col-6 col-md-6 p-3">
                            <div id="c-2" class="client">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-204.png" class="img-fluid fade-image" alt="Client Logo 2"
                                    id="img-2">
                            </div>
                        </div>
                        <div class="col-6 col-md-6 p-3">
                            <div id="c-3" class="client">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-201.png" class="img-fluid fade-image" alt="Client Logo 3"
                                    id="img-3">
                            </div>
                        </div>
                        <div class="col-6 col-md-6 p-3 d-none d-md-block">
                            <div id="c-4" class="client">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-206.png" class="img-fluid fade-image" alt="Client Logo 4"
                                    id="img-4">
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

    <section class="team-section pb-4">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-12">
                    <ul class="nav nav-tabs">
                        <li id="nhan" class="nav-item">
                            <a href="#tab-team1" class="nav-link active" data-bs-toggle="tab">Managers & CEO</a>
                        </li>
                        <li id="nhan" class="nav-item">
                            <a href="#tab-team2" class="nav-link" data-bs-toggle="tab">Web Designers</a>
                        </li>
                        <li id="nhan" class="nav-item">
                            <a href="#tab-team3" class="nav-link" data-bs-toggle="tab">Developers</a>
                        </li>
                        <li id="nhan" class="nav-item">
                            <a href="#tab-team4" class="nav-link" data-bs-toggle="tab">Community Support</a>
                        </li>
                        <li id="nhan" class="nav-item">
                            <a href="#tab-team5" class="nav-link" data-bs-toggle="tab">Marketing</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <!-- Managers & CEO Tab -->
                <div class="tab-pane fade show active" id="tab-team1">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-102.jpg" alt="Jay Doe">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Jay Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            class="text-decoration-none text-dark ms-3"
                                            title="Find out more about Jay Doe">...</a></h3>
                                    <h5 class="text-success">Team Manager</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-107.jpg" alt="Jay Doe" class="img-fluid">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Mark Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            title="Find out more about Mark Doe"
                                            class="text-decoration-none text-dark ms-3">...</a></h3>
                                    <h5 class="text-success">C.E.O.</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Web Designers Tab -->
                <div class="tab-pane fade" id="tab-team2">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-103.jpg" alt="Jay Doe" class="img-fluid">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Alex Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            title="Find out more about Alex Doe"
                                            class="text-decoration-none text-dark ms-3">...</a></h3>
                                    <h5 class="text-success">Web Designer</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-104.jpg" alt="Jay Doe" class="img-fluid">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Sophia Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            title="Find out more about Sophia Doe"
                                            class="text-decoration-none text-dark ms-3">...</a></h3>
                                    <h5 class="text-success">Graphic Designer</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-101.jpg" alt="Jay Doe" class="img-fluid">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Cecillia Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            title="Find out more about Sophia Doe"
                                            class="text-decoration-none text-dark ms-3">...</a></h3>
                                    <h5 class="text-success">Web Designer</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-105.jpg" alt="Jay Doe" class="img-fluid">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>John Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            title="Find out more about Sophia Doe"
                                            class="text-decoration-none text-dark ms-3">...</a></h3>
                                    <h5 class="text-success">Web Designer</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Developers Tab -->
                <div class="tab-pane fade" id="tab-team3">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-102.jpg" alt="Jay Doe">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Jay Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            class="text-decoration-none text-dark ms-3"
                                            title="Find out more about Jay Doe">...</a></h3>
                                    <h5 class="text-success">Team Manager</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-103.jpg" alt="Jay Doe" class="img-fluid">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Justin Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            title="Find out more about Justin Doe"
                                            class="text-decoration-none text-dark ms-3">...</a></h3>
                                    <h5 class="text-success">Frontend Developer</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-107.jpg" alt="Jay Doe" class="img-fluid">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Mark Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            title="Find out more about Mark Doe"
                                            class="text-decoration-none text-dark ms-3">...</a></h3>
                                    <h5 class="text-success">C.E.O.</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="tab-team4">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-103.jpg" alt="Jay Doe" class="img-fluid">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Alex Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            title="Find out more about Alex Doe"
                                            class="text-decoration-none text-dark ms-3">...</a></h3>
                                    <h5 class="text-success">Web Designer</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-104.jpg" alt="Jay Doe" class="img-fluid">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Sophia Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            title="Find out more about Sophia Doe"
                                            class="text-decoration-none text-dark ms-3">...</a></h3>
                                    <h5 class="text-success">Graphic Designer</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-101.jpg" alt="Jay Doe" class="img-fluid">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Cecillia Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            title="Find out more about Sophia Doe"
                                            class="text-decoration-none text-dark ms-3">...</a></h3>
                                    <h5 class="text-success">Web Designer</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-105.jpg" alt="Jay Doe" class="img-fluid">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>John Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            title="Find out more about Sophia Doe"
                                            class="text-decoration-none text-dark ms-3">...</a></h3>
                                    <h5 class="text-success">Web Designer</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-team5">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-102.jpg" alt="Jay Doe">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Jay Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            class="text-decoration-none text-dark ms-3"
                                            title="Find out more about Jay Doe">...</a></h3>
                                    <h5 class="text-success">Team Manager</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-team">
                                <div class="team-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-104.jpg" alt="Jay Doe" class="img-fluid">
                                    <div class="team-links">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"
                                                        style="color: rgb(0, 0, 172);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"
                                                        style="color: rgb(0, 147, 205);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-google"
                                                        style="color: rgb(216, 69, 69);"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"
                                                        style="color: rgb(0, 164, 164);"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h3>Sophia Doe <a href="page_about_me.html" data-toggle="tooltip"
                                            title="Find out more about Sophia Doe"
                                            class="text-decoration-none text-dark ms-3">...</a></h3>
                                    <h5 class="text-success">Graphic Designer</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae tempora
                                        officiis reprehenderit expedita iure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Tabs (Community Support, Marketing) omitted for brevity -->
            </div>
        </div>
    </section>

    <section class="b py-5">
        <div class="container">
            <div class="row mb-2 mt-4">
                <div class="col-lg-4 col-md-12 mb-3">
                    <div class="p-3 bg-white shadow-sm rounded p-4">
                        <h2 class="section-title st2 text-start text-primary my-3">Testimonials</h2>
                        <p class="text-secondary mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, voluptatum porro set
                            reiciendis, magni rerum velit, repudiandae fugit, animi id obcaecati mollitia nemo possimus.
                        </p>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 text-center">
                    <div class="text-success fs-1 mb-3">
                        <i class="bi bi-chat-quote"></i>
                    </div>
                    <div id="vticker-testimonials" class="overflow-hidden position-relative text-white"
                        style="height: 200px;">
                        <ul class="list-unstyled m-0 p-0" style="position: relative;">
                            <li class="testimonial-item">
                                <blockquote class="blockquote">
                                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum,
                                        quidem nesciunt totam? Quia, facere nobis fuga. Voluptas, sit maxime
                                        accusantium.</p>
                                    <footer class="blockquote-footer">
                                        <h5 class="mb-0 text-success">John Jones</h5>
                                        <p class="small text-white">GraphicRiver</p>
                                    </footer>
                                </blockquote>
                            </li>
                            <li class="testimonial-item">
                                <blockquote class="blockquote">
                                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum,
                                        quidem nesciunt totam? Quia, facere nobis fuga. Voluptas, sit maxime
                                        accusantium.</p>
                                    <footer class="blockquote-footer">
                                        <h5 class="mb-0 text-success">Peter Parker</h5>
                                        <p class="small text-white">VideoHive</p>
                                    </footer>
                                </blockquote>
                            </li>
                            <li class="testimonial-item">
                                <blockquote class="blockquote">
                                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum,
                                        quidem nesciunt totam? Quia, facere nobis fuga. Voluptas, sit maxime
                                        accusantium.</p>
                                    <footer class="blockquote-footer">
                                        <h5 class="mb-0 text-success">John Doe</h5>
                                        <p class="small text-white">Themeforest</p>
                                    </footer>
                                </blockquote>
                            </li>
                            <li class="testimonial-item">
                                <blockquote class="blockquote">
                                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum,
                                        quidem nesciunt totam? Quia, facere nobis fuga. Voluptas, sit maxime
                                        accusantium.</p>
                                    <footer class="blockquote-footer">
                                        <h5 class="mb-0 text-success">Bruce Wayne</h5>
                                        <p class="small text-white">CodeCanyon</p>
                                    </footer>
                                </blockquote>
                            </li>
                            <li class="testimonial-item">
                                <blockquote class="blockquote">
                                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum,
                                        quidem nesciunt totam? Quia, facere nobis fuga. Voluptas, sit maxime
                                        accusantium.</p>
                                    <footer class="blockquote-footer">
                                        <h5 class="mb-0 text-success">Kent Clark</h5>
                                        <p class="small text-white">AudioJungle</p>
                                    </footer>
                                </blockquote>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row py-5">
                <!-- Accordion Section -->
                <div class="col-md-6 sm-box2">
                    <div class="accordion" id="accordionExample">
                        <!-- Item 1 -->
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-success text-white" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Headquarters
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pt-3 pb-5" style="border-bottom: 1px solid green;">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit.
                                </div>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed bg-success text-white" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    London Office
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pt-3 pb-5" style="border-bottom: 1px solid green;">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit.
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-success text-white" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Meet us
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body pt-3 pb-5" style="border-bottom: 1px solid green;">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Section 1 -->
                <div class="col-sm-6 col-md-3 sm-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-207.jpg" alt="" class="mb-3 w-100"> <!-- 50% chiều rộng -->
                    <h3 class="box-title mt-3 mb-3">Safe and Secure</h3>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In molestias, aut atque
                        officiis dicta fugit sapiente dolor.</p>
                </div>

                <!-- Image Section 2 -->
                <div class="col-sm-6 col-md-3 sm-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p-208.jpg" alt="" class="mb-3 w-100"> <!-- 50% chiều rộng -->
                    <h3 class="box-title mt-3 mb-3">Reliable</h3>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In molestias, aut atque
                        officiis dicta fugit sapiente dolor.</p>
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
        let index = 0;
        const items = document.querySelectorAll('.testimonial-item');

        function showNext() {
            // Ẩn phần tử trước đó
            items[index].classList.remove('show');
            items[index].classList.add('hide');

            // Tính toán phần tử tiếp theo
            index = (index + 1) % items.length;

            // Hiển thị phần tử tiếp theo
            items[index].classList.remove('hide');
            items[index].classList.add('show');
        }

        // Bắt đầu hiển thị phần tử đầu tiên
        items[index].classList.add('show');

        // Mỗi 2 giây sẽ chuyển qua phần tử tiếp theo
        setInterval(showNext, 4000);


    </script>
<?php
get_footer(); // Gọi footer
?>