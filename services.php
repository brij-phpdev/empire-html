<?php
include_once './common/inc/header.php';
include_once './common/inc/database.php';
?>

<!-- subheader -->
<section id="subheader" class="subh-center" data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Services</h1>
                <h4>Discover What We Do</h4>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content" class="no-bottom no-top">
    <section>
        <div class="container">
            <div class="row">




                <?php
                $servicetable_sql = "SELECT * FROM `servicetable`";
                if ($servicetable_res = mysqli_query($link, $servicetable_sql)) {
                    if (mysqli_num_rows($servicetable_res) > 0) {

                        while ($servicetable_row = mysqli_fetch_array($servicetable_res)) {
                            ?>

                            <div class="list-group col-md-4 col-sm-6 col-xs-6">
<!--                                <div class="picframe list-group-item">

                                                <span class="overlay-">
                    <span class="pf_text">
                        <span class="project-name">Make Appointment</span>
                    </span>
                </span>


                                            <img src="<?php echo (SITE_BOOK_URL . '/application/uploads/img/' . $servicetable_row['image']) ?>" alt="" />
</div>-->
                                    <a class="list-group-item service-title" href="booking.php?service=<?php echo $servicetable_row['title'] ?>">
                                        <div class="spacer-single"></div>
                                        <h3 class="list-group-item-heading"><?php echo $servicetable_row['title'] ?> <span class="id-color pull-right">₹<?php echo $servicetable_row['price'] ?></span></h3>
                                        <p><?php echo html_entity_decode($servicetable_row['description']) ?></p>
                                    </a>
                                
                                <div class="spacer-half"></div>
                            </div>

                            <?php
                        }

                        mysqli_free_result($servicetable_res);
                    }
                }
                ?>



                <div class="clearfix"></div>
            </div>
        </div>
    </section>


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