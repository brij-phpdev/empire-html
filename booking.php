<?php
include_once './common/inc/header.php';
include_once './common/inc/database.php';
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
        <form name="form_booking" id='form_booking' class="deform-1" method="post" action="booking_post.php">
            <div class="row">


                <div class="col-md-12">

                    <div id="step-1" class="row text-center selector-img">
                        

                        
                        <div class="col-md-12">
                            <div class="de_tab tab_style_2">
                                <ul class="de_nav">
                                    <li class="active" data-link="#section-services-tab"><span>Threading</span><div class="v-border"></div>
                                    </li>
                                    <li data-link="#section-services-tab"><span>Haircut</span><div class="v-border"></div>
                                    </li>
<!--                                    <li data-link="#section-services-tab"><span>Our Expertise</span><div class="v-border"></div>
                                    </li>-->
                                </ul>

                                <div class="de_tab_content">

                                    <div id="tab1" class="tab_single_content">


                                            
                                            <div class="service-item">

                                                <?php
                        $servicetable_sql = "SELECT * FROM `servicetable` WHERE `category_id`='2'";
                        if ($servicetable_res = mysqli_query($link, $servicetable_sql)) {
                            if (mysqli_num_rows($servicetable_res) > 0) {
while ($servicetable_row = mysqli_fetch_array($servicetable_res)) {
                                    $selected = (isset($_GET['service']) && $_GET['service'] == $servicetable_row['title']) ? 'selected="selected"' : '';
                                    ?>
                                    <!--<div class="card"><?php // echo $servicetable_row['title'] ?> (₹<?php echo $servicetable_row['price'] ?>)</div>-->
                                    <!--                                            <label class="col-md-3 col-sm-2 col-xs-4">
                                                                            
                                    <?php echo $servicetable_row['title'] ?> (₹<?php echo $servicetable_row['price'] ?>)
                                                                            <span class="spacer-half"></span>
                                                                                </label>-->



                                    <div class="list-group col-md-4 col-sm-2 col-xs-4">
                                        <a class="list-group-item service-title" id="<?php echo $servicetable_row['id'] ?>" >

                                            <h4 class="list-group-item-heading"><?php echo $servicetable_row['title'] ?> <span class="id-color pull-right">₹<?php echo $servicetable_row['price'] ?></span></h4>
                                            <p class="list-group-item-text"><?php echo html_entity_decode($servicetable_row['description']) ?></p>
                                            <!--<input type="radio" onclick="serviceSelection(this)" name="serviceTitle" value="<?php echo $servicetable_row['title'] ?>" />-->
                                        </a>
                                    </div>

                                    <?php
                                }

                                mysqli_free_result($servicetable_res);
                            }
                        }
                        ?>
<!--                                                <a href="service-details-1.php">
                                                    <img src="images/services/service-big-1.jpg" alt="" class="pic-grey" />
                                                    <h3>Haircut</h3>
                                                </a>-->

                                            </div>
                                        <!--</div>-->


                                            <div class="clearfix"></div>

                                    </div>

                                    <div id="tab2" class="tab_single_content">

                                        <div class="service-item">

                                                <?php
                        $servicetable_sql = "SELECT * FROM `servicetable` WHERE `category_id`='1'";
                        if ($servicetable_res = mysqli_query($link, $servicetable_sql)) {
                            if (mysqli_num_rows($servicetable_res) > 0) {
while ($servicetable_row = mysqli_fetch_array($servicetable_res)) {
                                    $selected = (isset($_GET['service']) && $_GET['service'] == $servicetable_row['title']) ? 'selected="selected"' : '';
                                    ?>
                                    <!--<div class="card"><?php // echo $servicetable_row['title'] ?> (₹<?php echo $servicetable_row['price'] ?>)</div>-->
                                    <!--                                            <label class="col-md-3 col-sm-2 col-xs-4">
                                                                            
                                    <?php echo $servicetable_row['title'] ?> (₹<?php echo $servicetable_row['price'] ?>)
                                                                            <span class="spacer-half"></span>
                                                                                </label>-->



                                    <div class="list-group col-md-4 col-sm-2 col-xs-4">
                                        <a class="list-group-item service-title" id="<?php echo $servicetable_row['id'] ?>" >

                                            <h4 class="list-group-item-heading"><?php echo $servicetable_row['title'] ?> <span class="id-color pull-right">₹<?php echo $servicetable_row['price'] ?></span></h4>
                                            <p class="list-group-item-text"><?php echo html_entity_decode($servicetable_row['description']) ?></p>
                                            <!--<input type="radio" onclick="serviceSelection(this)" name="serviceTitle" value="<?php echo $servicetable_row['title'] ?>" />-->
                                        </a>
                                    </div>

                                    <?php
                                }

                                mysqli_free_result($servicetable_res);
                            }
                        }
                        ?>
