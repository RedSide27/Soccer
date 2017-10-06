<?php
/**
 * Created by IntelliJ IDEA.
 * User: Alex
 * Date: 2017-10-05
 * Time: 18:40
 */
?>


<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
<head>
    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>S I G H T</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/one-page.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->

    <!--[if IE 8]>
    <script src="assets/js/selectivizr.js"></script>
    <![endif]-->
</head>


<body>

<!-- Home -->
<section class="header" id="header">
    <form method="GET"><nav class="navbar navbar-default">
        <div class="container">
	        <div style="margin-top: -15%;">
            <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand" style="border: none;margin-top: -2%;margin-left: -75px;" href="index-multipage.html"><img src="assets/images/logo.png"></a>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   <li class="active"><a href="index.php?p=accueil">Accueil</a></li>
                    <li><a href="about.html">À propos</a></li>
                    <li><a href="service.html">services</a></li>
                    <li><a href="portfolio.html">portfolio</a></li>
                    <li><a href="contact.html">contact</a></li>
                </ul> <!-- /.nav -->
            </div><!-- /.navbar-collapse -->
	        </div>
        </div><!-- /.container -->
        </nav></form>
		<div class="container">
			<div class="header-title">
				<h1 class="title">
					Jaguard de Louiseville
				</h1>
				<p class="subtitle">
					Depuis 2001
				</p>
			</div>
		</div>
</section> <!-- /#header -->


<?php
if(isset($_GET["p"])){
    $page = $_GET["p"];
    switch ($page) {
        case "accueil" :
            include ("includes/accueil.php");
            break;
        default:
            include  ("includes/accueil.php");
            break;
    }
}
else
    include  ("includes/accueil.php");
?>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="copy">
                    Copyright &copy; 2015 Your Company
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="social-icon">
                    <a href="#">
                        <div class="icon fb">
                            <i class="ion-social-facebook"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="icon twitter">
                            <i class="ion-social-twitter"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="icon google">
                            <i class="ion-social-googleplus"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="icon rss">
                            <i class="ion-social-rss"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 text-right">
                <div class="copy">
                    Theme by <a href="http://www.themewagon.com">themewagon.com</a>. All Rights Reserved
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</footer>

<script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/contact.js"></script>
<!-- // <script src="/assets/js/smoothscroll.js"></script> -->
<script src="assets/js/script.js"></script>


</body>
