<?php require("headers.php"); ?>

<section class="masthead-top">
  <div class="container masthead-top-content">
    <h1 id="top-headline">A nutrition coach in your pocket</h1>
    
    <h5 id="subline">Daily accountability and support from an expert in nutrition while you shop, cook, eat, and exercise.</h5>
    
    <h4 id="top-CTA">Schedule <span>FREE </span>consulation!</h4>
    
    <script src="email-index-form.js"></script>
    <div id="index-message-top" class="container-480"><div id="index-message"></div></div>
    
    <form id="ajax-email-index" method="post" action="email-index-form.php" class="u-pull-left" novalidate>
    <div class="row">
      <input class="u-full-width label_better" data-new-placeholder="email" type="email" placeholder="Enter your email" name="email-c" id="email-c">
      <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
      <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
      <input class="button-primary" id="submit-c" type="submit" value="Get Started">
    </div>
    </form>
    
    <img id="orange-arrow" src="img1/orange-arrow.png"/>
    
</section>  
  
  <a class="btn" data-popup-open="popup-1" href="#">Open Popup #1</a>
 
<div class="popup" data-popup="popup-1">
    <div class="popup-inner">
        <h2>Wow! This is Awesome! (Popup #1)</h2>
        <p>Donec in volutpat nisi. In quam lectus, aliquet rhoncus cursus a, congue et arcu. Vestibulum tincidunt neque id nisi pulvinar aliquam. Nulla luctus luctus ipsum at ultricies. Nullam nec velit dui. Nullam sem eros, pulvinar sed pellentesque ac, feugiat et turpis. Donec gravida ipsum cursus massa malesuada tincidunt. Nullam finibus nunc mauris, quis semper neque ultrices in. Ut ac risus eget eros imperdiet posuere nec eu lectus.</p>
        <p><a data-popup-close="popup-1" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
    </div>
</div>
  
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
        <h4>Daily support</h4>
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
 
  
  
<div class="subscribe-me">
  <h2>Subscribe our Newsletter</h2>
  <a href="#close" class="sb-close-btn">x</a>
  <p>Subscribe to our mailing list to get updates to your email inbox</p>
  <form>
    <input type="email" placeholder="Email Address">
    <input type="submit" value="Sign up">
  </form>
</div>

  
	<script type="text/javascript">
		$(document).ready( function() {
			$(".subscribe-me").subscribeBetter({
                trigger: "onidle"
			});
		});

	</script>
  
  
  
  
<script>
  
  $(function() {
    //----- CLOSE
    $('[data-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('input#email-c').val('');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
        $('body').css('overflow','auto'); 
        e.preventDefault();
    });
  });
  
</script>
  
  
<!--  <script>  
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
  
</script>-->

<script src="js1/scale.fix.js"></script>
<script src="js1/formatter.js"></script>
  
  <script>
    new Formatter(document.getElementById('phone-number-a'), {
    'pattern': '({{999}}) {{999}} - {{9999}}',
    'persistent': false
  });
    
    new Formatter(document.getElementById('phone-number-b'), {
    'pattern': '({{999}}) {{999}} - {{9999}}',
    'persistent': false
  });
  </script>


<?php require("footers.php"); ?>
