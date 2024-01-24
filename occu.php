<?php

session_start();
require_once('funcs.php');
loginCheck();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="occu.css">
    <title>Document</title>
</head>
<body>

<div class="top-top">
<div id="top">medi-side</div>
<div id="sub">職種で探す</div>
</div>

<!-- <div id="slideshow">
    <img src="3485503_s.jpg" alt="画像1">
    <img src="27646413_s.jpg" alt="画像2">
    <img src="28129454_s.jpg" alt="画像3">
    <img src="28190952_s.jpg" alt="画像4">
    <img src="28420016_s.jpg" alt="画像5">
    <img src="28429021_s.jpg" alt="画像6">
  </div> -->

    <nav class="menu">
   <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
   <label class="menu-open-button" for="menu-open">
    <span class="lines line-1"></span>
    <span class="lines line-2"></span>
    <span class="lines line-3"></span>
  </label>

   <a href="#" class="menu-item blue"> <i class="fa fa-anchor"></i> Dr</a>
   <a href="#" class="menu-item green"> <i class="fa fa-coffee"></i> Ns</a>
   <a href="#" class="menu-item red"> <i class="fa fa-heart"></i> PT</a>
   <a href="#" class="menu-item purple"> <i class="fa fa-microphone"></i> OT</a>
   <a href="#" class="menu-item orange"> <i class="fa fa-star"></i> ST</a>
   <a href="#" class="menu-item lightblue"> <i class="fa fa-diamond"></i> PHN</a>
</nav>

<!-- <script>
  const slideshow = document.getElementById('slideshow');
  const images = slideshow.getElementsByTagName('img');
  let currentIndex = 0;

  function changeImage() {
    images[currentIndex].style.opacity = 0;
    currentIndex = (currentIndex + 1) % images.length;
    images[currentIndex].style.opacity = 1;
  }

  setInterval(changeImage, 3000);
</script> -->


</body>
</html>