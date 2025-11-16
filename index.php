<?php 
	include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>360 Degree Image Rotation</title>
  <link rel="stylesheet" href="./CSS&JS/style.css">
  <link rel="stylesheet" href="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.css"/>
  <style>
    /* Change the color of the cursor elements to #0f0f0f */
    .mf-cursor,
    .mf-cursor-inner,
    .mf-cursor-text,
    .mf-cursor-media {
      color: #FFD700 !important;
    }
  </style>
  <script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
  <script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>
</head>
<body>
    <div class="container">
        <div id="scroll-div" class="show-image" data-cursor-img="./IMAGES/X-4/SCROLL.jpg">
            <h1>BMW X-4 BMW X-4</h1>
            <h1>BMW X-4 BMW X-4</h1>
            <h1>BMW X-4 BMW X-4</h1>
            <h1>BMW X-4 BMW X-4</h1>
          </div>
        <div class="img360">
            <img id="myImg" src="./IMAGES/X-4/1.jpg" />
        </div>
        <div id="scroll-div2" class="show-image" data-cursor-img="./IMAGES/X-4/SCROLL.jpg">
            <h1>BMW X-4 BMW X-4</h1>
            <h1>BMW X-4 BMW X-4</h1>
            <h1>BMW X-4 BMW X-4</h1>
            <h1>BMW X-4 BMW X-4</h1>
          </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./CSS&JS/script.js"></script>
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
