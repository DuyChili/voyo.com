<?php
/*
Template Name: Home 2
*/
?>
<section class="bg-success pt-4" id="section1">
        <div class="container p-2">
            <div class="row">
                <!-- Ẩn khi kích thước nhỏ hơn md -->
                <div class="col-md-6 mt-2 d-none d-md-block">
                    <p class="pull-left text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-sm-12 col-md-6 text-end mt-2">
                    <a class="text-decoration-none text-white me-3" href=""><i class="bi bi-person-fill"></i> My
                        Account</a>
                    <a class="text-decoration-none text-white" href=""><i class="bi bi-cart-fill"></i> My Wishlist</a>
                </div>
            </div>
        </div>
    </section>
<?php
get_header(); // Gọi header
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style2.css" />
<main>
<section class="a pt-5 pb-5">
        <div class="container p-5">
            <div class="row mt-5 mb-5">
                <div class="col-md-6 col-sm-8 p-5" style=" background-color: rgba(37, 190, 124, 0.8) !important;">
                    <div class="box-about text-white">
                        <h2 class="section-title text-left mb-3" style="width: 80%;">Just the perfect HTML Template</h2>
                        <p class="custom-bg-p mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit
                            dolorem, ea molestiae adipisci et labore aperiam tenetur, magni eaque, alias esse, ex animi
                            tempora deleniti. Natus ullam est, soluta et. Rerum accusamus dolores voluptatem aut
                            reiciendis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container text-center pt-5 pb-5">
            <div class="row pt-4 pb-4">
                <div class="col-sm-6 col-md-3 sm-box2">
                    <div class="box-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/volume.png" alt="">
                        <h3 class="mt-4 mb-4">This is just</h3>
                        <p class="mb0">Lorem ipsum dolor sit amet, consect adipisicing elit dolorum ipsum acet.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 sm-box2">
                    <div class="box-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/takeoff.png" alt="">
                        <h3 class="mt-4 mb-4">the perfect</h3>
                        <p class="mb0">Lorem ipsum dolor sit amet, consect adipisicing elit dolorum ipsum acet.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 xs-box2">
                    <div class="box-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trophy.png" alt="">
                        <h3 class="mt-4 mb-4">HTML5 &amp; CSS3</h3>
                        <p class="mb0">Lorem ipsum dolor sit amet, consect adipisicing elit dolorum ipsum acet.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rgb.png" alt="">
                        <h3 class="mt-4 mb-4">Template</h3>
                        <p class="mb0">Lorem ipsum dolor sit amet, consect adipisicing elit dolorum ipsum acet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="background-color: rgb(64, 64, 64);">
        <div class="container text-white pt-5 pb-5">
            <div class="row mt-3 page-services mb-3">
                <div class="col-sm-4 col-md-3 sm-box">
                    <ul  class="nav nav-pills flex-column">
                        <li id="nav-button" class="nav-item">
                            <a class="nav-link py-2 mb-2 text-white active" id="tab1-tab" data-bs-toggle="pill"
                                href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Responsive Design</a>
                        </li>
                        <li id="nav-button" class="nav-item">
                            <a class="nav-link py-2 mb-2 text-white" id="tab2-tab" data-bs-toggle="pill" href="#tab2"
                                role="tab" aria-controls="tab2" aria-selected="false">Clean Code</a>
                        </li>
                        <li id="nav-button" class="nav-item">
                            <a class="nav-link py-2 mb-2 text-white" id="tab3-tab" data-bs-toggle="pill" href="#tab3"
                                role="tab" aria-controls="tab3" aria-selected="false">Do it yourself</a>
                        </li>
                        <li id="nav-button" class="nav-item">
                            <a class="nav-link text-white" id="tab4-tab" data-bs-toggle="pill" href="#tab4" role="tab"
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

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5 mt-5" style="padding-bottom: 100px;">
                <h2 style="font-size: 40px;" class="fw-bold mb-4">What offers do we <span
                        class="text-success">have?</span></h2>
                <p>Lorem ipsum dolor sit amet, <span class="text-success">consectetur adipisicing</span> elitorem ipsum
                    dolores.</p>
            </div>
            <div class="row text-center g-0 justify-content-center py-5">
                <div class="col-md-4">
                    <div class="card h-100 py-5" style="border-top: 2px solid green;">
                        <div class="card-header text-center bg-white border-0">
                            <h3 class="text-success fw-bold" style="font-size: 60px;"><sup>$</sup>49<span
                                    class="text-success" style="font-size: 20px;">/month</span></h3>
                            <h4 class="my-3">BASIC</h4>
                            <a href="#" class="btn btn-success my-3">Start free trial!</a>
                        </div>
                        <hr>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><strong>Features</strong></li>
                                <li>Predefined Responses</li>
                                <li>Custom Business Rules</li>
                                <li class="text-success">Native Mobile Apps</li>
                                <li class="text-success">Dynamic Content</li>
                                <li>Screencasting</li>
                                <li class="text-muted">Multi-locale</li>
                                <li class="text-muted">Business Hours</li>
                                <li class="text-muted">Multiple Ticket forms</li>
                                <li class="text-muted">Business rules analysis</li>
                                <li class="text-muted">Automated Ticket Sharing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card py-5" style=" margin-top: -100px; border-top: 2px solid green;">
                        <div class="card-header text-center bg-white border-0">
                            <p class="badge mb-4" style="font-size: 26px ; color: rgb(196, 196, 196);">MOST POPULAR</p>
                            <h3 class="text-success fw-bold" style="font-size: 60px;"><sup>$</sup>69<span
                                    class="text-success" style="font-size: 20px;">/month</span></h3>
                            <h4 class="my-3">PROFESSIONAL</h4>
                            <a href="#" class="btn btn-success my-3">Sign Up</a>
                        </div>
                        <hr>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><strong>Features</strong></li>
                                <li>Predefined Responses</li>
                                <li>Custom Business Rules</li>
                                <li class="text-success">Native Mobile Apps</li>
                                <li class="text-success">Dynamic Content</li>
                                <li>Screencasting</li>
                                <li>Multi-locale</li>
                                <li>Business Hours</li>
                                <li class="text-muted">Multiple Ticket forms</li>
                                <li class="text-muted">Business rules analysis</li>
                                <li class="text-muted">Automated Ticket Sharing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 py-5" style="border-top: 2px solid green;">
                        <div class="card-header text-center bg-white border-0">
                            <h3 class="text-success fw-bold" style="font-size: 60px;"><sup>$</sup>99<span
                                    class="text-success" style="font-size: 20px;">/month</span></h3>
                            <h4 class="my-3">ENTERPRISE</h4>
                            <a href="#" class="btn btn-success my-3">Sign Up</a>
                        </div>
                        <hr>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><strong>Features</strong></li>
                                <li>Predefined Responses</li>
                                <li>Custom Business Rules</li>
                                <li class="text-success">Native Mobile Apps</li>
                                <li class="text-success">Dynamic Content</li>
                                <li>Screencasting</li>
                                <li>Multi-locale</li>
                                <li>Business Hours</li>
                                <li>Multiple Ticket forms</li>
                                <li class="text-success">Business rules analysis</li>
                                <li class="text-success">Automated Ticket Sharing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: rgb(64, 64, 64);">
        <div class="container text-white text-center p-5">
            <h2 class="section-title mb-4">Business plans</h2>
            <div class="text-center">
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi a commodi quae modi
                    beatae quo tempore consectetur ullam amet, error assumenda voluptatibus praesentium eaque minus ad
                    laudantium perspiciatis suscipit, nam fuga labore ut quaerat distinctio.</p>
            </div>
        </div>
    </section>

    <section class="b" style="background-color: green;">
        <div class="container text-center p-5 text-white">
                <h2 class="section-title mt-3 mb-4">Start your free trial adventure</h2>
                <p class="mb0"><a href="#" class="btn btn-white text-white" style="border: 1px solid white;">Sign Up</a></p>
        </div>
    </section>

    <section>
        <div class="container py-5">
			<div class="row mb-5 mt-4">
				<div class="col-sm-4 xs-box">
					<h3 class="box-title mt0 mb-4"><i class="bi bi-android2 bg-danger text-white" style="padding-block: 10px; padding-inline: 12px; font-size: 20px; border-radius: 6px;"></i> &nbsp; Responsive Design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maiores repudiandae, accusantium reiciendis commodi dolorum consect adis!</p>
				</div>
				<div class="col-sm-4 xs-box">
					<h3 class="box-title mt0 mb-4"><i class="bi bi-apple text-white" style="background-color: aqua; padding-block: 10px; padding-inline: 12px; font-size: 20px; border-radius: 6px;"></i> &nbsp; Retina Ready</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maiores repudiandae, accusantium reiciendis commodi dolorum consect adis!</p>
				</div>
				<div class="col-sm-4">
					<h3 class="box-title mt0 mb-4"><i class="bi bi-file-earmark-fill text-white" style="background-color: orange; padding-block: 10px; padding-inline: 12px; font-size: 20px; border-radius: 6px;"></i> &nbsp; 190+ HTML Files</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maiores repudiandae, accusantium reiciendis commodi dolorum consect adis!</p>
				</div>
			</div>
			<div class="row mb-4">
				<div class="col-sm-4 xs-box">
					<h3 class="box-title mt0 mb-4"><i class="bi bi-journals text-white" style=" background-color: rgb(15, 207, 181); padding-block: 10px; padding-inline: 12px; font-size: 20px; border-radius: 6px;"></i> &nbsp; Documentation</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maiores repudiandae, accusantium reiciendis commodi dolorum consect adis!</p>
				</div>
				<div class="col-sm-4 xs-box">
					<h3 class="box-title mt0 mb-4"><i class="bi bi-star-fill bg-primary text-white" style="padding-block: 10px; padding-inline: 12px; font-size: 20px; border-radius: 6px;"></i> &nbsp; Free Updates</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maiores repudiandae, accusantium reiciendis commodi dolorum consect adis!</p>
				</div>
				<div class="col-sm-4">
					<h3 class="box-title mt0 mb-4"><i class="bi bi-0-circle-fill bg-success text-white" style="padding-block: 10px; padding-inline: 12px; font-size: 20px; border-radius: 6px;"></i> &nbsp; Support</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maiores repudiandae, accusantium reiciendis commodi dolorum consect adis!</p>
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
        document.addEventListener("scroll", function () {
            const section1 = document.getElementById("section1");
            const section2 = document.getElementById("section2");
            const scrollTop = window.scrollY;

            if (scrollTop > 50) {
                // Ẩn Section 1
                section1.style.transform = "translateY(-100%)";
                section1.style.opacity = "0";

                // Đưa Section 2 lên trên cùng
                section2.style.top = "0";
            } else {
                // Hiển thị lại Section 1
                section1.style.transform = "translateY(0)";
                section1.style.opacity = "1";

                // Đặt Section 2 trở lại vị trí dưới Section 1
                section2.style.top = "70px"; // Chiều cao của Section 1
            }
        });




    </script>
<?php

get_footer(); // Gọi footer
?>