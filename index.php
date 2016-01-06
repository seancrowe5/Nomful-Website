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
   
<div class="popup" data-popup="popup-1">
    <div class="popup-inner">
        <h2>Wow! This is Awesome! (Popup #1)</h2>
        <p>Donec in volutpat nisi. In quam lectus, aliquet rhoncus cursus a, congue et arcu. Vestibulum tincidunt neque id nisi pulvinar aliquam. Nulla luctus luctus ipsum at ultricies. Nullam nec velit dui. Nullam sem eros, pulvinar sed pellentesque ac, feugiat et turpis. Donec gravida ipsum cursus massa malesuada tincidunt. Nullam finibus nunc mauris, quis semper neque ultrices in. Ut ac risus eget eros imperdiet posuere nec eu lectus.</p>
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
    </div>
</div>
  
<section class="masthead masthead-space">
  <div class="container">
    
  </div>
</section>
  
<section class="masthead masthead-eatingRight">
  <div class="container masthead-eatingRight-content">
    <h2 class="bold">Eating Right Can Be Easy</h2>
    <img class="eatingRight-meal" src="img1/iphone-meal.png"/>
    
    <div class="eatingRight-point">
      <div class="point-box tables">
        <div class="cells"><img class="point-box-img" src="img1/Ashley.png" /></div>
        <div class="cells"><p>I just have to track food with photos, not calories. And then my coach, Emily, gives me a personalized plan just for me.</p></div>
      </div>
    </div>
    
    <div class="eatingRight-point">
      <div class="point-box tables" id="point-box-green">
        <div class="cells"><img class="point-box-img" src="img1/emily.png" /></div>
        <div class="cells"><p>With photos, I can see  what you're eating, when you're eating it, and how big your portions are. All I need to help re-align your diet!</p></div>
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
  <h2>Stay in touch!</h2>
  <a href="#close" class="sb-close-btn">x</a>
  <p>Promotions, fun food things, and stories.</p>
  <script src="email-popup-form.js"></script>
    <div id="popup-message-top" class="container-480"><div id="popup-message"></div></div>
    
    <form id="ajax-email-popup" method="post" action="email-popup-form.php" novalidate>
    <div class="row">
      <input class="u-full-width" type="email" placeholder="Enter your email" name="email-popup" id="email-popup">
      <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
      <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
      <input class="button-primary" id="submit-popup" type="submit" value="Sign up">
    </div>
    </form>
</div>

  
	<script type="text/javascript">
		$(document).ready( function() {
			$(".subscribe-me").subscribeBetter({
                trigger: "onidle",
                delay: 100
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
