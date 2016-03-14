<?php 
require("headers.php");
require_once('./config.php');
?>

<section class="masthead-top">
  <div class="container masthead-top-content">
    <h1 id="top-headline">A nutrition coach in your pocket</h1>
    
    <h5 id="subline">Daily accountability and support from an expert in nutrition while you shop, cook, eat, and exercise.</h5>
    
</section>  


  
<section class="masthead masthead-testimonial">
  <div class="container masthead-testimonial-content">
    
    <div class="testimonial-box">
      <img class="testimonial-profile" src="/../img1/chelsea.png">
      <div class="testimonial-stars-row">
        <img class="testimonial-stars" src="/../img1/star.png">
        <img class="testimonial-stars" src="/../img1/star.png">
        <img class="testimonial-stars" src="/../img1/star.png">
        <img class="testimonial-stars" src="/../img1/star.png">
        <img class="testimonial-stars" src="/../img1/star.png">
      </div>
      <h5>"The Nomful program allowed me to break my bad habits!"</h5>
      <h6>-Chelsea, 29</h6>
    </div>
    
  </div>
</section>
  
<section class="masthead masthead-eatingRight">
  <div class="container masthead-eatingRight-content">
    <h2 class="bold">Eating Right Can Be Easy</h2>
    <img class="eatingRight-meal" src="/../img1/iphone-meal.png"/>
    
    <div class="eatingRight-point">
      <div class="point-box tables">
        <div class="cells"><img class="point-box-img" src="/../img1/Ashley.jpg" /></div>
        <div class="cells"><p>I just have to track food with photos, not calories. And then my coach, Emily, gives me a personalized plan just for me.</p></div>
      </div>
    <p class="point-box-person">Ashley, 27</p>
    </div>
    
    
    <div class="eatingRight-point">
      <div class="point-box tables" id="point-box-green">
        <div class="cells"><img class="point-box-img" src="/../img1/Steph.jpg" /></div>
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
      <img src="/../img1/Brittany.jpg">
      <h4>Brittany C.</h4>
      <p>I was born and raised in upstate New York. After receiving my Bachelor's Degree in Nutrition and Dietetics from Syracuse University, I moved to South Carolina for a dietetic internship and have lived here ever since. I enjoy cooking, Pure Barre, blogging, renovating, and being on social media. I’m also a dog lover!</p>
      
      <ul class="coach-specialties">
        <li>Weight Mgmt</li>
        <li>Diabetes Mgt</li>
        <li>Heart Health</li>
        <li>Celiac Diets</li>
        <li>Vegetarian</li>
        <li>Whole Foods</li>
      </ul>
    </div>
    
    <div class="coachIntro-box">
      <img src="/../img1/Emily.jpg">
      <h4>Emily G.</h4>
      <p>I come from a close-knit Irish family - youngest of seven kids! My passion for nutrition began when I was diagnosed with type 1 diabetes. I decided then that I wanted to help people like me, which is why I’m becoming a certified diabetes educator. I enjoy yoga, cooking, reading nutrition blogs, and binging on reality TV.</p>
      
      <ul class="coach-specialties">
        <li>Diabetes Mgt</li>
        <li>Heart Health</li>
        <li>Clean Eating</li>
        <li>Weight Mgmt</li>
        <li>GI Disorders</li>
        <li>Vegetarian</li>
      </ul>
    </div>
    
    <div class="coachIntro-box">
      <img src="/../img1/Amy.jpg">
      <h4>Amy D.</h4>
      <p>Born and raised in New Orleans, I've always had a passion for food. When I'm not helping people reach their health goals, I'm spending too much time browsing the aisles of Whole Foods, recipe testing for my blog, The Balanced Dietitian, trying new meals at local restaurants, or walking through beautiful Audubon Park!</p>
      
      <ul class="coach-specialties">
        <li>Weight Mgmt</li>
        <li>Gluten Free</li>
        <li>Dairy Free</li>
        <li>Clean Eating</li>
        <li>Low Glycemic</li>
        <li>Mediter Diet</li>
      </ul>
    </div>
  </div>
</section>
  
  
<section class="masthead masthead-join">
    <div id="bootcamp">
      <h4>12-Week Boot Camp</h4>
      <h2>$199</h2>
      <ul class="join-props">
        <li>Complete Personalized Evaluation</li>
        <li>Regular phone assessments</li>
        <li>Daily accountability</li>
        <li>Quick meal sharing</li>
        <li>Weekly progress tracking</li>
      </ul>
      <button class="button-primary join-button">Get Started</button>
    </div>
  </div>
</section> 

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Nomful 12-week Bootcamp"
          data-amount="100"
          data-locale="auto"></script>
</form>

<?php require("footers.php"); ?>
