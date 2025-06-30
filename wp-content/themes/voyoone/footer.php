  <footer>
    <!-- Footer -->
     <section class="footer">
        <div class="container-fuild text-white" style="background-color: rgb(48, 48, 48);">
            <p class="bg-success" style="padding: 2px;"></p>
            <div class="container">
                <div class="row pt-3">
                    <div class="col-sm-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, at.</p>
                    </div>
                    <div class="col-sm-6 text-end">
                        <i class="bi bi-facebook p-2 me-2 bg-dark" style=" border-radius: 3px; font-size: 16px;"></i>
                        <i class="bi bi-twitter p-2 me-2 bg-dark" style=" border-radius: 3px; font-size: 16px;"></i>
                        <i class="bi bi-google p-2 me-2 bg-dark" style=" border-radius: 3px; font-size: 16px;"></i>
                        <i class="bi bi-twitch p-2 me-2 bg-dark" style=" border-radius: 3px; font-size: 16px;"></i>
                        <i class="bi bi-wifi p-2 me-2 bg-dark" style=" border-radius: 3px; font-size: 16px;"></i>

                    </div>
                </div>
                <hr>
                <div class="row pb-5">
                    <div class="col-sm-6">
                        <h3 class="widget-title mt-5">About us</h3>
                        <p class=" mt-4 mb-4 " style="width: 85%;">Lorem ipsum dolor sit amet domo, consectetur
                            adipisicing elit. Magnam, aliquam? Sequi dolore alias voluptate officiis nemo natus dolorum.
                        </p>
                        <p><i class="bi bi-geo-alt-fill me-2"
                                style="align-items: center; justify-content: center; height:40px ; width: 40px; background-color: green; padding: 8px; border-radius: 8px;"></i>
                            1800 Los Angeles, USA</p>
                        <p class="mt-4  "><i class="bi bi-telephone-fill me-2"
                                style="align-items: center; justify-content: center; height:40px ; width: 40px; background-color: green; padding: 8px; border-radius: 8px;"></i>
                            0 800-55-22-55</p>
                    </div>
                    <div class="col-sm-3">
                        <h3 class="widget-title mt-5 mb-4">Latest posts</h3>

                        <p><a class="text-white text-decoration-none mb-5 " href="#"><i
                                    class="bi bi-wordpress text-success me-2"></i> About Wordpress themes</a></p>
                        <p><a class="text-white text-decoration-none mb-5" href="#"><i
                                    class="bi bi-journal text-success me-2"></i> Why choose Joomla</a></p>
                        <p><a class="text-white text-decoration-none mb-5" href="#"><i
                                    class="bi bi-journal text-success me-2"></i> Drupal is better</a></p>
                        <p><a class="text-white text-decoration-none" href="#"><i
                                    class="bi bi-camera-fill text-success me-2 "></i> Magento vs. OpenCart</a></p>

                    </div>
                    <div class="col-sm-3">
                        <h3 class="widget-title mt-5 mb-4">Flickr photos</h3>
                        <div class="img">
                            <div class="row">
                                <div class="col-sm-4 col-md-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/15647274066_2ee48c3fe9_s.jpg" alt="">
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/15485436268_846ccca178_s.jpg" alt="">
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/15668911091_4ef20118b5_s.jpg" alt="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4 col-md-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/15484954949_a4e97a9dc5_s.jpg" alt="">
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/15485436268_846ccca178_s.jpg" alt="">
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/15668909741_eaf3db4054_s.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>

        </div>
        <div class="nav-footer pt-4 pb-2 bg-white">
              <div class="container">
                   <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <p>© Copyright 2014 - 2022 shiftThemes</p>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex justify-content-end">
                        <a class="nav-link me-4" href="#" role="button">Home</a>
                        <a class="nav-link me-4" href="#" role="button">Contact</a>
                        <a class="nav-link me-4" href="#" role="button">Events</a>
                        <a class="nav-link me-4" href="#" role="button">News</a>
                        <a class="nav-link me-4" href="#" role="button">Terms</a>
                        <a class="nav-link me-4" href="#" role="button"> Privacy Policy</a>
                    </div>
                   </div>
              </div>
        </div>
    </section>

  </footer> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
