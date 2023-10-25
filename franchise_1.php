<?php
include_once './common/inc/header.php';
include_once './common/inc/process.php';
?>

<!-- subheader -->
<section id="subheader" class="subh-center" data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Franchise</h1>
                <h4> lorum ippsum</h4>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content" class="no-top">


    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2>Fill the form we will get back to you</h2>
                <div class="small-border wow zoomIn" data-wow-delay=".3s" data-wow-duration=".3s"></div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <form name="jobForm" id='job_form' class="deform-1" method="post" action='franchise.php'>
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
                                    <?php foreach($experience_years as $experience_year): ?>
                                    <option value="<?php echo $experience_year ?>"><?php echo $experience_year ?></option>
                                    <?php endforeach; ?>
                                </select><label for="years"> Years</label>
                                </div>
                                <div class="col-md-6">
                                <select name='experience_month' id='experience_month' class="form-control">
                                    <?php foreach($experience_months as $experience_month): ?>
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
                                    <?php foreach($career_source_references as $career_source_reference): ?>
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
                                <input disabled="disabled" type='submit' id='send_message' value='Submit Form' class="btn btn-custom">
                            </p>
                            <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                            <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                        </div>
                    </div>
                </form>

            </div>


        </div>
    </div>
</div>

<!-- footer begin -->
<?php
include_once './common/inc/footer.php';
?>
