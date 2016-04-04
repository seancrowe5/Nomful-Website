<!DOCTYPE html>
<html lang="en">

<head>

<!-- title and meta -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="description" content="" />
<title>Header Resize On Scroll with Animations</title>
    
<!-- css -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="styles/style.css" />
    
  
<!-- js -->
<script src="js/classie.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>
</head>



<body>

<div id="wrapper">

<header>
    <div class="container clearfix">
        <h1 id="logo">
            LOGO
        </h1>
        <nav>
            <a href="">Lorem</a>
            <a href="">Ipsum</a>
            <a href="">Dolor</a>
        </nav>
    </div>
</header><!-- /header -->

<div id="main">
    <div id="content">
        <section>
            <div class="container">
                <h1>Header Resize On Scroll with Animations</h1>
                <p>Cupcake ipsum dolor sit amet lollipop. Macaroon candy cotton candy bear claw macaroon carrot cake pastry icing dessert. Cupcake pastry tart sesame snaps lollipop donut pie. Cookie apple pie toffee lemon drops jelly beans cheesecake sweet roll. Jelly-o soufflé donut candy canes wafer dragée sweet cheesecake. Macaroon caramels pie cookie gummi bears. Ice cream jelly-o toffee cookie gingerbread cookie. Soufflé fruitcake jelly-o jelly chupa chups jelly beans. Dragée marzipan pastry macaroon oat cake muffin soufflé topping liquorice. Jelly-o chocolate cake lollipop.</p>
                <p>Sugar plum muffin cookie pastry oat cake icing candy canes chocolate. Gummi bears chupa chups fruitcake dessert jelly. Muffin cookie ice cream soufflé pastry lollipop gingerbread sweet. Unerdwear.com bonbon candy marzipan bonbon gummies chocolate cake gummi bears powder. Unerdwear.com tart halvah chocolate cake dragée liquorice. Sugar plum chocolate bar pastry liquorice dragée jelly powder. Jelly tootsie roll applicake caramels. Marzipan candy tootsie roll donut. Gummies ice cream macaroon applicake.</p>
                <p>
                    <a href="http://www.callmenick.com/tutorials/create-an-animated-resizing-header-on-scroll">&laquo; Go back to this tutorial?</a><br>
                    <a href="http://www.callmenick.com/tutorials">&laquo; Go back to all tutorials?</a>
                </p>
            </div>
        </section>
        <section class="color">
            <div class="container">
                <h1>Cupcakes for the people!</h1>
                <p>Cupcake ipsum dolor sit amet lollipop. Macaroon candy cotton candy bear claw macaroon carrot cake pastry icing dessert. Cupcake pastry tart sesame snaps lollipop donut pie. Cookie apple pie toffee lemon drops jelly beans cheesecake sweet roll. Jelly-o soufflé donut candy canes wafer dragée sweet cheesecake. Macaroon caramels pie cookie gummi bears. Ice cream jelly-o toffee cookie gingerbread cookie. Soufflé fruitcake jelly-o jelly chupa chups jelly beans. Dragée marzipan pastry macaroon oat cake muffin soufflé topping liquorice. Jelly-o chocolate cake lollipop.</p>
                <p>Sugar plum muffin cookie pastry oat cake icing candy canes chocolate. Gummi bears chupa chups fruitcake dessert jelly. Muffin cookie ice cream soufflé pastry lollipop gingerbread sweet. Unerdwear.com bonbon candy marzipan bonbon gummies chocolate cake gummi bears powder. Unerdwear.com tart halvah chocolate cake dragée liquorice. Sugar plum chocolate bar pastry liquorice dragée jelly powder. Jelly tootsie roll applicake caramels. Marzipan candy tootsie roll donut. Gummies ice cream macaroon applicake.</p>
            </div>
        </section>
        <section>
            <div class="container">
                <h1>Chocolate, vanilla, and red velvet</h1>
                <p>Cupcake ipsum dolor sit amet lollipop. Macaroon candy cotton candy bear claw macaroon carrot cake pastry icing dessert. Cupcake pastry tart sesame snaps lollipop donut pie. Cookie apple pie toffee lemon drops jelly beans cheesecake sweet roll. Jelly-o soufflé donut candy canes wafer dragée sweet cheesecake. Macaroon caramels pie cookie gummi bears. Ice cream jelly-o toffee cookie gingerbread cookie. Soufflé fruitcake jelly-o jelly chupa chups jelly beans. Dragée marzipan pastry macaroon oat cake muffin soufflé topping liquorice. Jelly-o chocolate cake lollipop.</p>
                <p>Sugar plum muffin cookie pastry oat cake icing candy canes chocolate. Gummi bears chupa chups fruitcake dessert jelly. Muffin cookie ice cream soufflé pastry lollipop gingerbread sweet. Unerdwear.com bonbon candy marzipan bonbon gummies chocolate cake gummi bears powder. Unerdwear.com tart halvah chocolate cake dragée liquorice. Sugar plum chocolate bar pastry liquorice dragée jelly powder. Jelly tootsie roll applicake caramels. Marzipan candy tootsie roll donut. Gummies ice cream macaroon applicake.</p>
            </div>
        </section>
        <section class="color">
            <div class="container">
                <h1>Come to me!</h1>
                <p>Cupcake ipsum dolor sit amet lollipop. Macaroon candy cotton candy bear claw macaroon carrot cake pastry icing dessert. Cupcake pastry tart sesame snaps lollipop donut pie. Cookie apple pie toffee lemon drops jelly beans cheesecake sweet roll. Jelly-o soufflé donut candy canes wafer dragée sweet cheesecake. Macaroon caramels pie cookie gummi bears. Ice cream jelly-o toffee cookie gingerbread cookie. Soufflé fruitcake jelly-o jelly chupa chups jelly beans. Dragée marzipan pastry macaroon oat cake muffin soufflé topping liquorice. Jelly-o chocolate cake lollipop.</p>
                <p>Sugar plum muffin cookie pastry oat cake icing candy canes chocolate. Gummi bears chupa chups fruitcake dessert jelly. Muffin cookie ice cream soufflé pastry lollipop gingerbread sweet. Unerdwear.com bonbon candy marzipan bonbon gummies chocolate cake gummi bears powder. Unerdwear.com tart halvah chocolate cake dragée liquorice. Sugar plum chocolate bar pastry liquorice dragée jelly powder. Jelly tootsie roll applicake caramels. Marzipan candy tootsie roll donut. Gummies ice cream macaroon applicake.</p>
            </div>
        </section>
        <section>
            <div class="container">
                <h1>Sugar rush, oh my...</h1>
                <p>Cupcake ipsum dolor sit amet lollipop. Macaroon candy cotton candy bear claw macaroon carrot cake pastry icing dessert. Cupcake pastry tart sesame snaps lollipop donut pie. Cookie apple pie toffee lemon drops jelly beans cheesecake sweet roll. Jelly-o soufflé donut candy canes wafer dragée sweet cheesecake. Macaroon caramels pie cookie gummi bears. Ice cream jelly-o toffee cookie gingerbread cookie. Soufflé fruitcake jelly-o jelly chupa chups jelly beans. Dragée marzipan pastry macaroon oat cake muffin soufflé topping liquorice. Jelly-o chocolate cake lollipop.</p>
                <p>Sugar plum muffin cookie pastry oat cake icing candy canes chocolate. Gummi bears chupa chups fruitcake dessert jelly. Muffin cookie ice cream soufflé pastry lollipop gingerbread sweet. Unerdwear.com bonbon candy marzipan bonbon gummies chocolate cake gummi bears powder. Unerdwear.com tart halvah chocolate cake dragée liquorice. Sugar plum chocolate bar pastry liquorice dragée jelly powder. Jelly tootsie roll applicake caramels. Marzipan candy tootsie roll donut. Gummies ice cream macaroon applicake.</p>
            </div>
        </section>
    </div>
