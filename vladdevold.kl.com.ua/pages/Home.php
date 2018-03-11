<?php
    $title = "Home";
    function createContent() {
?>


<!DOCTYPE html>
<html>
<head>
  <title>FRONTEND RUSSIA/Background Video</title>
  <meta charset="UTF-8" />
   <style>
      #d1,#d2
      {
        width:100%;
        height: 700px;
        background-size: 100%;
        background-repeat: no-repeat !important;
      }
    </style>
</head>
<body>
    <div id="d1"><div id="d2"></div></div>
  	<script>
    var images=[];
//    images.push('./img/logo7.jpg');
    images.push('./img/logo2.jpg');
    images.push('./img/logo3.jpg');
    images.push('./img/logo4.jpg');
    images.push('./img/logo6.jpg');
    images.push('./img/logo8.jpg');

    function hideImage(el)
    {
        var op=1;
        var m=setInterval(function(){
          el.style.opacity=op;
          op-=0.01;
          if(op<0)
          {
              clearInterval(m);
          }
        },20);
    }

    SlideShow(images);

    function SlideShow(images)
    {
      var imgtop=0, imgbottom=1;
      var eltop=document.getElementById('d2');
      var elbottom=document.getElementById('d1');
      eltop.style.background='url('+images[imgtop]+')';
      elbottom.style.background='url('+images[imgbottom]+')';
      eltop.style.backgroundSize = " 100%";
      elbottom.style.backgroundSize = " 100%";

      setInterval(function(){
        eltop.style.background='url('+images[imgtop]+')';
        eltop.style.backgroundSize = " 100%";
        eltop.style.opacity=1;
        elbottom.style.background='url('+images[imgbottom]+')';
        elbottom.style.backgroundSize = " 100%";
        hideImage(eltop);
        imgtop=imgbottom;
        imgbottom=(imgbottom+1)%images.length;
      },3000);

    }
  	</script>
</body>
</html>



<?php 
    }
?>
	