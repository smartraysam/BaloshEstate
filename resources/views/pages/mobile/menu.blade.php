<!DOCTYPE html>
<html class=" ">


<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Zak Mobile App : Cards</title>
    <meta content="Zak Mobile App" name="description" />
    <meta content="themepassion" name="author" />


    <!-- App Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="mobile/assets/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="mobile/assets/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="mobile/assets/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="mobile/assets/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="mobile/assets/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="mobile/assets/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="mobile/assets/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="mobile/assets/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="mobile/assets/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="mobile/assets/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="mobile/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="mobile/assets/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="mobile/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="mobile/assets/images/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="mobile/assets/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">






    <!-- CORE CSS FRAMEWORK - START -->
    <link href="mobile/assets/css/preloader.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <link href="mobile/assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="mobile/assets/fonts/mdi/materialdesignicons.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="mobile/assets/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection" />


    <!-- CORE CSS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->


    <link href="mobile/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" id="main-style" />
    <!-- CORE CSS TEMPLATE - END -->





    <style>
        .footer-menu ul {
            background: #FEFEFF;
            box-shadow: -4px -4px 20px rgba(5, 30, 71, 0.1);
            /* padding: 15px 0px 0 0px; */
        }



        .footer-menu li a.active i {
            color: #0A75BD;
            background-color: #F2F6FD;
            border-radius: 50%;
            height: 46px;
            width: 46px;
            line-height: 46px;
            margin-top: 0px;
            box-shadow: none ;
            -webkit-box-shadow: none ;
        }



        .footer-menu li i {
            display: block;
            font-size: 20px;
            line-height: 46px;
        }


        .z-depth-1,
        nav,
        .card-panel,
        .card,
        .toast,
        .btn,
        .btn-large,
        .btn-small,
        .btn-floating,
        .dropdown-content,
        .collapsible,
        .sidenav {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }


        body {
            background-color: #FEFEFF !important;
        }


        .chevy-view-menu {
            padding: 1rem;
            background: #EEEDED;
            border-radius: 20px;
        }

        .card.card-menu {
            margin: 10px;
            background-color: inherit !important;
        }


        .sec-tit:after {
            display: none;
        }


        .menu-logo {
            margin-bottom: 0px !important;
            text-align: center;
        }


        .menu-logo img {
            margin-bottom: 0px !important;
            width: 70% !important;
        }



        .panic-btn {
            border: none;
            border-radius: 50%;
            height: 100px;
            text-align: center;
            width: 100px;
            background: linear-gradient(135.96deg, #FF0808 0%, #BA0303 101.74%) !important;
            box-shadow: 0px 4px 25px rgba(141, 141, 141, 0.1) !important;
        }







        .powered-by {
            text-align: right;

        }


        .powered-by img {
            width: 35% !important;

        }


        .powered-by a {
            color: #000 !important;
            font-size: 10px !important;
            font-weight: 600;
            margin: -1rem 0 0 !important;
        }


        .card-action {
            border-bottom-left-radius: 20px !important;
            border-bottom-right-radius: 20px !important;
            text-align: center;
            background-color: #fff !important;
            filter: drop-shadow(4px 4px 20px rgba(0, 0, 0, 0.1));
            padding: 8px 24px !important;
            border: none !important;
            text-transform: capitalize;
        }


        .card .card-action a:not(.btn):not(.btn-large):not(.btn-small):not(.btn-large):not(.btn-floating) {
            letter-spacing: -0.5px;
            color: #0F2754;
            font-weight: 700;
            text-transform: capitalize;
            font-size: 10px;
            margin-right: 0px !important;
        }


        .card .card-action a:not(.btn):not(.btn-large):not(.btn-small):not(.btn-large):not(.btn-floating):active {
            letter-spacing: -0.5px;
            color: #0F2754 !important;

        }



        .card .card-image img {
            display: block;
            border-radius: 2px 2px 0 0;
            position: relative;
            left: 0;
            right: 0;
            top: 0;
            height: 95.14px;
            bottom: 0;
            width: 100%;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;

            filter: drop-shadow(4px 4px 20px rgba(0, 0, 0, 0.1));
        }

        .card-image:after {
            display: none;
        }


        .bot-20 {
            margin: 0px !important;
            color: #fff;
            font-size: 15px;
            text-shadow: 0px 2px 3px rgba(0, 0, 0, 0.1);
            line-height: 15px;
        }


        .bot-20 img {
            margin-top: 7px !important;
            margin-bottom: 7px !important;
        }



        .profile-info-brief {
            text-align: center;
        }

        .profile-info-brief .section {
            padding: 0px;
        }


        .pagetitle::after {
            display: none;

        }

        img.circle2 {
            width: 30% !important;
            border-radius: 50%;
        }


        p.name {
            margin: 0px !important;
            letter-spacing: -0.5px;
            color: #000000;
            font-weight: 700;
            font-size: 18px;
        }


        p.email {
            border-radius: 20px;
            background-color: #0A75BD;
            padding: 0px !important;
            width: 50%;
            margin: auto;
            text-align: center;
            letter-spacing: -0.5px;
            color: #FFFFFF;
            font-weight: 400;

        }


        .profile-info-date {
            text-align: left;
            padding: 0px !important;
            margin: 0px !important;
        }


        .profile-info-date .section {
            text-align: left;
            padding: 0px !important;

        }




        .infoarea-date {
            margin-bottom: -5rem;
            margin-left: 1rem !important;
        }


        p.weekday {
            margin: 0px;
            mix-blend-mode: normal;
            opacity: 0.5;
            color: #000000;
        }

        p.date {
            margin: 0px;
            letter-spacing: 0.5px;
            color: #000000;
            font-weight: 700;
            font-size: 20px;
        }


        .mdi.mdi-menu {
            color: #1C1B1F !important;
        }




        nav .navicon.nav-site-mode,
        nav .navicon.sidenav-trigger-left {

            margin: 10px 18px 10px -1px !important;
        }




        .invite-box {
            background: #0A75BD;
            border-radius: 15px;
            color: #fff;
            padding: 10px;
            /* margin-bottom: 24px; */
            display: block;
            /* letter-spacing: -0.408px; */
            font-size: 20px;
            font-weight: 700;
        }


        .visit-box {
            background: linear-gradient(135.96deg, #000000 0%, #1C201E 101.74%);
            border-radius: 15px;
            color: #fff;
            padding: 10px;
            /* margin-bottom: 24px; */
            display: block;
            /* letter-spacing: -0.408px; */
            font-size: 20px;
            font-weight: 700;
        }


        .modal-content {
            border-bottom: none;
        }



        .visit-box:hover,
        .visit-box:focus {
            background: #0A75BD;
            border-radius: 15px;
            color: #fff;
            padding: 10px;
            margin-bottom: 24px;
            display: block;
            letter-spacing: -0.408px;
            font-size: 20px;
            font-weight: 700;
        }


        .invite-box:hover,
        .invite-box:focus {
            background: #000;
            border-radius: 15px;
            color: #fff;
            padding: 10px;
            margin-bottom: 24px;
            display: block;
            letter-spacing: -0.408px;
            font-size: 20px;
            font-weight: 700;
        }


        .panic-check {
            border: 0.5px solid #88B3D0;
            border-radius: 10px;
            margin: 0 1rem;
            padding: 0 1rem;
        }


        .panic-image {

            background: #FF0808;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.25);
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-top: 10px;
            margin-left: auto;
            text-align: center;
            margin-right: auto;
        }



        .panic-image img {
            margin-top: 2rem;
            width: 50%;
        }



        .panic-modal {
            background: #FFFFFF;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
            border-radius: 15px 15px 0px 0px;
        }


        [type="checkbox"].filled-in+span:not(.lever):after {
            border-radius: 6px;
        }


        [type="checkbox"]+span:not(.lever) {
            position: relative;
            padding-left: 35px;
            color: #54595E !important;
            font-size: 18px !important;
            cursor: pointer;
            display: inline-block;
            height: 25px;
            line-height: 25px;
            font-size: 1rem;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }



        @media only screen and (max-width: 992px) {
            .modal {
                width: 90%;
            }
        }




        [type="checkbox"].filled-in:checked+span:not(.lever):after {
            border: 2px solid #0A75BD !important;
            background-color: #0A75BD !important;
        }

        .modal-overlay {
            background: rgba(255, 8, 8, 0.3) !important;
            opacity: unset !important;
        }



        .divider {
            background-color: #e0e0e0;
            width: 80%;
            margin: auto;
            text-align: center;
        }

        .modal .modal-content {
            padding: 10px 0 18px !important;
        }


        .modal-content h6 {
            color: #0A75BD;
            font-weight: 900;
        }
    </style>
















</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->


<body class="  html" data-header="" data-footer="" data-header_align="" data-menu_type="" data-menu="" data-menu_icons="" data-footer_type="" data-site_mode="" data-footer_menu="" data-footer_menu_style="">
    <div class="preloader-background">
        <div class="preloader-wrapper">
            <div id="preloader"></div>
        </div>
    </div>



    <!-- START navigation -->
    <nav class="fixedtop topbar navigation" role="navigation">
        <div class="nav-wrapper container">

            <a href="#" data-target="slide-nav" class="waves-effect waves-circle navicon sidenav-trigger sidenav-trigger-left show-on-large"><i class="mdi mdi-menu"></i></a>



            <a href="#" data-target="slide-settings" class="waves-effect waves-circle navicon right sidenav-trigger show-on-large pulse"><img src="mobile/assets/images/bell-icon.png" width="80%"></a>

            <!-- <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
        </div>
    </nav>
    <ul id="slide-nav" class="sidenav sidemenu">
        <li class="menu-close"><i class="mdi mdi-close"></i></li>
        <li class="user-wrap">
            <div class="user-view row">
                <!-- <div class="background">
        <img src="mobile/assets/images/office.jpg">
      </div> -->
                <div class="col s3 imgarea">
                    <a href="#user"><img class="circle" src="mobile/assets/images/user-37.jpg"></a>
                </div>
                <div class="col s9 infoarea">
                    <a href="#name"><span class="name">Veronica Justin</span></a>
                    <a href="#email"><span class="email">cherrysmith@gmail.com</span></a>
                </div>
            </div>
        </li>


        <li class="menulinks">
            <ul class="collapsible">
                <!-- SIDEBAR - START -->

                <!-- MAIN MENU - START -->

                <li class="lvl1 ">
                    <div class=" waves-effect ">
                        <a href="ui-pages-home.html">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="title">Notifications</span><span class="badge blue-grey lighten-3 badge-rounded">12</span>
                        </a>
                    </div>
                </li>
                <li class="lvl1 ">
                    <div class=" waves-effect ">
                        <a href="sub-apps.html">
                            <i class="mdi mdi-comment-outline"></i>
                            <span class="title">Messages</span><span class="badge blue-grey lighten-3 badge-rounded">2</span>
                        </a>
                    </div>
                </li>


                <div class="divider"></div>


                <li class="lvl1 ">
                    <div class=" waves-effect ">
                        <a href="sub-uielements.html">
                            <i class="mdi mdi-shape"></i>
                            <span class="title">Space Booking</span>
                        </a>
                    </div>
                </li>
                <li class="lvl1 ">
                    <div class=" waves-effect ">
                        <a href="sub-utilities-components.html">
                            <i class="mdi mdi-settings-outline"></i>
                            <span class="title">Settings</span>
                        </a>
                    </div>
                </li>


                <br>
                <div class="divider"></div>


                <li class="lvl1 ">
                    <div class=" waves-effect ">
                        <a href="sub-utilities-components.html">
                            <i class="mdi mdi-arrow-expand-left"></i>
                            <span class="title">Logout</span>
                        </a>
                    </div>
                </li>


                <!-- MAIN MENU - END -->



                <!--  SIDEBAR - END -->

        </li>
    </ul>
    </li>
    <li class="copy-spacer"></li>
    <li class="copy-wrap">
        <div class="copyright">&copy; Copyright @ Balosh</div>



        </ul>
        <!-- END navigation -->


        <ul id="slide-settings" class="sidenav sidesettings right fixed">
        <li class="menulinks">
            Notifications Here
        </li>


    </ul>
    </li>
    </ul>





    <div class="container profile-info-date">
        <div class="section">



            <div class="user-date row">


                <div class="col s6 infoarea-date">
                    <p class="weekday">Monday</p>
                    <p class="date">25 July</p>
                </div>
            </div>



        </div>
    </div>








    <div class="container profile-info-brief">
        <div class="section">



            <div class="user-view row">
                <!-- <div class="background">
                  <img src="mobile/assets/images/office.jpg">
                </div> -->
                <div class="col s12 imgarea">
                    <a href="#user"><img class="circle2" src="mobile/assets/images/user-37.jpg"></a>
                </div>

                <div class="col s12 infoarea">
                    <p class="name">Veronica Justin</p>
                    <p class="email">House No 101</p>
                </div>
            </div>


            <div class="divider"></div>
        </div>
    </div>






    <div class="container">
        <div class="section">


            <div class="row menu-logo ">
                <div class="col s12 pad-0">
                    <img src="mobile/assets/images/login-logo.png" class="bot-20 sec-tit  ">
                    <div class="card darken-1">

                    </div>

                </div>
            </div>


            <div class="row chevy-view-menu">
                <div class="col s6 pad-0">

                    <div class="card card-menu">
                        <div class="card-image">
                            <img src="mobile/assets/images/menu4.jpg">

                        </div>

                        <div class="card-action">
                            <a href="{{ route('mobile.visitor') }}">Visitor Center</a>
                        </div>
                    </div>
                </div>



                <div class="col s6 pad-0">

                    <div class="card card-menu ">
                        <div class="card-image">
                            <img src="mobile/assets/images/menu3.jpg">

                        </div>

                        <div class="card-action">
                            <a href="{{ route('mobile.message') }}">Mssg Center</a>
                        </div>
                    </div>
                </div>




                <div class="col s6 pad-0">

                    <div class="card card-menu">
                        <div class="card-image">
                            <img src="mobile/assets/images/menu1.jpg">

                        </div>

                        <div class="card-action">
                            <a href="{{ route('mobile.bills') }}">Bill Payment</a>
                        </div>
                    </div>
                </div>





                <div class="col s6 pad-0">

                    <div class="card card-menu">
                        <div class="card-image">
                            <img src="mobile/assets/images/menu2.jpg">

                        </div>

                        <div class="card-action">
                            <a href="{{ route('mobile.emergency') }}">Emergency</a>
                        </div>
                    </div>
                </div>
            </div>





            <div class="row panic-btn">
                <div class="col s12 pad-0">
                    <a class="modal-trigger" href="#modal2">
                        <h6 class="bot-20 sec-tit"><img src="mobile/assets/images/alarm-icon.png" alt=""> <br> Panic Button</h6>
                    </a>

                </div>

            </div>


            <!-- Modal Structure -->
            <div id="modal2" class="modal panic-modal">


                <div class="panic-image">
                    <img src="mobile/assets/images/panic-icon2.png" alt="">
                </div>

                <br>

                <div class="divider"></div>


                <div class="modal-content">
                    <h6 style="text-align:center ; text-transform:capitalize">Select Emergency Contact</h6>

                </div>



                <div class="row ">
                    <div class="col s12 pad-0">

                        <form action="#" class="panic-check">
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in">
                                    <span>Select All</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" checked="checked" class="filled-in">
                                    <span>Hospital</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in">
                                    <span>Fire fighters</span>
                                </label>
                            </p>

                        </form>

                    </div>
                </div>



                <div class="container profile-info-brief">
                    <div class="section">


                        <h6 style="text-align:center ; text-transform:capitalize; color: #000;">Send Panic Message?</h6>
                        <div class="user-view row">
                            <!-- <div class="background">
                      <img src="mobile/assets/images/office.jpg">
                    </div> -->


                            <div class="col s6 infoarea">
                                <div class=" z-depth-1 center">
                                    <a href="#!" class="invite-box show-box active-show" id="invite-btn">

                                        Yes
                                    </a>
                                </div>
                            </div>


                            <div class="col s6 infoarea">

                                <div class=" z-depth-1 center">
                                    <a href="#!" class="visit-box show-box" id="visits-btn">
                                        No
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>







            <div class="links powered-by">
                <a href="#" class='waves-effect'> powered by:
                </a> <img src="mobile/assets/images/logo.png" alt="">

            </div>



            <br><br>

        </div>
    </div>











    <div class="footer-menu">
        <ul>


            <li>
                <a href="{{ route('mobile.menu') }}" class="active"> <i class="mdi mdi-home-outline"></i>

                </a>
            </li>

            <li>
                <a href="{{ route('mobile.visitor') }}"> <i class="mdi mdi-qrcode-scan"></i>

                </a>
            </li>
            <li>
                <a href="{{ route('mobile.message') }}"> <i class="mdi 
                mdi-checkbox-multiple-blank-outline"></i>

                </a>
            </li>

            <li>
                <a href="{{ route('mobile.message') }}"> <i class="mdi mdi-email-outline"></i>

                </a>
            </li>
            <li>
                <a href="{{ route('mobile.profile') }}"> <i class="mdi mdi-account-outline"></i>

                </a>
            </li>

        </ul>
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
                    .then(function(reg) {
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
        $(".modal").modal();
    </script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


    <!-- CORE TEMPLATE JS - START -->
    <script src="mobile/assets/js/init.js"></script>
    <script src="mobile/assets/js/settings.js"></script>

    <script src="mobile/assets/js/scripts.js"></script>

    <!-- END CORE TEMPLATE JS - END -->


    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            $('.preloader-background').delay(10).fadeOut('slow');
        });
    </script>
</body>

</html>