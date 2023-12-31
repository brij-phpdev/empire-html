<?php
include_once './common/inc/header.php';
include_once './common/inc/process.php';
?>


<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section id="subheader" class="jarallax">
        <img src="images/background/7.jpg" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h1>Franchise</h1>
                    <div class="de-separator"></div>
                </div>
            </div>
        </div>
        <div class="de-gradient-edge-bottom"></div>
    </section>

    <section aria-label="section" class="no-top no-bottom">

        <div class="container">
            <div class="row align-items-center">
                <!--                        <div class="col-lg-6 offset-lg-3 text-center">
                                            <img src="images/misc/man-3-b.png" class="img-fluid wow fadeInUp" alt="">
                                        </div>-->
                <div class="col-lg-8 offset-lg-2 text-center" data-jarallax-element="-20">

                    <h2 class="wow fadeInUp">Become a <span class="id-color">Partner Salon</span></h2>
                    <p class="lead wow fadeInUp">Our objective is to facilitate the growth of your business and assist you in shaping the salons of tomorrow.
                    </p>
                    <p class="lead wow fadeInUp">Empire Salon Partner is characterized by their independence, ambition, and forward-thinking approach, all underpinned by a commitment to excellence in both cutting and coloring techniques. Our primary aim is to support these salons in expanding their enterprises and crafting the salons of the future.
                    </p>
                    <p class="lead wow fadeInUp">Through our exclusive product line, Empire Salon Professional, which seamlessly combines color, care, and finishing elements with exceptional educational resources, we empower our partner salons to captivate their clientele with effortlessly elegant and manageable hairstyles.
                    </p>
                </div>
            </div>
        </div>
    </section>




    <section class="no-top jarallax">
        <div class="de-gradient-edge-top"></div>
        <img src="images/background/7-1.jpg" class="jarallax-img" alt="">
        <div class="container position-relative z1000">
            <div class="row gx-5">

                <div class="col-lg-6 offset-lg-3">

                    <div class="d-sch-table">
                        <h2 class="wow fadeIn text-center" style="font-size: 22px!important;">Benefits of Joining as a Partner Salon</h2>
                        <div class="de-separator"></div>
                        <p class="lead">
                            By becoming an Empire Salon Partner, you gain access to:

                        <ul>
                            <li>Unrivaled Educational Support: Our program continually challenges hairdressers to achieve the highest technical proficiency.</li>
                            <li>20% Discount on All Empire Salon Academy Courses: Avail yourself of a 20% discount on all courses offered by Empire Salon Academy.</li>
                            <li>A Select Range of Performance Products: We provide a concise and precise selection of performance products, enabling you to offer top-tier services to even the most discerning clients.</li>
                        </ul>
                        </p>
                        <p class="lead text-center">
                            Subscribe Online to Become a Partner Salon
                            Ready to embark on this journey with us?
                        </p>

                        <form name="franchiseForm" id="franchise_form" class="form-border position-relative z1000" method="post" action="#">
                            <div class="row">
                                <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                        <select name='type' id='type' class="form-control" required="">
                                            <option value="Company">Company</option>
                                            <option value="Individual">Individual</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                        
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Applicant Name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                        <input type="text" name="Email" id="email" class="form-control" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                        <input type="number" name="team_size" id="team_size" class="form-control" placeholder="Team Size" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                        <input type="number" name="area" id="area" class="form-control" placeholder="Area (sq feet)" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                        Property type
                                        <select name='property_type' id='property_type' class="form-control" required="">
                                            <option value="Owned">Owned</option>
                                            <option value="Rented">Rented</option>
                                            <option value="Leased">Leased</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                        Experience in Salon & Beauty
                                        <select name='experience' id='experience' class="form-control" required="">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                        Other ventures/companies?
                                        <select name='other_business' id='other_business' class="form-control" required="">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                        Need products?
                                        <select name='need_products' id='need_products' class="form-control" required="">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                        Required training
                                        <select name='required_training' id='required_training' class="form-control" required="">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                       Help in hiring the stylist
                                        <select name='hiring_stylist' id='hiring_stylist' class="form-control" required="">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                
                                 <div class="col-lg-12 mb10">
                                    <div class="field-set">
                                        <input type='text' name='your_budget' id='your_budget' class="form-control" placeholder="Your Budget?" required="">
                                    </div>
                                </div>

                            </div>
                            <div class="field-set mb20">
                                <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY ?>"></div>
                            <div id='submit' class="mt20">
                                <input type='submit' id='send_message' value='Apply' class="btn-main">
                            </div>

                            <input type="hidden" name="ps_str_task" value="<?php echo $ps_str_task ?>" />

                            <div id="success_message" class='success'>
                                You have applied successfully. Refresh this page if you want to send more messages.
                            </div>
                            <div id="error_message" class='error'>
                                Sorry there was an error sending your form.
                            </div>
                        </form>

                        <div class="d-deco"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="de-gradient-edge-bottom"></div>
    </section>



</div>
<!-- content close -->

<!-- footer begin -->
<?php
include_once './common/inc/footer.php';
?>
