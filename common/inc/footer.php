
<?php


?>

<!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row g-4">
                    
                    <div class="col-lg-4 text-lg-start text-center">
                        <div class="social-icons">
                            <a target="_blank" href="<?php echo FB_SOCIAL ?>"><i class="fa fa-facebook fa-lg"></i></a>
                            <a target="_blank" href="<?php echo YOUTUBE_SOCIAL ?>"><i class="fa fa-youtube fa-lg"></i></a>
                            <a target="_blank" href="<?php echo INSTA_SOCIAL ?>"><i class="fa fa-instagram fa-lg"></i></a>
                            <!--<a href="<?php echo FB_SOCIAL ?>"><i class="fa fa-rss fa-lg"></i></a>
                            <a href="<?php echo FB_SOCIAL ?>"><i class="fa fa-twitter fa-lg"></i></a>
                            -->
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-center text-center">
                        <img src="images/logo.png" class="" alt="">
                    </div>
                    <div class="col-lg-4 text-lg-end text-center">
                        Copyright 2023 - Empire Salon
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
    
    



    <!--SMS implementation start--> 
    
    
    <div class="html-code">
        
        <div id="test-popup" class="white-popup mfp-hide">
   <div id="sms-popup"  >

            <div class='waitSpinner'> </div>
            <p style="display: block;" class="fancy_msg  alert">

            </p>
            <div id="mobile_otp_error" class="error"></div>
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <div id="popuplogincontainer" >
                <div class="white-popup" id="divsendmobileotp">

                    <h3>Enter your mobile to get OTP</h3>
                    <!--<p id="plsreghere"class="title_block">No account yet ? Please enter your mobile here!</p><br />-->

                    <div class="form-group row">
                        <label for="mobile_otp" class="col-sm-4 hidden control-label" id="mobile_otp" >Mobile Number : </label>
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
                            <label for="mobile_sms" class="col-sm-4 hidden control-label" id="mobile_sms" >Enter OTP: </label>
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
            </div>                
        <div class="clearfix"></div>
    </div>
</div>
        
   
    </div>
    
    <!--SMS implementation close-->


    <!-- current page scripts  -->
    <!--<script src="js/bootstrap-datepicker.js"></script>-->
    
    <!--<script src="js/callSendSMS.js"></script>-->
  <!-- Javascript Files
    ================================================== -->
    <!--<script src="js/jquery.min.js"></script>-->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/custom-marquee.js"></script>
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!--    <script src="https://www.recaptcha.net/recaptcha/api.js"></script>-->
    <script src="form.js"></script>

<!--        <script type="text/javascript">
        $('#date').datepicker();
    </script>-->
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
    <!--<script src="js/jquery.magnific-popup.min.js"></script>-->
    <script type="text/javascript">
    
      $(document).ready(function() {
          
        $('.open-popup-link').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
      });

      });
    
    </script>
    <script src="js/callSendSMS.js"></script>
    
</body>
</html>
<?php
@mysqli_close($link);
// bin/magento setup:install --admin-firstname="Empire" --admin-lastname="Salon" --admin-email="mb.consulting.031220@gmail.com" --admin-user="empire_mbcs" --admin-password="Z{,W{-8I1F(V" --language=en_US --currency=INR --timezone=America/New_York

// bin/magento setup:install --admin-firstname="Empire" --admin-lastname="salon" --admin-email="mb.consulting.031220@gmail.com" --admin-user="empire_mbcs" --admin-password="Z{,W{-8I1F(V" --language=en_US --currency=INR --timezone=America/New_York

// php -f bin/magento setup:install –base-url="https://magento.icet.org.in/" --backend-frontname="https://magento.icet.org.in/admin2023mbcs/" --db-host="127.0.0.1" --db-name="u397536656_clima" --db-user="u397536656_clima_usr" --db-password="8}_!.)%%A$tnh65@09Oct23" --admin-firstname="empire" --admin-lastname="salon" --admin-email="mb.consulting.031220@gmail.com" --admin-user="empire_mbcs" --admin-password="Z{,W{-8I1F(V" --language=en_US --currency=INR --timezone=America/New_York
