<?php 
	include("header.php");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - ScrollSmoother exploration - Cassie Evans</title>
  <link rel="stylesheet" href="./CSS&JS/part2.css">
  <link rel="stylesheet" href="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.css"/>
  <script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
  <script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>
  <style>
    /* Change the color of the cursor elements to #0f0f0f */
    .mf-cursor,
    .mf-cursor-inner,
    
    .mf-cursor-media {
      color: #fff !important;
      font-size: 20px !important;
    }
    .mf-cursor-text{
      color: red !important;
      font-weight: 900!important;
    }
  </style>
</head>
<body>
  
<!-- partial:index.partial.html -->
<div id="wrapper">
 <section id="content">
  <!--  smooth Customs biz goes in here -->
  <div class="heading" aria-hidden="true" data-cursor-text="Welcome to" data-cursor-stick>
   <p >EvoTech</p>
   <br><br><br><br>
   <div class="text-container" >
    <p >Customs</p>
    <p data-speed="0.95" >Customs</p>
    <p data-speed="0.9" >Customs</p>
    <p data-speed="0.85" >Customs</p>
    <p data-speed="0.8" >Customs</p>
    <p data-speed="0.75" >Customs</p>
    <p data-speed="0.7" >Customs</p>
   </div>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  
  <section class="staggered container">

    <div class="staggered_text">
     <div class="flow content">
      <h2>Add some lag (the good kind!)</h2>
      <p>loosen the connection to the scroll to give a feeling of 'follow through.'</p>
     </div>
 
    </div>
    <a class="cursor-link"> 
      <div class="staggered_demo">
        <h3 id="split-stagger">stagger...</h3>
      </div>
    </a>
    <a class="cursor-link" href="time.php" > 
      <div class="staggered_demo" class="show-image" data-cursor-img="./IMAGES/X-4/SCROLL.jpg"> 
        <h3 id="split-stagger">Back In The Time...</h3>
      </div>
    </a>
    
  </section>

</section>
</div>
<script src='https://assets.codepen.io/16327/gsap-latest-beta.min.js?r=v3.11.3'></script>
<script src='https://assets.codepen.io/16327/ScrollTrigger.min.js'></script>
<script src='https://assets.codepen.io/16327/ScrollSmoother.min.js?v=94387867'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://assets.codepen.io/16327/SplitText3.min.js'></script><script  src="./CSS&JS/part-2.js"></script>
<script>
      const cursor = new MouseFollower({
        el: null,
        // container: document.body,
        className: "mf-cursor",
        innerClassName: "mf-cursor-inner",
        textClassName: "mf-cursor-text",
        mediaClassName: "mf-cursor-media",
        mediaBoxClassName: "mf-cursor-media-box",
        iconSvgClassName: "mf-svgsprite",
        iconSvgNamePrefix: "-",
        iconSvgSrc: "",
        dataAttr: "cursor",
        hiddenState: "-hidden",
        textState: "-text",
        iconState: "-icon",
        activeState: "-active",
        mediaState: "-media",
        stateDetection: {
          "-pointer": "a,button",
          "-hidden": "iframe",
        },
        visible: true,
        visibleOnState: false,
        speed: 0.55,
        ease: "expo.out",
        overwrite: true,
        skewing: 0,
        skewingText: 0,
        skewingIcon: 2,
        skewingMedia: 2,
        skewingDelta: 0.001,
        skewingDeltaMax: 0.15,
        stickDelta: 0.15,
        showTimeout: 20,
        hideOnLeave: true,
        hideTimeout: 300,
        hideMediaTimeout: 300,
      });
    </script>
</body>
</html>

