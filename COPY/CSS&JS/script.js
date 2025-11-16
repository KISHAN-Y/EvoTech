$(function() {

    var num = 72; // the total number of images
    var currentImg = 1; // current image number
    var loaderDuration = 1000; // fake loader duration in milliseconds (10 seconds)
  
    // Function to hide the fake loader
    function hideLoader() {
      $('#loader').hide();
    }
  
    // Preload all the images into hidden div
    for (var i = 1; i <= num; i++) {
        var img = document.createElement('img');
        img.src = './IMAGES/X-4/' + i + '.jpg';
        document.getElementById('preload-imgs').appendChild(img);
    }
  
    // Function to change image source
    function changeImage(imgNum) {
        // Set the current image number
        currentImg = imgNum;
        // Change the image src
        document.getElementById("myImg").src = './IMAGES/X-4/' + imgNum + '.jpg';
    }
  
    // Show loader for the specified duration
    $('#loader').show();
    setTimeout(hideLoader, loaderDuration);
  
    // Automatically rotate the image every 3 seconds
    setInterval(function() {
        currentImg++;
        if (currentImg > num) {
            currentImg = 1;
        }
        changeImage(currentImg);
    }, 80); // Change image every 80 milliseconds (adjust as needed)
  });
  