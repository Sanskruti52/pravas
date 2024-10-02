<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>pravas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/nav.css">
<script type="text/javascript" src="js/nav.js"></script>
  <link rel="stylesheet" href="css/about.css"><meta charset="utf-8">
    
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
        <link rel="stylesheet" type="text/css" href="../css/gallery.css">
  <!-- <link rel="stylesheet" href="css/gallery.css"> -->

<script type="text/javascript" src="js/nav.js"></script>
        <!-- <link rel="stylesheet" type="text/css" href="css/gallery1.css"> -->

<script src="js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
<!--//end-animate-->
    
</head>
<!-- <body style="background-image: url('img/s1.webp');"> -->
<?php include('includes/header.php');?>
 
<body>

<div class="container">
  <h3>Gallery</h3>

  <div class="gallery_wrap">
    <div class="image image_1"></div>
    <div class="image image_2"></div>
    <div class="image image_3"></div>
    <div class="image image_4"></div>
    <div class="image image_5"></div>
  </div>
 
  <div class="data1">
        <a href="../galllery1.php" class="h">VIEW MORE...</a>
 <?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>     
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>     
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>     
<!-- //write us -->
</body>
</html>