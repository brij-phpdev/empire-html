<?php
include_once './common/inc/header.php';

?>

        <!-- subheader -->
        <section id="subheader" class="subh-center" data-stellar-background-ratio=".2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Appointment</h1>
                        <h4>Services Booking</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <form name="form_booking" id='form_booking' class="deform-1" method="post" action="https://newsalon.icet.org.in/homepage/submitData">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Personal Info</h4>
                            <div class="tiny-border"><span></span></div>
                            <div id='name_error' class='error'>Please enter your name.</div>
                            <div>
                                <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                            </div>

                            <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                            <div>
                                <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                            </div>

                            <div id='phone_error' class='error'>Please enter your phone number.</div>
                            <div>
                                <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h4>Services</h4>
                            <div class="tiny-border"><span></span></div>
                            <select name="serviceTitle" id="select-services" multiple="multiple" class="form-control">
                                <option value="Haircut">Haircut ($40)</option>
                                <option value="Flat Top">Flat Top ($45)</option>
                                <option value="Hairstyle">Hairstyle ($50)</option>
                                <option value="Hot Shave">Hot Shave ($20)</option>
                                <option value="Outline">Outline ($35)</option>
                                <option value="Line Up">Line Up ($30)</option>
                            </select>

                            <span class="spacer-half"></span>
                            Hold &lt;ctrl&gt; to select multiple item
									<div class="spacer-single"></div>

                            <h4>Stylist</h4>
                            <div class="tiny-border"><span></span></div>
                            <div class="row text-center selector-img">
                                <label class="col-md-3 col-sm-2 col-xs-4">
                                    <input type="radio" name="stylist" value="Briana" />
                                    <img src="images/team/team_pic_1.jpg" alt="" class="img-responsive img-circle">
                                    <span class="spacer-half"></span>
                                    Jimmy
                                </label>

                                <label class="col-md-3 col-sm-2 col-xs-4">
                                    <input type="radio" name="stylist" value="Jessica" />
                                    <img src="images/team/team_pic_2.jpg" alt="" class="img-responsive img-circle">
                                    <span class="spacer-half"></span>
                                    James
                                </label>

                                <label class="col-md-3 col-sm-2 col-xs-4">
                                    <input type="radio" name="stylist" value="Rachel" />
                                    <img src="images/team/team_pic_3.jpg" alt="" class="img-responsive img-circle">
                                    <span class="spacer-half"></span>
                                    John
                                </label>

                                <label class="col-md-3 col-sm-2 col-xs-4">
                                    <input type="radio" name="stylist" value="Emma" />
                                    <img src="images/team/team_pic_4.jpg" alt="" class="img-responsive img-circle">
                                    <span class="spacer-half"></span>
                                    Jack
                                </label>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <h4>Prefered Date &amp; Time</h4>
                            <div class="tiny-border"><span></span></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type='text' name='date' id='date' class="form-control" placeholder="select date">
                                </div>
                                <div class="col-md-6">
                                    <select name="time" id="time" class="form-control">
                                        <option value="08:00">08:00</option>
                                        <option value="09:00">09:00</option>
                                        <option value="10:00">10:00</option>
                                        <option value="11:00">11:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="13:00">13:00</option>
                                        <option value="14:00">14:00</option>
                                        <option value="15:00">15:00</option>
                                        <option value="16:00">16:00</option>
                                        <option value="17:00">17:00</option>
                                        <option value="18:00">18:00</option>
                                        <option value="19:00">19:00</option>
                                        <option value="20:00">20:00</option>
                                    </select>
                                </div>
                            </div>

                            <h4>Notes</h4>
                            <div class="tiny-border"><span></span></div>
                            <div id='message_error' class='error'>Please enter your message.</div>
                            <div>
                                <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                            </div>
                        </div>

                        <div class="spacer-double"></div>

                        <div class="col-md-4 col-md-offset-4 text-center">
                            <p id='submit'>
                                <input type='submit' id='send_message' value='Submit Form' class="btn btn-custom fullwidth">
                            </p>
                            <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                            <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


<?php
include_once './common/inc/footer.php';

include_once './common/inc/database.php';

//$stylist_list = 
?>