<?php

$experience_months = range(0, 12);
$experience_years = range(0, 25);
$career_source_references = array('News Paper Advertisement','Google','LinkedIn','Facebook');


// random string generated to protect CSRF attack.. we need to verify if we have one..

$rand_byte = random_bytes(12);


// save jobs form ...

function saveJobsForm($form_fields){
    
    
    // upload resume file 
    $cadidate_resume = $_FILES['cadidate_resume'];
    var_dump($cadidate_resume['tmp_name']);
    $file_location = '/../public/resumes/'.date('Y-m-d-H-i-s-').$cadidate_resume['name'];
    echo '<br/>File location: '.($file_location);
    echo '<br/>Dir: '. __DIR__;
    echo '<br/>FILE: '. __FILE__;
    echo 'tmp file: '.$cadidate_resume['tmp_name'];
    try {
        $upload_file = move_uploaded_file($cadidate_resume['tmp_name'], $file_location);
        var_dump($upload_file);
//        if (move_uploaded_file($cadidate_resume['tmp'], $file_location)) {
//            echo 'file_moved';
//        }
    } catch (Exception $exc) {
        echo $exc->getMessage();
    }



    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $experience_year = trim($_POST['experience_year']);
    $experience_month = trim($_POST['experience_month']);
    $expertise = trim($_POST['expertise']);
    $reference = trim($_POST['reference']);
    $source = trim($_POST['source']);
    $cadidate_resume = $file_location;
    $date = date('m-d-Y',strtotime(trim($_POST['date'])));
    $timing = trim($_POST['time']);
    $upload_date = date('Y-m-d H:i:s');
    
    
//    foreach($form_fields as $field):
//        
//    endforeach;
}