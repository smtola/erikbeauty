<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{url('logo.png')}}" type="image/x-icon">
  <title>Erit Beauty</title>
  @vite('resources/css/app.css')

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .mySwiper_2{
      width: 100%;
      height: 100%;
    }
    .card-product{
      height:22em;
    }
  </style>
</head>
<body>
    @include('components.navbar')
  <main>
    <!-- Your application's main content -->
    @yield('content')
  </main>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    autoplay: {
        delay: 3000, // Slide duration in ms
        disableOnInteraction: false,
    },
    loop: true,
  });

  var swiper = new Swiper(".mySwiper_1", {
      effect: "fade",
      grabCursor: true,
      loop:true,
      autoplay: {
        delay: 500, // Slide duration in ms
        disableOnInteraction: false,
    },
  });
  
    var swiper = new Swiper(".mySwiper_2", {
      slidesPerView: 5,
      spaceBetween: 30,
      loop:true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  });
</script>
</body>
</html>