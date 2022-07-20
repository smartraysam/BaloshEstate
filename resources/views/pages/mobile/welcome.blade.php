<!DOCTYPE html>
<html class=" ">

<!-- Mirrored from www.jaybabani.com/zak-html/app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2022 13:15:27 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <!-- 
         * @Package: Zak mobile App
         * @Author: themepassion
         * @Version: 1.0
        -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Zak Mobile App : </title>
  <meta content="Zak Mobile App" name="description" />
  <meta content="themepassion" name="author" />


  <!-- App Icons -->
  <link rel="apple-touch-icon" sizes="57x57" href="mobile/assets/images/logo.png">
    <link rel="apple-touch-icon" sizes="60x60" href="mobile/assets/images/logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="mobile/assets/images/logo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="mobile/assets/images/logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="mobile/assets/images/logo.png">
    <link rel="apple-touch-icon" sizes="120x120" href="mobile/assets/images/logo.png">
    <link rel="apple-touch-icon" sizes="144x144" href="mobile/assets/images/logo.png">
    <link rel="apple-touch-icon" sizes="152x152" href="mobile/assets/images/logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="mobile/assets/images/logo.png">
    <link rel="icon" type="image/png" sizes="192x192" href="mobile/assets/images/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="mobile/assets/images/logo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="mobile/assets/images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="mobile/assets/images/logo.png">
    <link rel="manifest" href="mobile/assets/images/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="mobile/assets/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">



  <style>
    .isfullscreen {
      background: rgba(0, 0, 0, 0.77);
      ;
    }


    .index-start .btn-large {
      width: 80%;
      margin: 0 10%;
      border-radius: 15px;
      padding: 10px 14px;
      padding-bottom: 40px;
    }


    .btn,
    .btn-large,
    .btn-small,
    .btn-floating {
      background: #FF8C2E !important;


    }


    .welcome-logo.index-welcome {
      position: relative;
      z-index: 2;
      margin: 15rem 0 !important;
    }



    .welcome-text h2{
      color: #fff;
      font-style: normal;
      font-weight: 700;
      font-size: 25px !important;
      line-height: 22px;
      margin: 1rem 0 3rem 0 !important;
    }






  </style>




  <!-- CORE CSS FRAMEWORK - START -->
  <link href="mobile/assets/css/preloader.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <link href="mobile/assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="mobile/assets/fonts/mdi/materialdesignicons.min.css" type="text/css" rel="stylesheet"
    media="screen,projection" />
  <link href="mobile/assets/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
    media="screen,projection" />


  <!-- CORE CSS FRAMEWORK - END -->

  <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
  <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

  <!-- CORE CSS TEMPLATE - START -->


  <link href="mobile/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" id="main-style" />
  <!-- CORE CSS TEMPLATE - END -->



</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->


<body class="  ishome  isfullscreen  html" data-header="light" data-footer="dark" data-header_align="center"
  data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light"
  data-footer_menu="show" data-footer_menu_style="light">


  <div class="preloader-background">
    <div class="preloader-wrapper">
      <div id="preloader"></div>
    </div>
  </div>












  <h1 class="white-text center welcome-logo index-welcome"><img src="mobile/assets/images/play.png" alt=""></h1>

  
 


  

 

  <div class="center index-start">
    <div class="welcome-text">
      <h2 >Welcome</h2>
    </div>
    <a href="{{ route('mobile.home') }}" class='waves-light btn-large bg-primary'> Continue
    </a>
  </div>
















  <!-- PWA Service Worker Code -->

  <script type="text/javascript">
    // This is the "Offline copy of pages" service worker

    // Add this below content to your HTML page, or add the js file to your page at the very top to register service worker

    // Check compatibility for the browser we're running this in
    if ("serviceWorker" in navigator) {
      if (navigator.serviceWorker.controller) {
        console.log("[PWA Builder] active service worker found, no need to register");
      } else {
        // Register the service worker
        navigator.serviceWorker
          .register("pwabuilder-sw.js", {
            scope: "./"
          })
          .then(function (reg) {
            console.log("[PWA Builder] Service worker has been registered for scope: " + reg.scope);
          });
      }
    }

  </script>


  <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

  <!-- CORE JS FRAMEWORK - START -->
  <script src="mobile/assets/js/jquery-2.2.4.min.js"></script>
  <script src="mobile/assets/js/materialize.js"></script>
  <script src="mobile/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <!-- CORE JS FRAMEWORK - END -->


  <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
  <script type="text/javascript">
    $(document).ready(function () {

      $(".carousel-fullscreen.carousel-slider").carousel({
        fullWidth: true,
        indicators: false,
      }).css("height", $(window).height());
      setTimeout(autoplay, 3500);


    });   </script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


  <!-- CORE TEMPLATE JS - START -->
  <script src="mobile/assets/js/init.js"></script>
  <script src="mobile/assets/js/settings.js"></script>

  <script src="mobile/assets/js/scripts.js"></script>

  <!-- END CORE TEMPLATE JS - END -->


  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
      $('.preloader-background').delay(10).fadeOut('slow');
    });
  </script>
</body>

<!-- Mirrored from www.jaybabani.com/zak-html/app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2022 13:15:40 GMT -->

</html>