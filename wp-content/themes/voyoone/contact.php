<?php
/*
Template Name: Contact Page
*/
get_header(); // Gọi header
?>

<main>
   <section class=" bg-success">
        <div class="container " style="margin-top: 100px;">
            <div class="row py-4">
                <div class="col-sm-12 col-md-6">
                    <h1 class="page-title pull-left text-white">Contact us</h1>
                </div>
                <div class="col-sm-12 col-md-6 text-end text-white mt-3">
                    <a class="text-white text-decoration-none" href="">Home</a> /
                    <a class="text-white text-decoration-none" href="">Page</a> /
                    <a class="text-white text-decoration-none" href="">Contact</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-sm-12 col-md-4 mb-4">
                    <h4 class="mb-4">About us</h4>
                    <p class="mb-5" style="font-size: 17px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Odit quae, nam nobis animi blanditiis soluta iure mollitia dolorum officiis quas non quasi unde
                        cupiditate eos numquam repudiandae excepturi, optio consequatur dolorum ispusm consectetur.</p>
                        <h4 class="mb-4">Headquarters</h4>
                        <p class="mb-4" style="font-size: 17px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quae, nam nobis animi blanditiis soluta.</p>
                        <p>
                            <a href="#" class="btn btn-bg bg-dark wide text-white">London</a>
                            <a href="#" class="btn btn-bg bg-dark boxed text-white">Dublin</a>
                            <a href="#" class="btn btn-bg bg-dark boxed text-white">Los Angeles</a>
                        </p>
                </div>
                <div class="col-sm-12 col-md-8 mb-4">
                    <div style="position: relative; width: 100%; height: 60vh;">
                        <iframe
                            src="https://maps.google.com/?ie=UTF8&amp;ll=34.053477,-118.241086&amp;spn=0.031112,0.038581&amp;t=m&amp;z=15&amp;output=embed"
                            style="width: 100%; height: 100%; border: none;">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="g">
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
get_footer(); // Gọi footer
?>
