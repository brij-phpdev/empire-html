<?php
include_once './common/inc/header.php';
include_once './common/inc/database.php';
?>

<!-- content begin -->
<div id="content" class="no-bottom no-top">

    <!-- parallax section -->
    <!-- parallax section -->
    <section id="section-intro-video" class="full-height no-padding" data-stellar-background-ratio=".2">
        <div class="de-video-container">
            <div class="de-video-content">
                <div class="text-center">
                    <div class="spacer-double"></div>
                    <h1 class="big-font">The Empire Salon</h1>
                    <div class="teaser-text">
                        Embrace yourself with your new hairstyle
                    </div>
                    <div class="spacer-single"></div>
                    <a href="services.php" class="btn-slider">Make Appointment</a>
                </div>
            </div>

            <div class="de-video-overlay"></div>

            <!-- load your video here -->
            <video autoplay="" loop="" muted="" poster="images/video-poster.jpg">
<!--                        <source src="assets/video/empire-v.mp4" type="video/mp4" />
                <source src="assets/video/empire-v.webm" type="video/webm" />-->
                <source src="assets/video/close-up-of-female-hairdresser-makes-hairstyle.mp4" type="video/mp4" />
                <source src="assets/video/close-up-of-female-hairdresser-makes-hairstyle.webm" type="video/webm" />
            </video>

        </div>
    </section>
    <!-- parallax section close -->

    <div class="no-padding mt-130 height90px mobile-hide absolute z-index500 width100 text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="overlaydark50">

                        <div class="row-fluid">
                            <div class="col-md-4">
                                <div class="info-box padding20">
                                    <i class="fa fa-clock-o id-color"></i>
                                    <div class="info-box_text">
                                        <div class="info-box_title">Opening Times</div>
                                        <div class="info-box_subtite">Wednesday - Sunday: 01:00 AM - 07:30 PM</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="info-box padding20">
                                    <i class="fa fa-home id-color"></i>
                                    <div class="info-box_text">
                                        <div class="info-box_title">Our Location</div>
                                        <div class="info-box_subtite"><?php echo ADDRESS ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="info-box padding20">
                                    <i class="fa fa-phone id-color"></i>
                                    <div class="info-box_text">
                                        <div class="info-box_title">Our Phone</div>
                                        <div class="info-box_subtite"><?php echo PHONE ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section id="explore-4" class="side-bg text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h1>Mordern & Trending</h1>
                    <div class="small-border wow zoomIn" data-wow-delay=".3s" data-wow-duration=".3s"></div>
                    <div class="spacer-single"></div>
                </div>
            </div>
        </div>

        <div class="container">

            <div  class="gallery zoom-gallery wow fadeInUp gallery-col" data-wow-delay=".3s">
                <div class="row">

 <div class="col-md-8 video-container">
                        <iframe width="760" height="415" src="https://www.youtube.com/embed/G1Azty7B9A0?si=spGnwzPKOgcvFapT" title="The Empire - trending" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    
                    <!-- gallery item -->
