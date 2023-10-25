<?php
session_start();
error_reporting(E_ALL);

//echo getenv('HTTP_CLIENT_IP');
include_once 'config.php';
include_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Empire - Barbershop Website </title>
    <link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Blaxcut - Barbershop Website " name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb" >
    <link href="css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="css/style.css" rel="stylesheet" type="text/css" >
    <link href="css/coloring.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" >
</head>

<body class="dark-scheme">
    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.php">
                                            <img class="logo-main" src="images/logo.png" alt="" >
                                            <img class="logo-mobile" src="images/logo-mobile.png" alt="" >
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="index.php">Home</a>
                                    </li>
                                    <li><a class="menu-item" href="services.php">Services</a>
                                        <ul>
                                            <li><a class="menu-item" href="services.php">All Services</a></li>
                                            <li><a class="menu-item" href="service-single.php">Service Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="about.php">About</a>
                                        <ul>
                                            <li><a class="menu-item" href="about.php">About Us</a></li>
                                            <li><a class="menu-item" href="team.php">Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="book.php">Book Now</a></li>
                                    <li><a class="menu-item" href="blog.php">Blog</a></li>
                                    <li><a class="menu-item" href="#">Extras</a>
                                        <ul>
                                            <li><a class="menu-item" href="contact.php">Contact</a></li>
                                            <li><a class="menu-item" href="gallery.php">Gallery</a></li>
                                            <li><a class="menu-item" href="pricing.php">Pricing</a></li>
                                            <li><a class="menu-item" href="testimonials.php">Testimonials</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="book.php" class="btn-main">Book Now</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->