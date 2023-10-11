<?php
include_once './common/inc/header.php';
?>

<!-- subheader -->
<section id="subheader" class="subh-center" data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact</h1>
                <h4>Get In Touch</h4>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content" class="no-top">

    <!-- section begin -->
    <section id="section-map" aria-label="section-map" class="no-top">
        <div id="map"></div>
    </section>
    <!-- section close -->

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2>Send Us Message</h2>
                <div class="small-border wow zoomIn" data-wow-delay=".3s" data-wow-duration=".3s"></div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <form name="contactForm" id='contact_form' class="deform-1" method="post" action='email.php'>
                    <div class="row">
                        <div class="col-md-4">
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
                        <div class="col-md-8">
                            <div id='message_error' class='error'>Please enter your message.</div>
                            <div>
                                <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <p id='submit'>
                                <input type='submit' id='send_message' value='Submit Form' class="btn btn-custom">
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
