<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email']; 
$mobile=$_POST['mobileno'];
$subject=$_POST['subject']; 
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>pravas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
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
<link rel="stylesheet" type="text/css" href="css/gallery1.css">
<script type="text/javascript" src="js/nav.js"></script>
<script src="js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
  <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
h4 {
    color: black;
    font-family: thoma;
    margin: 20px auto;
    width: 450px;
    font-size: 3rem;
    text-align: center;
    border-bottom: 10px double #bc6c25;
}

img {
    width: 450px;
    height: 300px;
    margin: 10px;
    border: 10px solid #fefae0;
    -webkit-filter: sepia(100%);
    filter: sepia(100%);
    transition-duration: 1s;
}

img:hover {
    border: 5px solid #fff;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    -webkit-filter: none;
    filter: none;
}

.container11 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
    </style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<!-- <div class="banner-1 ">
  <div class="container">
    <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Pravas</h1>
  </div>
</div> --><br><br>
<h4>Memories...<br> WE SHARE</h4>
    <div class="container11">
        <img src="img/s23.webp" >
        <img src="img/s3.webp">
        <img src="img/r1.jpeg">
        <img src="img/s29.webp">
        <img src="img/rajgad.jpg">
        <img src="img/r6.jpeg">
    </div>
    <?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>     
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>     
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>