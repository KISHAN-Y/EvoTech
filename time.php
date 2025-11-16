<?php 
	include("header.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - time line</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800'>
<link rel="stylesheet" href="./CSS&JS/time.css">

</head>
<body>

<!-- partial:index.partial.html -->

<div class="container">
  <div class="timeline">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url(./IMAGES/Defender/10.jpg);" data-year="2011">
            <div class="swiper-slide-content">
              <span class="timeline-year">2011</span>
              <h4 class="timeline-title">Our nice super title</h4>
              <p class="timeline-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>  
        <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=11);" data-year="2012">
            <div class="swiper-slide-content">
              <span class="timeline-year">2012</span>
              <h4 class="timeline-title">Our nice super title</h4>
              <p class="timeline-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>  
        <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=11);" data-year="2013">
            <div class="swiper-slide-content">
              <span class="timeline-year">2013</span>
              <h4 class="timeline-title">Our nice super title</h4>
              <p class="timeline-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>  
        
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
<!-- partial -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js'>

  </script><script  src="./CSS&JS/time.js"></script>

</body>
</html>
