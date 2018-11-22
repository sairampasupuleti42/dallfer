<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DALLFER &mdash; Event Management & Adds</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Dallfer" />

    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/superfish.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

    <!-- Modernizr JS -->
    <script src="<?php echo base_url();?>assets/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-left fh5co-link">
                        <a href="#" class="hide">FAQ</a>
                        <a  class="hide" href="<?php echo base_url('projects/contact-us');?>">Contact</a>
                    </div>
                    <div class="col-md-6 col-sm-6 text-right fh5co-social">
                        <a href="#" class="grow"><i class="icon-facebook2"></i></a>
                        <a href="#" class="grow"><i class="icon-twitter2"></i></a>
                        <a href="#" class="grow"><i class="icon-instagram2"></i></a>
                        <a href="<?php echo @$document['doc_path']?>" download="Dallfer-<?php echo date('d-m-Y');?>" class="grow">
                            <i class="icon icon-download2"></i> Download Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <header id="fh5co-header-section" class="sticky-banner">
            <div class="container">
                <div class="nav-header">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                    <!--<h1 id="fh5co-logo">
                    </h1>
                     START #fh5co-menu-wrap -->
                    <a href="index.html"><img src="<?php echo base_url();?>assets/images/logo.png"></a>
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <ul class="sf-menu" id="fh5co-primary-menu">
                            <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                            <li class="active"><a href="<?php echo base_url('about-us/');?>">About Us</a></li>
                            <li>
                                <a href="#" class="fh5co-sub-ddown">Events</a>
                                <ul class="fh5co-sub-menu">
                                    <li><a href="<?php echo base_url('events/corporate-events/');?>">Corporate Events</a></li>
                                    <li><a href="<?php echo base_url('events/indoor-events/');?>">Indoor Events</a></li>
                                    <li><a href="<?php echo base_url('events/outdoor-events/');?>">Outdoor Events</a></li>
                                    <li><a href="<?php echo base_url('events/water-float-events/');?>">Water Float Events</a></li>
                                    <li><a href="<?php echo base_url('events/customized-events/');?>">Customized Events</a></li>
                                    <li><a href="<?php echo base_url('events/promotional-events/');?>">Promotional Events</a></li>
                                </ul>
                            </li>
                            <!--<li>
                                <a href="#" class="fh5co-sub-ddown">Projects</a>
                                 <ul class="fh5co-sub-menu">
                                     <li><a href="#">Water World</a></li>
                                     <li><a href="#">Cloth Giving</a></li>
                                     <li><a href="#">Medical Mission</a></li>
                                </ul>
                            </li>-->
                            <li><a href="<?php echo base_url('gallery/');?>">Gallery</a></li>
<!--                            <li><a href="">Event Videos</a></li>-->
                            <li>
                                <a href="#" class="fh5co-sub-ddown">Projects</a>
                                <ul class="fh5co-sub-menu">
                                    <li><a href="<?php echo base_url('projects/upcoming-events/');?>">Upcoming Events</a></li>
                                    <li><a href="<?php echo base_url('projects/previous-events/');?>">Previous Events</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url('clients/');?>">Clients</a></li>
                            <li><a href="<?php echo base_url('contact-us/');?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
