<?php
include_once './common/inc/header.php';
include_once './common/inc/database.php';
?>

<?php
$agent_array = array();
$agenttable_sql = "SELECT * FROM `agents`";
if ($agenttable_res = mysqli_query($link, $agenttable_sql)) {
    if (mysqli_num_rows($agenttable_res) > 0) {
        while ($agenttable_row = mysqli_fetch_assoc($agenttable_res)) {
            $agent_array[] = $agenttable_row;
        }
    }
}
//                        print_r($agent_array);                                
?>

<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section id="subheader" class="jarallax">
        <img src="images/background/3.jpg" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h1>Our Team</h1>
                    <div class="de-separator"></div>
                </div>
            </div>
        </div>
        <div class="de-gradient-edge-bottom"></div>
    </section>

    <section class="no-top" aria-label="section">
        <div class="container">
            <?php
            if ($agent_array):
                $i = 1;
                foreach ($agent_array as $agent):
//                    echo ($i % 2 == 0) ? 'Here we are..: ' . (count($agent_array) % 2 == 0) . " ::: value of i: $i" : 'new value: ' . $i;
                    $path = SITE_BOOK_URL . '/application/uploads/img/agents/' . $agent['agentImage'] ;
                    $type = pathinfo($path, PATHINFO_EXTENSION);
                    $data = file_get_contents($path);
                    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                    if ($i % 2 != 0):
                    
                        ?>
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-5 offset-lg-1 text-center" data-jarallax-element="-20">
                                <div class="de-box-a">
                                    <div class="d-image">
                                        <img src="<?php echo $base64 ?>" alt="agent  <?php echo $agent['agentName'] ?>">
                                    </div>
                                    <div class="d-deco-1"></div>
                                    <div class="d-deco-2"></div>
                                </div>
                                <div class="spacer-20"></div>
                            </div>

                            <div class="col-lg-5">                            
                                <h2><?php echo $agent['agentName'] ?></h2>
                                <p><?php echo html_entity_decode($agent['agentDetail']) ?></p>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <!--<a href="#"><i class="fa fa-twitter fa-lg"></i></a>-->
                                    <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="row gx-5 align-items-center"> 
                            <div class="col-lg-5 order-lg-1 order-2 offset-lg-1">                            
                                <h2><?php echo $agent['agentName'] ?></h2>
                                <p><?php echo html_entity_decode($agent['agentDetail']) ?></p>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-5 order-lg-2 order-1 text-center" data-jarallax-element="-20">
                                <div class="de-box-a">
                                    <div class="d-image">
                                        <img src="<?php echo $base64 ?>" alt="agent  <?php echo $agent['agentName'] ?>">
                                    </div>
                                    <div class="d-deco-1"></div>
                                    <div class="d-deco-2"></div>
                                </div>
                                <div class="spacer-20"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php
                    $i++;
                endforeach;
            endif;
            ?>

        </div>                    
    </section>

</div>
<!-- content close -->
<?php
include_once './common/inc/footer.php';
