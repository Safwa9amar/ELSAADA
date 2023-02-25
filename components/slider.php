<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<link rel="stylesheet" href="./css/home_slider.css">
<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->

  <div class="swiper-wrapper">

    <!-- Slides -->
    <img class="swiper-slide" src="https://picsum.photos/1920/1080" alt="" />
    <img class="swiper-slide" src="../images/home_slider/2.jpg" alt="" />
    <img class="swiper-slide" src="../images/home_slider/3.jpg" alt="" />
    <img class="swiper-slide" src="../images/home_slider/4.jpg" alt="" />
    <img class="swiper-slide" src="../images/home_slider/5.jpg" alt="" />
    <img class="swiper-slide" src="../images/home_slider/6.jpg" alt="" />
    <img class="swiper-slide" src="../images/home_slider/7.jpg" alt="" />
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <!-- <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div> -->

  <!-- If we need scrollbar -->
  <!-- <div class="swiper-scrollbar"></div> -->
</div>

<script type="module">
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    delay: 500,
    autoplay: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    //   scrollbar: {
    //     el: '.swiper-scrollbar',
    //   },
  });
</script>