<div class="col-md-4 pull-right">
                    
                        <h2>Foam Look
                            <span class="small-border"></span>
                        </h2>
    <p class="text-justify">Foam Look Under Salon & Beauty is a modern and trendy beauty establishment that offers a wide range of services dedicated to enhancing one's appearance and overall well-being. Located in the heart of Agra, this salon has quickly gained a reputation for its commitment to excellence and customer satisfaction.
                        </p>
                        <div class="spacer-single"></div>
                    
                </div>

                   
                    
                    
            </div>
        </div>

    </section>

    <!-- section begin -->
    <section id="section-sub-intro">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="de_tab tab_style_2">
                        <ul class="de_nav">
                            <li class="active" data-link="#section-services-tab"><span>Who We Are</span><div class="v-border"></div>
                            </li>
                            <li data-link="#section-services-tab"><span>Why Choose Us</span><div class="v-border"></div>
                            </li>
                            <li data-link="#section-services-tab"><span>Our Expertise</span><div class="v-border"></div>
                            </li>
                        </ul>

                        <div class="de_tab_content">



                            <div id="tab1" class="tab_single_content">

                                <div class="col-md-6 image-container">
                                    <img class="img-responsive" src="images/empire/our_experts.jpeg" />
                                </div>
                                <div class="col-md-6">
                                    <!--<h2>Empire Salon</h2>-->
                                    At <b>Empire salon</b>, we think we have a duty to our customers to make them look good and feel even better. Our passion is your beauty.
                                    <br/>
                                    Our incredibly talented staff, hygienic workstations, calming surroundings and above all our magnificence of personalised quality brings you to the next level of luxury focused service. Our services use top-market brands to make us your ideal beauty partner for life.
                                    <br/>
                                    We invite you to relax and enjoy a stress-free atmosphere. Our trained experts can handle all of your beauty and wellness needs during your stay.
                                </div>

                                <!--                                        <div class="col-md-12">
                                                                            <h4>Mission</h4>
                                                                            Our commitment to quality and services ensure our clients happy. With years of experiences and continuing education, our dedicated staff is ready to serve your beauty needs. We're happy to help you decide the best look.
                                                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 	
                                                                        </div>-->


                                <div class="clearfix"></div>
                            </div>

                            <div id="tab2" class="tab_single_content">
                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="box-icon">
                                            <i class="fa fa-check wow fadeIn" data-wow-delay=".25s"></i>
                                            <div class="text">
                                                <h4>Professional Staff</h4>
                                                <p>Our commitment to quality and services ensure our clients happy. With years of experiences and continuing education, our dedicated staff is ready to serve your beauty needs. We're happy to help you decide the best look.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="box-icon">
                                            <i class="fa fa-check wow fadeIn" data-wow-delay=".5s"></i>
                                            <div class="text">
                                                <h4>Free Consultation</h4>
                                                <p>Our commitment to quality and services ensure our clients happy. With years of experiences and continuing education, our dedicated staff is ready to serve your beauty needs. We're happy to help you decide the best look.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="box-icon">
                                            <i class="fa fa-check wow fadeIn" data-wow-delay=".75s"></i>
                                            <div class="text">
                                                <h4>Special Offers</h4>
                                                <p>Our commitment to quality and services ensure our clients happy. With years of experiences and continuing education, our dedicated staff is ready to serve your beauty needs. We're happy to help you decide the best look.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="box-icon">
                                            <i class="fa fa-check wow fadeIn" data-wow-delay="1s"></i>
                                            <div class="text">
                                                <h4>Private Rooms</h4>
                                                <p>Our commitment to quality and services ensure our clients happy. With years of experiences and continuing education, our dedicated staff is ready to serve your beauty needs. We're happy to help you decide the best look.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div id="tab3" class="tab_single_content">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="service-item">

                                        <a href="booking.php?service=Haircut">
                                            <img src="images/services/service-big-1-1.jpeg" alt="" class="pic-grey" />
                                            <h3>Hairstyle</h3>
                                        </a>

                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="service-item">

                                        <a href="booking.php">
                                            <img src="images/services/service-big-2.jpg" alt="" class="pic-grey" />
                                            <h3>Makeup</h3>
                                        </a>

                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="service-item">

                                        <a href="booking.php">
                                            <img src="images/services/service-big-3.jpg" alt="" class="pic-grey" />
                                            <h3>Hair Color</h3>
                                        </a>

                                    </div>
                                </div>

                                <div class="spacer-single"></div>
                                <div class="text-center"><a href="services.php" class="btn-slider">View All Services</a></div>


                                <div class="clearfix"></div>
                            </div>

                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- section close -->


    <section id="explore-4" class="side-bg text-light">
        <div class="col-md-6 image-container">
            <div class="background-image"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="padding40">
                        <h2>Top Notch Stylist
                            <span class="small-border"></span>
                        </h2>
                        Our commitment to quality and services ensure our clients happy. With years of experiences and continuing education, our dedicated staff is ready to serve your beauty needs. We're happy to help you decide the best look.

                        <div class="spacer-single"></div>

                        <div class="row">
                            <div class="col-md-6">
                                <h4>Experience</h4>
                                <p>With years of experiences and continuing education, our dedicated staff is ready to serve your beauty needs.</p>
                            </div>

                            <div class="col-md-6">
                                <h4>Quality</h4>
                                <p>With years of experiences and continuing education, our dedicated staff is ready to serve your beauty needs.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- section begin -->
    <section id="section-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h1>Hair Styles</h1>
                    <div class="small-border wow zoomIn" data-wow-delay=".3s" data-wow-duration=".3s"></div>
                    <div class="spacer-single"></div>
                </div>
            </div>
        </div>

        <div class="container">

            <div id="gallery" class="gallery zoom-gallery wow fadeInUp gallery-col" data-wow-delay=".3s">
                <div class="row">

                    <?php
                    $gallery_dir = 'images/gallery/';
                    
                    if(is_dir( $gallery_dir)):
                            $gallery_files = array_diff(scandir($gallery_dir), array('.', '..','.DS_Store'));
//                            shuffle($gallery_files);
                            if (count($gallery_files)):
                                foreach ($gallery_files as $k => $gallery_file):
                                
                                    ?>

                    <!-- gallery item -->
                    <div class="col-md-4 item">
                        <div class="picframe">
                            <a href="<?php echo $gallery_dir . $gallery_file ?>" title="Hair Style 1">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Style 1</span>
                                    </span>
                                </span>
                                <img src="<?php echo $gallery_dir . $gallery_file ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <?php
                                endforeach;
                            endif;
                        endif;
                        ?>
                    <!-- close gallery item -->

                    
                    
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <!-- section begin -->
    <section id="section-home-shop"  class="side-bg text-light" aria-label="section-services" data-stellar-background-ratio=".2">
        <div class="col-md-6 image-container">
            <div class="background-image"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="padding40">
                        <h2>Grab your deal
                            <span class="small-border"></span>
                        </h2>
                        Claim your Welcome bonus by becoming a part of our community, and continue shopping for products from our store.
                        <br/>
                        <a target="_blank" href="<?php echo SHOP_URL ?>" class="btn btn-line-white btn-big">Shop Now</a>

                        <div class="spacer-single"></div>


                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <!-- section begin -->
    <section id="cta" aria-label="cta" class="call-to-action bg-color-2 text-center">
        <a href="services.php" class="btn btn-line-white btn-big">Make Appointment Now</a>
    </section>
    <!-- section close -->


</div>


<!-- footer begin -->
<?php
include_once './common/inc/footer.php';
?>