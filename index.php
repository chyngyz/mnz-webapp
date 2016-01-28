<?php

  $path = str_replace('index.php', '' , $_SERVER['SCRIPT_NAME']);
  $root = "http://".$_SERVER['HTTP_HOST'].$path;

?><!doctype html>
<html class="no-js" lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mnz webapp</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="assets/styles/vendor.css">
    <link rel="stylesheet" href="assets/styles/main.css">
  
    <script src="<?php echo $root; ?>assets/js/vendor/modernizr/modernizr.js"></script>
  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <div class="container">
      <h1>Navigo</h1>
      <nav>
        <a href="javascript:void(0);" data-switchto="about">About</a>
        <a href="javascript:void(0);" data-switchto="services">Services</a>
        <a href="javascript:void(0);" data-switchto="services/corporate">Services Corporate</a>
        <a href="javascript:void(0);" data-switchto="team">Team</a>
        <a href="javascript:void(0);" data-switchto="testimonials">Testimonials</a>
      </nav>
      <div class="js-content content"></div>
    </div>
    
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script> -->
    <script src="<?php echo $root; ?>assets/js/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/vendor/navigo/navigo.min.js"></script>

    
    
    <script src="<?php echo $root; ?>assets/js/scripts.js"></script>
  </body>
</html>