<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8" /> 
  <title>nomful | be nomful about food</title>
  <meta name="keywords" content=""/>
  <meta name="description" content="nomful | be nomful about food" />
  <meta property="og:type" content="website" /> 
  <meta property="og:title" content="" /> 
  <meta property="og:image" content="" /> 
  <meta property="og:description" content="" /> 
  <!-- <meta property="og:url" content="https://nomful.com"> -->
  <meta name="author" content="nomful" /> 
  <meta name="robots" content="index, follow, noydir" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="google-site-verification" content="s-PDv36DeQ8GbPWkvISgveTSpQBsb7BQSMJTfiK_7Ps" />
  <link rel="icon" 
    type="image/png" 
    href="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <script src="//use.typekit.net/zcg5xnb.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/../css/normalize.css">
  <link rel="stylesheet" href="/../css/skeleton.css">
  <link rel="stylesheet" href="/../css/custom.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="/../images/favicon.png">

  <!-- SCRIPTS
  ================================================== -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
  <script src="/scripts/contact-form.js"></script>
<!--  <script src="/scripts/app.js"></script>-->

  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>  
  <header> 
    <div class="nav">
      <img class="reg-logo" src="/../img/nomful.png"/>
    </div>
  </header><!-- /header -->
  <section class="top-masthead contact">
    <div class="container center middle">
      <h1>Contact</h1>
      <p>We would love to hear from you, so get in touch with us!</p>
    </div>
  </section>
  
  <section class="form-container center mbudges">
    <p>Have a question? Want to learn more about us? We'd love to hear from you! Fill out the form below and we will get back to you as soon as possible :)</p>
    <div id="contact-messages" class="mbudge"></div>
    <form id="ajax-contact" method="post" action="contact-form.php" novalidate>
    <div class="row">
      <div class="six columns">
        <input class="u-full-width mbudge" data-new-placeholder="name" type="text" placeholder="name" name="name" id="name">
      </div>
      <div class="six columns">
        <input class="u-full-width mbudge" data-new-placeholder="email" type="email" placeholder="email" name="email" id="email">
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <textarea class="u-full-width mbudge" data-new-placeholder="message" type="text" placeholder="message" name="message" id="message"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
      <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
      <input class="button-primary u-pull-right mbudge" type="submit" value="contact us">
    </div>
    </form>
  </section>
  

<?php include 'footer.php';?>