</div><!-- #main -->


<footer>
<div id="info-bar">
    <div class="container clearfix">
        <span class="all-tutorials"><a href="http://www.callmenick.com/tutorials">&larr; all tutorials</a></span>
        <span class="back-to-tutorial"><a href="http://www.callmenick.com/tutorials/create-an-animated-resizing-header-on-scroll">back to the tutorial</a></span>
    </div>
</div><!-- /#top-bar -->
</footer><!-- /footer -->



</div><!-- 

 header img {
  -webkit-transition: all ease-in-out 0.3s;
  -moz-transition: all ease-in-out 0.3s;
  -ms-transition: all ease-in-out 0.3s;
  -o-transition: all ease-in-out 0.3s;
  transition: all ease-in-out 0.3s;}
  header nav {
    display: inline-block;
    float: right; }
    header nav a {
      line-height: 150px;
      margin-left: 20px;
      color: #9fdbfc;
      font-weight: 700;
      font-size: 18px;
      -webkit-transition: all ease-in-out 0.3s;
      -moz-transition: all ease-in-out 0.3s;
      -ms-transition: all ease-in-out 0.3s;
      -o-transition: all ease-in-out 0.3s;
      transition: all ease-in-out 0.3s; }
      header nav a:hover {
        color: white; }
  header.smaller {
    height: 75px;
  background-color: green;}
    header.smaller img {
      height: 75px; }
    header.smaller nav a {
      line-height: 75px; }


header.mobile-show img {
  height: 65px;
  display: block;
  margin: 0 auto;
}

header.mobile-show {
  height: 65px;
}

.main-container {
  padding-top: 150px;
}


footer {
  width: 100%;
  height: 75px;
  overflow: hidden;
  background-color: green;
  float: left;
}

img.footer-logo {
  height: 45px;
  
}



  
      <script>
      $(document).foundation();
    </script>

    <script>

      function init() {
          window.addEventListener('scroll', function(e){
              var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                  shrinkOn = 40,
                  header = document.querySelector("header.mobile-hide");
              if (distanceY > shrinkOn) {
                  classie.add(header,"smaller");
              } else {
                  if (classie.has(header,"smaller")) {
                      classie.remove(header,"smaller");
                  }
              }
          });
      }
      window.onload = init();
  </script>
/#wrapper -->

</body>
</html>