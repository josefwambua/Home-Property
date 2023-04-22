<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Homeland &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="homeland/https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="homeland/fonts/icomoon/style.css">

    <link rel="stylesheet" href="homeland/css/bootstrap.min.css">
    <link rel="stylesheet" href="homeland/css/magnific-popup.css">
    <link rel="stylesheet" href="homeland/css/jquery-ui.css">
    <link rel="stylesheet" href="homeland/css/owl.carousel.min.css">
    <link rel="stylesheet" href="homeland/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="homeland/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="homeland/css/mediaelementplayer.css">
    <link rel="stylesheet" href="homeland/css/animate.css">
    <link rel="stylesheet" href="homeland/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="homeland/css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="homeland/css/aos.css">

    <link rel="stylesheet" href="homeland/css/style.css">
    
  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
        @include('home.header')    
    </div>

    <div class="slide-one-item home-slider owl-carousel">
    @include('home.slider')
    </div>


    <div class="site-section site-section-sm pb-0">
      
    @include('home.houses')
      </div>
    </div>

    <div class="site-section">
    @include('home.why_choose_us')
        </div>
        <div class="site-section bg-light">
      @include('home.recent_blog')
      </div>

        <div class="site-section bg-light">
        @include('home.agents')
    </div>
    </div>
    
    <div>
    <footer class="site-footer">
     @include('home.footer')
     </footer>  
  </div>

  <script src="homeland/js/jquery-3.3.1.min.js"></script>
  <script src="homeland/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="homeland/js/jquery-ui.js"></script>
  <script src="homeland/js/popper.min.js"></script>
  <script src="homeland/js/bootstrap.min.js"></script>
  <script src="homeland/js/owl.carousel.min.js"></script>
  <script src="homeland/js/mediaelement-and-player.min.js"></script>
  <script src="homeland/js/jquery.stellar.min.js"></script>
  <script src="homeland/js/jquery.countdown.min.js"></script>
  <script src="homeland/js/jquery.magnific-popup.min.js"></script>
  <script src="homeland/js/bootstrap-datepicker.min.js"></script>
  <script src="homeland/js/aos.js"></script>

  <script src="homeland/js/main.js"></script>
    
  </body>
</html>