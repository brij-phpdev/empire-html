<?php
include_once './common/inc/header.php';
//include_once './common/inc/database.php';
?>

<!-- content begin -->
<div id="content" class="no-bottom no-top">

    

   

   

    

    <section id="explore-4" class="side-bg text-light">
        <div class="col-md-6 image-container">
            <div class="background-image"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="padding40">
                        <h2>Franchise
                            <span class="small-border"></span>
                        </h2>
                        Are you new to this business & seeking the

                        <div class="spacer-single"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <h4>Experience</h4>
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