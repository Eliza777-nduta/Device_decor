<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Cover -->
  <main>
    <div class="hero">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/device.jpg" class="d-block w-80" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="images/case1.jpg" class="d-block w-80" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="images/laptop.jpg" class="d-block w-80" alt="Slide 3">
      </div>
      <div class="carousel-item">
        <img src="images/play.jpg" class="d-block w-80" alt="Slide 4">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>
              <a href="shop.php" class="btn1">View all products
              </a>
            <h1>
            
    </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Information</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">The brand</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">FAQs</a>
              </li>
             
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">Why buy from us</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
              
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Testimonials</a>
              </li>
              
            </ul>
          </div>

         <div class="footer-nav__col footer-nav__col--account">
				<div class="footer-nav__heading">Your account</div>
				<ul class="footer-nav__list">
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Sign in</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Register</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">View cart</a>
					</li>
				
				</ul>
			</div>


          <div class="footer-nav__col footer-nav__col--contacts">
				<div class="footer-nav__heading">Contact details</div>
				<address class="address">
				Location: Juja<br>
				180-182 Jkuat gate A, Juja.
			</address>
				<div class="phone">
					Telephone:
					<a class="phone__number">0742065518</a>
				</div>
				<div class="email">
					Email:
					<a href="mailto:support@yourwebsite.com" class="email__addr">support@devicedecor.com</a>
				</div>
			</div>

        </div>
      </div>

       <div class="banners">
        <div class="container clearfix">

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
           <a href="#" class="banner-social__link">
            <i class="icon-whatsapp"></i>
          </a>
          </div>

        </div>
      </div>

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; <?php echo date("Y");?> 2024&trade;
          </div>
<!--
          <div class="developer">
            Developed by Maina
          </div> -->

          <div class="designby">
            Design by Maina
          </div> 

        </div>
      </div>
    </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