<!--                                                <a href="service-details-1.php">
                                                    <img src="images/services/service-big-1.jpg" alt="" class="pic-grey" />
                                                    <h3>Haircut</h3>
                                                </a>-->

                                            </div>


                                        <div class="clearfix"></div>
                                    </div>

                                    

                                </div>

                            </div>
                        </div>
                        


                        
                </div>

                <span class="spacer-half"></span>
                <!--Hold &lt;ctrl&gt; to select multiple item-->

                <div class="spacer-single"></div>
                <div class="" id="step-2">
                    <h4>Stylist</h4>
                    <div class="tiny-border"><span></span></div>
                    <div class="row text-center selector-img">
                        <?php
                        $agent_sql = "SELECT * FROM `agents`";
                        if ($res = mysqli_query($link, $agent_sql)) {
                            if (mysqli_num_rows($res) > 0) {
                                while ($row = mysqli_fetch_array($res)) {
                                    ?>
                                    <label class="col-md-3 col-sm-2 col-xs-4">
                                        <input class="agentSelect" type="radio" name="stylist" value="<?php echo $row['id'] ?>" /><?php echo $row['agentName'] ?>
                                        <?php
                                        //data:image/jpg;charset=utf-8;base64,
                                        ?>
                                        <img src="<?php echo (SITE_BOOK_URL . '/application/uploads/img/agents/' . $row['agentImage']) ?>" alt="" class="img-responsive img-circle">
                                        <span class="spacer-half"></span>
                                        <?php echo $row['agentName'] ?>
                                    </label>
                                    <?php
                                }
                                mysqli_free_result($res);
                            }
                        }
                        ?>

                    </div>
                </div>


                <div class="" id="step-3">
                    <div class="col-md-12">
                        <h4>Preferred Date &amp; Time</h4>
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

                        <!--                    <h4>Notes</h4>
                                            <div class="tiny-border"><span></span></div>
                                            <div id='message_error' class='error'>Please enter your message.</div>
                                            <div>
                                                <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                            </div>-->

                        <div class="row">
                            <div class="col-md-6">

                                <label for="adultsVal">Adults</label>
                                <input id="adultsVal" class="form-control" type="number" value="0" min="1" step="1" name="serviceAdult" >
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="childVal">Childrens</label>
                                    <input id="childVal" class="form-control" type="number" value="0" min="0" step="1" name="serviceChildren" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-4 text-center">
                            <p id='submit_next'>
                                <a id="next-user-info" class="btn btn-primary fullwidth">Next</a>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="" id="step-4">  
                    <div class="col-md-12">
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

                        <div id='phone_error' class='error'>Please enter your 10 digit phone number.</div>
                        <div>
                            <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone e.g., 9876543210">
                        </div>
                    </div>


                    <div class="spacer-double"></div>

                    <div class="col-md-4 col-md-offset-4 text-center">
                        <p id='submit'>
                            <input type='submit' id='send_message' value='Confirm Booking' class="btn btn-custom fullwidth">
                        </p>
                        <div id='mail_success' class='success'>Your booking has been placed successfully.</div>
                        <div id='mail_fail' class='error'>Sorry, error occured this time confirming your booking.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 hidden">
                <input type="hidden" name="serviceId" id="serviceTitle" value=""/>
                <input type="hidden" name="agentId" id="agentName" value=""/>
            </div>
        
        </div>
            </form>
</div>
</div>

<?php
include_once './common/inc/footer.php';
