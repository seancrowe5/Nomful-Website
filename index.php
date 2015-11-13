<?php require("headers.php"); ?>
  
<section class="masthead-top">
  <div class="container masthead-top-content">
    <h1 id="top-headline">Your personal trainer for what you eat.</h1>
    
    <h4 id="subline">A nutrition coach in your pocket while you shop, cook, eat, and exercise.</h4>
    
    <script src="/js1/jquery.label_better.js"></script>
    <script src="phone-index-form.js"></script>
    <script src="phone-name-index-form.js"></script>
    <script src="email-index-form.js"></script>
    <div id="index-message-top"><div id="index-message"></div></div>
    
    <form id="ajax-phone-index" method="post" action="phone-index-form.php" class="container-370 u-pull-left" novalidate>
    <div class="row">
      <input class="u-full-width label_better" data-new-placeholder="phone number" type="tel" placeholder="phone number" name="phone-number-a" id="phone-number-a">
      <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
      <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
      <input class="button-primary" type="submit" value="Get in touch">
    </div>
    </form>
    
    <form id="ajax-phone-name-index" method="post" action="phone-name-index-form.php" class="container-370 u-pull-left" novalidate>
    <div class="row">
      <input class="u-full-width label_better" data-new-placeholder="name" type="text" placeholder="name" name="name-b" id="name-b">
      <input class="u-full-width label_better" data-new-placeholder="phone number" type="tel" placeholder="phone number" name="phone-number-b" id="phone-number-b">
      <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
      <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
      <input class="button-primary" type="submit" value="Get in touch">
    </div>
    </form>
    
    <form id="ajax-email-index" method="post" action="email-index-form.php" class="container-370 u-pull-left" novalidate>
    <div class="row">
      <input class="u-full-width label_better" data-new-placeholder="email" type="email" placeholder="email" name="email-c" id="email-c">
      <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
      <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
      <input class="button-primary" type="submit" value="Get in touch">
    </div>
    </form>
    
</section>  
  
<section class="masthead masthead-explainer">
  <div class="container masthead-explainer-content">
    <h2 class="bold">Have confidence in what you eat</h2>
    <!--<h4>There's a nutrition coach in your pocket while you shop, cook, eat, and exercise.</h4>-->
    <div class="row">
      <div class="explainer-step">
        <span class="explainer-step-number">1</span>
        <h4>Personalized for you</h4>
        <p>Real coaching from the experts in habit-based nutrition. They get to know you, and together make a plan that works.</p>
        <img src="img1/iphoneCall.jpg"/>
      </div>
      <div class="explainer-step">
        <span class="explainer-step-number">2</span>
        <h4>Pictures, not calories</h4>
        <p>Instantly share meals with your coach and get feedback. We focus on building a healthy lifestyle, not counting calories.</p>
        <img src="img1/marketingscreen-meal.jpg"/>
      </div>
      <div class="explainer-step">
        <span class="explainer-step-number">3</span>
        <h4>Everyday support</h4>
        <p>What's for dinner? What's whole wheat? You have your coach's attention everyday to answer questions and give feedback.</p>
        <img src="img1/chat.jpg"/>
      </div>
    </div>
  </div>
</section>
  
  <section class="masthead masthead-join">
  <div class="container masthead-join-content">
    <h2 id="join-title">Forget fads and restrictions, build a lifestyle right for you</h2>
    <div id="healthy-start">
      <h4>21 Day Healthy Start</h4>
      <h2>$49</h2>
      <ul class="join-props">
        <li>Initial phone assesment</li>
        <li>Daily feedback and support</li>
        <li>Quick meal sharing</li>
        <li>Help with recipes, questions, etc.</li>
      </ul>
      <a href="https://itunes.apple.com/US/app/id991589420?mt=8#"><button class="button join-button">Get Started</button></a>
    </div>
    <div id="bootcamp">
      <h4>12-Week Boot Camp</h4>
      <h2>$199</h2>
      <ul class="join-props">
        <li>Complete Personalized Evaluation</li>
        <li>Regular phone assesments</li>
        <li>Daily accountability</li>
        <li>Quick meal sharing</li>
        <li>Weekly progress tracking</li>
      </ul>
      <a href="https://itunes.apple.com/US/app/id991589420?mt=8#"><button class="button-primary join-button">Get Started</button></a>
    </div>
    <h4 class="question-contact">Have a question? <a href="contact.php">Get in touch with us!</a></h4>
  </div>
</section>  
  
  <script>  
  $("input.label_better").label_better({
    position: "top",
    animationTime: 400,
    easing: "bounce",
    offset: 10,
    hidePlaceholderOnFocus: true
  });
  
  /*$(document).ready(function(){ 
    $("#first-name").focus();
  });*/
  
</script>

<script src="js1/scale.fix.js"></script>
<script src="js1/formatter.js"></script>
  
  <script>
    new Formatter(document.getElementById('phone-number'), {
    'pattern': '({{999}}) {{999}} - {{9999}}',
    'persistent': false
  });
    
    new Formatter(document.getElementById('phone-number-a'), {
    'pattern': '({{999}}) {{999}} - {{9999}}',
    'persistent': false
  });
  </script>


<?php require("footers.php"); ?>
