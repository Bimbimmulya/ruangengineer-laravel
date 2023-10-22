<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- GSC -->
    <meta
      name="google-site-verification"
      content="Ukja0QBegXcRxEVhJZvJTUklR3kg4ZvYgWjUh_1mCgA"
    />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="title"
      content="Ruang Engineer: Jasa Pembuatan Website Profesional dengan Harga Murah"
    />
    <meta
      name="description"
      content="Proses pembuatan website cepat dan profesional dengan harga relatif murah, dapat anda temukan di Ruang Engineer"
    />
    <meta property="og:type" content="website" />
    <meta
      property="og:image"
      content="https://ruangengineer.com/assets/images/image-og-ruang-engineer.webp"
    />
    <meta property="og:locale" content="id_ID" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://www.ruangengineer.com/" />
    <link rel="icon" href="assets/images/fav-ico-re.png" type="image/x-icon" />
    <link
      rel="shortcut icon"
      href="assets/images/fav-ico-re.png"
      type="image/x-icon"
    />
    <meta name="author" content="ruangengineer.com" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
   
    <!-- bootstrap icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    {{-- Our Main Css --}}
    <link rel="stylesheet" href="../css/main-style.css">

    <!-- Slick CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <title>
      Ruang Engineer: Jasa Pembuatan Website Profesional dengan Harga Murah
    </title>
  </head>
  <body>
    <!-- popup whatsapps -->
    @include('partials.popup')
    <!-- Navbar -->
    @include('partials.nav')
    <!-- End Navbar -->
    @yield('content')
    {{-- Footer --}}
    @include('partials.footer')
    {{-- end Footer --}}

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- slick js -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}
    <!-- Our Script -->
    {{-- <script>
        $(document).ready(function(){
            $('.slider').slick({
                centerMode: true,   
                centerPadding: '80px',
                slidesToShow: 3,
                responsive: [
                  {
                    breakpoint: 768,
                    settings: {
                      arrows: true,
                      dots: true,
                      centerMode: true,
                      autoplay: true,
                      autoplaySpeed: 2500,
                      centerPadding: '40px',
                      slidesToShow: 3
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      arrows: true,
                      dots: true,
                      centerMode: true,
                      autoplay: true,
                      autoplaySpeed: 2500,
                      centerPadding: '0px',
                      slidesToShow: 1
                    }
                  }
                ],
                arrows: true,
                dots: true,
                fade: false,
                autoplay: true,
                autoplaySpeed: 2500,
            });
        });
    </script> --}}
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
      let swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      centeredSlides: false,
      slidesPerGroupSkip: 1,
      grabCursor: true,
      keyboard: {
        enabled: true,
      },
      autoplay: {
        delay: 3000,
      },
      breakpoints: {
        900: {
          slidesPerView: 3,
          spaceBetween: 20,
          slidesPerGroup: 1,
        },
      },
      // scrollbar: {
      //   el: ".swiper-scrollbar",
      // },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },

      });
    </script>

    <script>
      let swipers = new Swiper(".mySwiper1", {
      slidesPerView: 2,
      centeredSlides: false,
      slidesPerGroupSkip: 1,
      grabCursor: true,
      keyboard: {
        enabled: true,
      },
      autoplay: {
        delay: 3000,
      },
      breakpoints: {
        576: {
          slidesPerView: 4,
          spaceBetween: 20,
          slidesPerGroup: 1,
        },
      },
      navigation: {
        nextEl: ".swiper-button-nexts",
        prevEl: ".swiper-button-prevs",
      },
      pagination: {
        el: ".swiper-paginations",
        clickable: true,
      },

      });
    </script>
    

    <script src="../js/script.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>
