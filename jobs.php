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
                    <h1>Jobs</h1>
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
                    <h2 class="wow fadeInUp">WE DON'T JUST <span class="id-color">SHAPE HAIR</span>, WE SHAPE FUTURES</h2>
<!--                    <p class="lead wow fadeInUp">WHY CHOOSE EMPIRE SALON
                    </p>-->
                    <p class="lead wow fadeInUp">Empire Salon training is globally recognised as the ultimate in hairdressing education, providing you with a passport to a successful career in the international hair world. We celebrate people with a passion for hair, and once you become a member of the Empire Salon Team there are some incredible career paths that are open to you.
                    </p>
                    <p class="lead wow fadeInUp">If you enjoy the high-energy atmosphere of a salon, the role of Creative Cutter or Color Specialist could be for you - and in time you could become a Salon Director. Are you passionate about art and design, catwalk fashion and the avant-garde? If so, your career goal could be Creative Director, dreaming up future hair trends and demonstrating each season's new hair shapes on stages around the globe as a member of the Empire Salon International Show Team. Or is your desire to become an Instructor, teaching in one of the prestigious Empire Salon Academies located in some of the world's most exciting cities?
                    </p>
                    <p class="lead wow fadeInUp">Whatever your dream, a career with Empire Salon is the most foolproof way to make it come true.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="section" class="no-bottom">
        <div class="wow fadeInRight d-flex">
            <div class="de-marquee-list wow">
                <div class="d-item">
                    <span class="d-item-txt">Slickback</span>
                    <span class="d-item-display">
                        <i class="d-item-block"></i>
                    </span>
                    <span class="d-item-txt">Classic Quiff</span>
                    <span class="d-item-display">
                        <i class="d-item-block"></i>
                    </span>
                    <span class="d-item-txt">Pompadour</span>
                    <span class="d-item-display">
                        <i class="d-item-block"></i>
                    </span>
                    <span class="d-item-txt">Fringe</span>
                    <span class="d-item-display">
                        <i class="d-item-block"></i>
                    </span>
                    <span class="d-item-txt">Beard Trim</span>
                    <span class="d-item-display">
                        <i class="d-item-block"></i>
                    </span>
                    <span class="d-item-txt">Curly Fade</span>
                    <span class="d-item-display">
                        <i class="d-item-block"></i>
                    </span>
                    <span class="d-item-txt">Undercut</span>
                    <span class="d-item-display">
                        <i class="d-item-block"></i>
                    </span>
                </div>
            </div>
        </div>
    </section>

    
    <section class="no-top jarallax">
                <div class="de-gradient-edge-top"></div>
                <img src="images/background/4.jpg" class="jarallax-img" alt="">
                <div class="container position-relative z1000">
                    <div class="row gx-5">

                        <div class="col-lg-6 offset-lg-3">

                            <div class="d-sch-table">
                                <h2 class="wow fadeIn text-center">Careers with Empire</h2>
                                <div class="de-separator"></div>
                                <p class="lead text-center">
                                Apply with your updated Resume
                                </p>

                                <form name="jobForm" id="job_form" class="form-border position-relative z1000" method="post" action="#">
                                    <div class="row">
                                        <div class="col-lg-12 mb10">
                                            <div class="field-set">
                                                <input type='text' name='name' id='name' class="form-control" placeholder="Candidate Name" required="">
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
                                        
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                            <select name='experience_year' id='experience_year' class="form-control" placeholder="Years of experience">
                                <?php foreach ($experience_years as $experience_year): ?>
                                    <option value="<?php echo $experience_year ?>"><?php echo $experience_year ?></option>
                                <?php endforeach; ?>
                            </select><label for="years"> Years</label>
                        </div>
                        <div class="col-md-6">
                            <select name='experience_month' id='experience_month' class="form-control">
                                <?php foreach ($experience_months as $experience_month): ?>
                                    <option value="<?php echo $experience_month ?>"><?php echo $experience_month ?></option>
                                <?php endforeach; ?>
                            </select> Months
                        </div>
                        Leave blank in case you are fresher
                                        
                                    </div>
                                        
                                    <div class="field-set mb20">
                                        <input type='text' name='expertise' id='expertise' class="form-control" placeholder="Candidate Expertise">
                                    </div>
                                    <div class="field-set mb20">
                                        <input type='text' name='reference' id='reference' class="form-control" placeholder="Candidate Reference">
                                    </div>
                                    <div class="field-set mb20">
                                        <select name='source' id='source' class="form-control" placeholder="Career Source, such as ">
                                    <option value="0">--Select One--</option>
                                    <?php foreach ($career_source_references as $career_source_reference): ?>
                                        <option value="<?php echo $career_source_reference ?>"><?php echo $career_source_reference ?></option>
                                    <?php endforeach; ?>
                                </select>
                                    </div>
                                    <div class="field-set mb20">
                                        <input type="file" name="cadidate_resume" />
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="copy-your-site-key-here"></div>
                                    <div id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Apply' class="btn-main">
                                    </div>
                                    
                                    <input type="hidden" name="ps_str_task" value="<?php echo $ps_str_task ?>" />

                                    <div id="success_message" class='success'>
                                        Your message has been sent successfully. Refresh this page if you want to send more messages.
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
    
    <section class="jarallax" style="display: none;">
        <div class="de-gradient-edge-top"></div>
        <div class="de-gradient-edge-bottom"></div>
        <img src="images/background/1.jpg" class="jarallax-img" alt="">
        <div class="container position-relative z1000">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="wow fadeInUp">Apply with your updated <span class="id-color">Resume</span></h2>
                    <div class="spacer-single"></div>
                </div>
            </div>
            <div id="job_form" class="row g-4 wow fadeInUp">
                <form name="jobForm" id='job_form' class="jobform-1" method="post" action='' enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div id='name_error' class='error'>Please enter your name.</div>
                            <div>
                                <input type='text' name='name' id='name' class="form-control" placeholder="Candidate Name">
                            </div>

                            <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                            <div>
                                <input type='text' name='email' id='email' class="form-control" placeholder="Candidate Email">
                            </div>

                            <div id='phone_error' class='error'>Please enter your phone number.</div>
                            <div>
                                <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                            </div>


                        </div>

                        <div class="col-md-6">
                            <select name='experience_year' id='experience_year' class="form-control" placeholder="Years of experience">
                                <?php foreach ($experience_years as $experience_year): ?>
                                    <option value="<?php echo $experience_year ?>"><?php echo $experience_year ?></option>
                                <?php endforeach; ?>
                            </select><label for="years"> Years</label>
                        </div>
                        <div class="col-md-6">
                            <select name='experience_month' id='experience_month' class="form-control">
                                <?php foreach ($experience_months as $experience_month): ?>
                                    <option value="<?php echo $experience_month ?>"><?php echo $experience_month ?></option>
                                <?php endforeach; ?>
                            </select> Months
                        </div>
                        Leave blank in case you are fresher



                        <div class="col-md-12">
                            <div id='expertise_error' class='error'>Please enter your expertise such as hair stylist, beautician, etc.</div>
                            <div>
                                <input type='text' name='expertise' id='expertise' class="form-control" placeholder="Candidate Expertise">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id='reference_error' class='error'>Please enter your Reference (if Any).</div>
                            <div>
                                <input type='text' name='reference' id='reference' class="form-control" placeholder="Candidate Reference">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id='source_error' class='error'>Source of careers.</div>
                            <div>
                                <select name='source' id='source' class="form-control" placeholder="Career Source, such as ">
                                    <option value="0">--Select One--</option>
                                    <?php foreach ($career_source_references as $career_source_reference): ?>
                                        <option value="<?php echo $career_source_reference ?>"><?php echo $career_source_reference ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div id='resume_error' class='error'>Upload correct file & try again</div>
                            <div>
                                <input type="file" name="cadidate_resume" />
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <p id='submit'>
                                <input type='submit' id='apply_jobs' value='Submit Form' class="btn btn-custom">
                            </p>
                            <input type="text" name="ps_str_task" value="<?php echo $ps_str_task ?>" />
                            <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                            <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>
<!-- content close -->

<!-- footer begin -->
<?php
include_once './common/inc/footer.php';
?>
