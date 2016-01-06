<?php require("headers.php"); ?>

<script>
    (function(b,r,a,n,c,h,_,s,d,k){if(!b[n]||!b[n]._q){for(;s<_.length;)c(h,_[s++]);d=r.createElement(a);d.async=1;d.src="https://cdn.branch.io/branch-v1.8.3.min.js";k=r.getElementsByTagName(a)[0];k.parentNode.insertBefore(d,k);b[n]=h}})(window,document,"script","branch",function(b,r){b[r]=function(){b._q.push([r,arguments])}},{_q:[],_v:1},"addListener applyCode banner closeBanner creditHistory credits data deepview deepviewCta first getCode init link logout redeem referrals removeListener sendSMS setIdentity track validateCode".split(" "), 0);
branch.init('key_test_mecNdlfYel5IvYJXZtBVIhaotynBT0K2'); 

          function sendSMS(form) {
              var phone = form.phone_number_a.value;
              var linkData = {
                  tags: [],
                  channel: 'Download Landing Page',
                  feature: 'TextMeTheApp',
                  data: {
                  }
              };
              var options = {};
              var callback = function(err, result) {
                if (err) {
                  alert("Sorry, we weren't able to send you a text.");
                }
              };
              branch.sendSMS(phone, linkData, options, callback);
          };
</script>

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
        <script src="phone-index-form.js"></script>
        <div id="branch-message-top" class="container-480"><div id="branch-message"></div></div>
      
        <form id="ajax-phone-index" onsubmit="sendSMS(this);" method="post" action="phone-index-form.php" novalidate>
        <div class="row">
          <input class="u-full-width label_better" data-new-placeholder="phone number" type="tel" placeholder="phone number" name="phone_number_a" id="phone_number_a">
          <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
          <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
          <input class="button-primary" type="submit" value="Find a coach">
        </div>
        </form>
      
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
    </div>
</div>
  
<section class="masthead masthead-testimonial">
  <div class="container masthead-testimonial-content">
    
    <div class="testimonial-box">
      <img class="testimonial-profile" src="img1/Jody.jpg">
      <div class="testimonial-stars-row">
        <img class="testimonial-stars" src="img1/star.png">
        <img class="testimonial-stars" src="img1/star.png">
        <img class="testimonial-stars" src="img1/star.png">
        <img class="testimonial-stars" src="img1/star.png">
        <img class="testimonial-stars" src="img1/star.png">
      </div>
      <h5>"The Nomful program allowed me to break my bad habits!"</h5>
      <h6>-Jody, XX</h6>
    </div>
    
  </div>
</section>
  
<section class="masthead masthead-eatingRight">
  <div class="container masthead-eatingRight-content">
    <h2 class="bold">Eating Right Can Be Easy</h2>
    <img class="eatingRight-meal" src="img1/iphone-meal.png"/>
    
    <div class="eatingRight-point">
      <div class="point-box tables">
        <div class="cells"><img class="point-box-img" src="img1/Ashley.jpg" /></div>
        <div class="cells"><p>I just have to track food with photos, not calories. And then my coach, Emily, gives me a personalized plan just for me.</p></div>
      </div>
    <p class="point-box-person">Ashley, 27</p>
    </div>
    
    
    <div class="eatingRight-point">
      <div class="point-box tables" id="point-box-green">
        <div class="cells"><img class="point-box-img" src="img1/Steph.jpg" /></div>
        <div class="cells"><p>With photos, I can see  what you're eating, when you're eating it, and how big your portions are. All I need to help re-align your diet!</p></div>
      </div>
    <p class="point-box-person">Coach Stephanie</p>
    </div>
    
    
  </div>
</section>
  
  
<section class="masthead masthead-coachIntro">
  <div class="container masthead-coachIntro-content">
    <h2 class="bold">Everyone is different. Our coaches have a wide range of specialties for you to choose from.</h2>
    
    <div class="coachIntro-box">
      <img src="img1/Brittany.jpg">
      <h4>Brittany C.</h4>
      <p>I was born and raised in upstate New York. After receiving my Bachelor's Degree in Nutrition and Dietetics from Syracuse University, I moved to South Carolina for a dietetic internship and have lived here ever since. I enjoy cooking, Pure Barre, blogging, renovating, and being on social media. I’m also a dog lover!</p>
    </div>
    
    <div class="coachIntro-box">
      <img src="img1/Emily.jpg">
      <h4>Emily G.</h4>
      <p>I come from a close-knit Irish family - youngest of seven kids! My passion for nutrition began when I was diagnosed with type 1 diabetes. I decided then that I wanted to help people like me, which is why I’m becoming a certified diabetes educator. I enjoy yoga, cooking, reading nutrition blogs, and binging on reality TV.</p>
    </div>
    
    <div class="coachIntro-box">
      <img src="img1/Amy.jpg">
      <h4>Amy D.</h4>
      <p>Born and raised in New Orleans, I've always had a passion for food. When I'm not helping people reach their health goals, I'm spending too much time browsing the aisles of Whole Foods, recipe testing for my blog, The Balanced Dietitian, trying new meals at local restaurants, or walking through beautiful Audubon Park!</p>
    </div>
    
    
    
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
    new Formatter(document.getElementById('phone_number_a'), {
    'pattern': '({{999}}) {{999}} - {{9999}}',
    'persistent': false
  });
    
    new Formatter(document.getElementById('phone-number-b'), {
    'pattern': '({{999}}) {{999}} - {{9999}}',
    'persistent': false
  });
  </script>


<?php require("footers.php"); ?>
