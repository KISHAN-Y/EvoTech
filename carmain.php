<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.css"/>
    <script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>
    <script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>
    <style>
    /* Change the color of the cursor elements to #0f0f0f */
    .mf-cursor,
    .mf-cursor-inner,
    .mf-cursor-text,
    .mf-cursor-media {
      color: #FFFFFF !important;
    }
  </style>
    <title>SHOW CASE</title>
</head>
<body>
    <?php include("car1.php");?>
    <?php include("car2.php");?>
    <?php include("car3.php");?>
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

