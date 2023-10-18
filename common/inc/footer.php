
<?php


?>

        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="widget widget_recent_post">
                            <h3>About</h3>
                            <article>
                                As one of the main and expert Salons in Agra since 1928, Empire Salon and Spa has everything to keep you looking and feeling stunning. We are likely ensure you get the great treatment so you can leave as the best version of yourself. Reach us today and treat yourself to our pampering package!

                            </article>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <h3>We're Open</h3>
                        <span class="tiny-border"></span>
                        <div class="widget">
                            <div class="box-border double">
                                <ul class="list-border-bottom">
                                    <li>
                                        <span class="pull-left">Mon - Tues</span>
                                        <span class="pull-right id-color">2 pm to 6 pm</span>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <span class="pull-left">Wed - Sun</span>
                                        <span class="pull-right id-color">11 am to 7:30 pm</span>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <span class="pull-left">Happy Hours (Tuesday & Thursday)</span>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <span class="pull-right id-color">10 am to 1 pm</span>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <h3>Contact Us</h3>
                        <div class="widget widget-address">
                            <address>
                                <span><strong>Address:</strong> <?php echo nl2br(ADDRESS) ?></span>
                                <span><strong>Phone:</strong><a title="click to call" href="tel:<?php echo PHONE ?>"><?php echo PHONE ?></a></span>
                                <!--<span><strong>Fax:</strong>(208) 333 9298</span>-->
                                <span><strong>Email:</strong><a href="mailto:<?php echo EMAIL ?>"><?php echo EMAIL ?></a></span>
                                
                                
                            </address>
                           
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="widget widget-address">
                            <span><strong>WhatsApp:</strong></span>
                            <br/>
                            <img src="images/empire/wa.link.png" class="img-responsive">
                        </div>
                    </div>


                </div>
            </div>

            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            &copy; Copyright 2023 
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="social-icons">
                                <a href="<?php echo FB_SOCIAL ?>"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="<?php echo INSTA_SOCIAL ?>"><i class="fa fa-instagram fa-lg"></i></a>
                                <a href="<?php echo YOUTUBE_SOCIAL ?>"><i class="fa fa-youtube fa-lg"></i></a>
<!--                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- footer close -->

    </div>


    <!--SMS implementation start-->
    <div class="container" style="display: none;">

                    <div id="gallery" class="gallery zoom-gallery wow fadeInUp gallery-col" data-wow-delay=".3s">
                        <div class="row">


                            <!-- gallery item -->
                            <div class="col-md-12 item">
                                <div class="picframe">
                                    <a href="images/gallery/pf%20(1).jpg" title="Hair Style 1">
                                        <span class="overlay">
                                            <span class="pf_text">
                                                Hello
                                                <!--<span class="project-name">Hair Style 1</span>-->
                                            </span>
                                        </span>
                                        <!--<a class="verifyOTP" href="#" data-link="<?php echo SHOP_URL ?>" target="_blank" >Shop</a>-->
                                        HELLO
                                        <!--<img src="images/gallery/pf%20(1).jpg" alt="" />-->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    
    <div id="popupLogin" style="display:none" class="wow fadeInUp " >
    <div class="simple-ajax-popup" id="popuploginbox1" >
        <div class='waitSpinner'> </div>
        <p style="display: none;" class="fancy_msg  alert">
            
        </p>
        <div style="display:none" id="mobile_otp_error" class="error"></div>
        <div id="popuplogincontainer" >
            <div class=" " id="divsendmobileotp">

                <h3>Enter your mobile to get OTP</h3>
                <p id="plsreghere"class="title_block">No account yet ? Please enter your mobile here!</p><br />

                <div class="form-group row">
                    <label for="mobile_otp" class="col-sm-4 control-label" id="mobile_otp" >Mobile Number : </label>
                    <div class="col-sm-12">
                        <input type="text" class="mobile_otp_input form-control" value="" placeholder="Mobile Number" name="mobile_otp" id="mobile_otp">
                    </div>
                </div>
                <div class="form-group">
                    <p class="sent-otp-fastsms_submit">
                        <button id="sent-otp-fastsms" class="button btn btn-success" value="Get OTP">Get OTP</button>
                        `
                    </p>
                </div>

                <div class="mobile_sms_otp">
                    <div class="form-group row">
                        <label for="mobile_sms" class="col-sm-4 control-label" id="mobile_sms" >Enter OTP: </label>
                        <div class="col-sm-8">
                            <input type="text" class="mobile_sms_input form-control" placeholder="Enter OTP" value="" name="mobile_sms" id="mobile_sms">                           
                        </div>
                    </div>
                    <div class="form-group">
                        <button id="verify-otp-fastsms" class="button btn btn-success" value="Verify OTP">Verify OTP</button>
                    </div>
                </div>    

            </div><br />
            <div class="clearfix"></div>

        </div>                
    </div>
    <div class="clearfix"></div>
    

    


                    <div class="clearfix"></div>
</div>
    <!--SMS implementation close-->

    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jpreLoader.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.scrollto.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/video.resize.js"></script>
    <script src="js/validation-reservation.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/designesia.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- current page scripts  -->
    <script src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $('#date').datepicker();
    </script>
    <script type="text/javascript">
        
        $(document).ready(function(){
            
            $("#step-2").hide();
            $("#step-3").hide();
            $("#step-4").hide();
            
            $(".service-title").on("click",function(){
                var service = $(this).attr('id');
//                alert(service);
                $("#serviceTitle").val(service);
                $("#step-1").hide();
//                $("#step-2").show();// skipping to direct prefered time instead of slecting agent
                $("#step-3").show();
            });
            
            $(".agentSelect").on("click",function(){
                var agent = $(this).val();
//                alert(service);
//                $("#agentName").val(agent);
                $("#agentName").val('0');
                $("#step-2").hide();
                $("#step-3").show();
            });
            
            $("#next-user-info").on("click",function(){
//                validate if fields are empty..
                
                $("#step-3").hide();
                $("#step-4").show();
            });
            
            
            
        });
        
        function serviceSelection(){
            
            var service = $(this).attr('id');
            console.log($(this));
            
            
            
        }
        
        
        
    </script>
    <script src="js/callSendSMS.js"></script>
    
</body>
</html>
<?php
@mysqli_close($link);
// bin/magento setup:install --admin-firstname="Empire" --admin-lastname="Salon" --admin-email="mb.consulting.031220@gmail.com" --admin-user="empire_mbcs" --admin-password="Z{,W{-8I1F(V" --language=en_US --currency=INR --timezone=America/New_York

// bin/magento setup:install --admin-firstname="Empire" --admin-lastname="salon" --admin-email="mb.consulting.031220@gmail.com" --admin-user="empire_mbcs" --admin-password="Z{,W{-8I1F(V" --language=en_US --currency=INR --timezone=America/New_York

// php -f bin/magento setup:install –base-url="https://magento.icet.org.in/" --backend-frontname="https://magento.icet.org.in/admin2023mbcs/" --db-host="127.0.0.1" --db-name="u397536656_clima" --db-user="u397536656_clima_usr" --db-password="8}_!.)%%A$tnh65@09Oct23" --admin-firstname="empire" --admin-lastname="salon" --admin-email="mb.consulting.031220@gmail.com" --admin-user="empire_mbcs" --admin-password="Z{,W{-8I1F(V" --language=en_US --currency=INR --timezone=America/New_York
