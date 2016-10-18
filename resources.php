<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Test Wordpress</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="assets/css/font-awesome/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Google Fonts
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>-->
</head>
<body class="full-width resources">

<!-- HEADER------------------------->
<?php include 'header.php'?>
<!--End header------------------------->

<!--Top Image-------------->
<section class="top-image feature-image-default" data-type="background" data-speed="2">
    <h1 class="top-header">Resources</h1>
</section><!--End top image--->

<!--Main Container------------------->
<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
            <section class="main-content">
                <p class="lead">
                    Welcome to Test Wordpress resources! On this page, if you are a developer
                    or want to be a developer I will provide you with useful resources
                    that I use to built sites.
                </p>
                <p>I don't make any money from them, these are just tools
                I use and would recommend.
                </p>

                <hr>

                <div class="resource-row clearfix">
                    <div class="resource">
                    <img class="img-responsive img-center" src="assets/img/phpstorm.png" alt="PhpStorm logo with purple stripes">
                        <h3><a href="https://www.jetbrains.com/phpstorm/">PhpStorm</a></h3>
                        <p>Since I was used to visual studio for C# I wanted something fast and lightweight
                        to help me at my web development process. It has everything you want to start,
                        helps you with code completion and errors and has plugins for almost everything! It's not only for PHP
                        but for anything web related. A very good and fast IDE highly recommended.
                        </p>

                     </div>
                    <div class="resource">
                        <img class="img-responsive img-center" src="assets/img/digitalocean.png" alt="Digital Ocean logo for developers">
                        <h3><a href="https://www.digitalocean.com/">Digital Ocean VPS</a></h3>
                        <p>If you are serious about developing and you want to take your hosting to the next level
                            then you might need a VPS. Their one click installs are pretty easy and you will have your own VPS!
                            A VPS  is much faster than a shared hosting package and you can have multiple sites in it with no problem.
                            Though you will have to learn some linux and server related stuff but KNOWLEDGE IS POWER!
                            <strong>It is highly recommended for medium to heavy sites also. </strong>
                        </p>

                    </div>
                    <div class="resource">
                        <img class="img-responsive img-center" src="assets/img/googledrive.png" alt="PhpStorm logo with purple stripes">
                        <h3><a href="https://www.google.com/drive/">Google Drive</a></h3>
                        <p>You probably already know it. Your files will be safe in cloud
                            and you won't have to worry if your hard disk fails.
                            Also you will have them easily in all your devices.
                        </p>

                    </div>
                </div>

            </section><!--main-content--->
        </div>
    </div>
</div><!--End container --------->

<!-- SIGN UP ----------------------------->
<section id="signup" data-type="background" data-speed="4" class="section-padding">
    <div class="container">
        <div class="row align-center">
            <div class="col-sm-12">
                <h2>Are you ready to let me build you your site?</h2>
                <button style="width: 300px" class="btn btn-success btn-lg " data-toggle="modal" data-target="#myModal" role="button">Yes create my site!</button>
            </div>
        </div>
    </div>
</section>


<!-- FOOTER -------------------------->
<footer>
    <div class="container">
        <div class="row">
            <div class=" col-sm-3 footer-logo">
                <p><a  href="/"><img class="img-logo img-responsive" src="assets/img/logo-top.png" alt="Test Wordpress logo"></a></p>
            </div>
            <div  class="col-sm-9">
                <nav>
                    <ul  class="list-unstyled list-inline pull-right">
                        <li>Created by George Tourtsinakis</li>
                        <li><a id="backToTop" href="#">Back to TOP</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div><!--End footer container------->
</footer><!--End footer----------------->


<!-- MODAL ----------------------->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <!--For screens readers only--->
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    <i class="fa fa-envelope">Get quote NOW!</i>
                </h4>
            </div><!--modal-header-->

            <div class="modal-body">
                <p>Simply enter your email and idea for your site to get quote <em>for free!</em>.</p>
                <form class=" " role="form">
                    <div class="form-group">
                        <label class="sr-only" for="name">Your name</label>
                        <input type="text" class="form-control" placeholder="Your name">
                    </div><!--form group--->
                    <div class="form-group">
                        <label class="sr-only" for="email">Your email</label>
                        <input type="text" class="form-control" placeholder="Your email">
                    </div><!--form group--->
                    <div class="form-group">
                        <label class="sr-only" for="getIdea">Your idea</label>
                        <textarea type="text" class="form-control" placeholder="Your idea" rows="6" ></textarea>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-danger" value="Get quote!">
                    </div>
                </form>

                <hr>

                <p><small>By sending your info you will be able to receive a quote for your future site.</small></p>

            </div><!--modal-body--->
        </div><!--Modal content---->
    </div><!--modal dialog-------->
</div><!--End Modal--------------->

<!--BOOTSTRAP CORE JAVASCRIPT and our javascript-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>