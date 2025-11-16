$(function() {
    var num = 72; // the total number of images
    var currentImg = 1; // current image number

    function changeImage(imgNum) {
        currentImg = imgNum;
        $('#myImg').attr('src', './IMAGES/X-4/' + imgNum + '.jpg');
    }

    setInterval(function() {
        currentImg++;
        if (currentImg > num) {
            currentImg = 1;
        }
        changeImage(currentImg);
    }, 80); // Change image every 80 milliseconds (adjust as needed)
});

$(document).mousemove(function(e) {
    $('.cursor')
      .eq(0)
      .css({
        left: e.clientX,
        top: e.clientY,
      });
    setTimeout(function() {
      $('.cursor')
        .eq(1)
        .css({
          left: e.clientX, 
          top: e.clientY, 
        });
    }, 120);
  })
  
  $('a').on({
    mouseenter: function () { 
      $('.cursor').addClass('big'); 
    },
    mouseleave: function () { 
      $('.cursor').removeClass('big'); 
    }
  });
  
  