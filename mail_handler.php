<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Multi Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpeg" >
  <link href="assets/img/logo.jpeg" >

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Multi - v2.1.0
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <img class="img-fluid" src="assets/img/logo.jpeg" style="border-radius: 30px;width: 50px;">

      <h1 class="logo mr-auto"><a href="index.html">Gemsmptc</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!--  <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <!-- <li class="active"><a href="index.html">Home</a></li> -->
          <li><a href="index.html#about">What is MPTC</a></li>
          <li><a href="index.html#why-us">Why MPTC</a></li>
         <!--  <li><a href="#services">How MPTC Operates</a></li> -->
          <li><a href="index.html#cta">Who are they</a></li>
         <!--  <li><a href="index.html#portfolio">Portfolio</a></li> -->
          <!-- <li><a href="#team">Team</a></li> -->
          <li class="drop-down"><a href="#">Others</a>
            <ul>
              <li><a href="index.html#testimonials">Write Up & Testimonies</a></li>
              <!-- <li class="drop-down"> -->
               <!--  <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul> -->
             <!--  </li> -->
              <li><a href="index.html#portfolio">Portfolio</a></li>
              <li><a href="index.html#gallery">gallery</a></li>
              <li><a href="wheremptc.html">MPTC-Locations</a></li>
            </ul>
          </li>
          <li><a href="index.html#contact">Contact</a></li>
          <li><a href="index.html#faq">FAQ</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <!-- <a href="#about" class="get-started-btn">Get Started</a> -->

    </div>
  </header><!-- End Header -->


<!-- <button class="btn-primery"><a href="http://gemsmptc.org/">back</a></button> -->





<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='gemsmptc@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
<div class="container">
  <div class="jumbotron">
    <h1>Glory TO GOD</h1>      
    <p>Thanks for being awesome! We have received your message and would like to thank you for writing to us. ...</p>
  </div>
     
</div>
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>GEMSMPTC</h3>
              <p class="pb-3"><em>Equipping Local ChurchFor God's GLOCAL Mission</em></p>
              <p>
               Gems Action Centre,No 11, 13th Cross Street, <br>
                New Colony, Chromepet, Chennai, Tamil Nadu 600044<br><br>
                <strong>Phone:</strong> +91-9500012469<br>
                <strong>Email:</strong> gemsmptc@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.youtube.com/channel/UCounxJqrX_zUOrLJDpWKo-A" class="twitter"><i class="bx bxl-youtube"></i></a>
                <a href="https://www.facebook.com/mptc.mptc.35" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
             <li><i class="bx bx-chevron-right"></i> <a href="index.html#about">What is MPTC</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#why-us">Why MPTC</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#cta">Who are they</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#portfolio">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.youtube.com/playlist?list=PLbnSfuKOwkegOtv0B5fiflCAkN1bLQ0Zy">Reformation Bible study</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="https://www.youtube.com/playlist?list=PLbnSfuKOwkegGOLMpY7YQf5qrHD9A8CtS">God you reign</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="https://www.youtube.com/playlist?list=PLbnSfuKOwkeh4WG9bWg-pykwcrjLY0cE4">Missionl Sharing</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="https://www.youtube.com/playlist?list=PLbnSfuKOwkeg7qOWkYdPcJLYY9VUPPeDI">missional Organiszation sharing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.desiringgod.org/articles/all">Articals</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <div class="text-center">
            <img class="img-fluid" src="assets/img/logo.jpeg" style="border-radius: 25px;">
            <h4>Equipping Local Church</h4>
              <h4 style="margin-top: -10px">For God's GLOCAL Mission</h4>
            <!-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> -->
           <!--  <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
           </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span> gemsmptc.org</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/multi-responsive-bootstrap-template/ -->
        <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>