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
    <link href="mobile/assets/plugins/fullcalendar/vanillaCalendar.css" rel="stylesheet" type="text/css" />
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
            background: #FFFFFF;
            box-shadow: 0px 8px 12px rgba(74, 85, 104, 0.25);
            border-radius: 15px;
        }


        .section-form {
            padding: 0px !important;
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



        /* .profile-info-brief{
                text-align: center;
            } */

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
            font-weight: 900;
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
            background: #FFFFFF;
            box-shadow: 0px 10px 30px rgba(179, 179, 179, 0.2);
            border-radius: 10px;
        }



        .invite-box {

            border-radius: 15px;
            color: rgba(0, 0, 0, 0.26);
            ;
            padding: 15px;
            /* margin-bottom: 24px; */
            display: block;
            /* letter-spacing: -0.408px; */
            font-size: 25px;
            font-weight: 700;
        }


        .visit-box {

            border-radius: 15px;
            color: rgba(0, 0, 0, 0.26);
            ;
            padding: 15px;
            /* margin-bottom: 24px; */
            display: block;
            /* letter-spacing: -0.408px; */
            font-size: 25px;
            font-weight: 700;
        }


        /* .visit-box:hover, .visit-box:focus {
                background: #0A75BD;
                border-radius: 15px;
                color: #fff;
                padding: 15px;
                margin-bottom: 24px;
                display: block;
                letter-spacing: -0.408px;
                font-size: 25px;
                font-weight: 700;
            }


            .invite-box:hover, .invite-box:focus{
                
                border-radius: 15px;
                color: #fff;
                padding: 15px;
                margin-bottom: 24px;
                display: block;
                letter-spacing: -0.408px;
                font-size: 25px;
                font-weight: 700;
            } */



        .active-show {
            background: #0A75BD;
            color: #fff;
        }




        .input-field .prefix~input,
        .input-field .prefix~textarea,
        .input-field .prefix~label,
        .input-field .prefix~.validate~label,
        .input-field .prefix~.helper-text,
        .input-field .prefix~.autocomplete-content {
            margin-left: 0rem !important;
            width: 92%;
            width: 100%;
        }


        .input-field.col label {
            left: 3rem !important;
            color: #131313;
            font-weight: 500;
        }


        .input-field {
            margin-bottom: 0rem;
        }




        .btn-large {
            width: 100%;

            color: #FFFFFF;
            font-weight: 700;
            text-transform: capitalize;
            font-size: 20px;
            background: #0A75BD !important;
            border-radius: 15px !important;
            height: 48px;
            padding: 5px 14px;
        }



        .input-field .prefix {

            color: #1C1B1F;
        }



        #modal1 {
            background: #FFFFFF;
            border-radius: 15px;
        }


        .sticky-action {
            background: #0A75BD;
            border-radius: 15px;
            color: #fff;
            text-align: center;
            margin: 0px !important;
        }


        .card-content-visits {
            padding: 10px !important;

        }


        .activator {
            margin: 0px !important;
            font-size: 15px !important;
            font-weight: 400 !important;
            text-transform: capitalize !important;

        }


        .card-content-visits p {
            font-weight: 700;
        }



        .vl {
            border-left: 3px solid #fff;
            height: 50%;
            position: absolute;
            margin-top: 1.5rem;
            margin-bottom: -1rem;
            left: 50%;
            margin-left: -3px;
            top: 0;
        }


        .row-top-visit {
            margin-bottom: 0px !important;
        }


        .visit-status {
            background: #FFFFFF;
            box-shadow: 0px 3px 8px rgba(74, 85, 104, 0.07);
            border-radius: 20px;
            padding: 10px;
            font-size: 10px;
            font-weight: 600;
            color: #000;
        }

        .visit-active {
            background: #FFFFFF;
            box-shadow: 0px 3px 8px rgba(74, 85, 104, 0.07);
            border-radius: 20px;
            padding: 10px;
            font-size: 10px;
            color: #00844C;
            font-weight: 600;
        }


        .visit-expired {
            background: #FFFFFF;
            box-shadow: 0px 3px 8px rgba(74, 85, 104, 0.07);
            border-radius: 20px;
            font-weight: 600;
            padding: 10px;
            font-size: 10px;
            color: #FF0808;
        }



        .visit-status-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0px 3px 8px rgba(74, 85, 104, 0.07);
            text-align: left;
            margin: 10px 0 !important;
        }


        .visit-status-card-inner {
            padding: 6px;
        }



        .calendar-card {
            background: #FFFFFF;
            border-radius: 28px;
        }


        .today {
            background: #F8F8F8;
            border-radius: 8px;
            padding: 10px;
        }

        .last-8-days {
            background: #F8F8F8;
            border-radius: 8px;
            padding: 10px;
        }


        .last-month {
            background: #F8F8F8;
            border-radius: 8px;
            padding: 10px;
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

            <a href="#" data-target="" class="waves-effect waves-circle navicon sidenav-trigger-left back-button htmlmode show-on-large "><i class="mdi mdi-chevron-left" data-page=""></i></a>

            <a href="#" data-target="slide-settings" class="waves-effect waves-circle navicon right sidenav-trigger show-on-large pulse"><img src="mobile/assets/images/bell-icon.png" width="80%"></a>

            <!-- <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
        </div>
    </nav>


    <ul id="slide-settings" class="sidenav sidesettings right fixed">
        <li class="menulinks">
            Notifications Here
        </li>
    </ul>






    <div class="container profile-info-date">
        <div class="section">



            <div class="user-date row">


                <div class="col s12 infoarea-date">
                    <p class="date">Visitor Center</p>
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


                <div class="col s6 infoarea">
                    <div class=" z-depth-1 center">
                        <a href="#!" class="invite-box show-box active-show" id="invite-btn">

                            Invite
                        </a>
                    </div>
                </div>


                <div class="col s6 infoarea">

                    <div class=" z-depth-1 center">
                        <a href="#!" class="visit-box show-box" id="visits-btn">
                            Visits
                        </a>
                    </div>
                </div>
            </div>



        </div>
    </div>






    <div class="container">
        <div class="section section-form">



            <div class="row chevy-view-menu" id="invite-content">



                <div class="row">

                    <div class="input-field col s12">
                        <i class="mdi mdi-account prefix"></i>
                        <input id="name" type="text" class="validate" style="text-indent:2.5rem;">
                        <label for="name" class="input-label">Name</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="mdi mdi-phone-plus prefix"></i>
                        <input id="phone" type="text" class="validate" style="text-indent:2.5rem;">
                        <label for="phone">Number</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="mdi mdi-calendar-text prefix"></i>
                        <input type="text" id="datepicker-input2" class="datepicker datepicker2" style="text-indent:2.5rem;">
                        <label for="datepicker-input2">Date</label>
                    </div>



                    <div class="input-field col s12">
                        <i class="mdi mdi-clock prefix"></i>
                        <input type="text" id="timepicker-input1" class="timepicker timepicker1" style="text-indent:2.5rem;">
                        <label for="timepicker-input1">Time</label>
                    </div>


                    <div class="input-field col s12">
                        <i class="mdi mdi-clock prefix"></i>
                        <input id="period" type="text" class="validate" style="text-indent:2.5rem;">
                        <label for="period">Period</label>
                    </div>



                    <div class="input-field col s12" style="text-align: center;">
                        <a class="waves-effect waves-light btn-large bg-primary modal-trigger" href="#modal1" onblur='generateBarCode();'>Generate Code</a>
                    </div>


                    <div id="modal1" class="modal">
                        <div class="modal-content" style="border: none; text-align: center;">
                            <h5 style="text-align:center; text-transform: none; color: #000000; margin-top:0px !important">Successful! Passcode is</h5>
                            <h4 style="color: #000000;">33455</h4>


                            <img id='barcode' src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=100x100" alt="" title="HELLO" width="150" height="150" />



                            <div class="input-field col s12" style="text-align: center; margin: 3rem 0 5rem;">
                                <a class="waves-effect waves-light btn-large bg-primary modal-trigger"> <img src="mobile/assets/images/share-icon.png" width="10%" alt=""> &nbsp; Share</a>
                            </div>
                        </div>



                    </div>



                </div>
            </div>

        </div>



        <div class="row " id="visits-content">
            <div class="col s12 pad-0">

                <div class="card sticky-action">

                    <div class="card-content card-content-visits">

                        <div class="row row-top-visit">

                            <div class="col s6 pad-0">
                                <span class="card-title activator">Today's Visitor</span>
                                <p>20</p>
                            </div>

                            <div class="vl"></div>

                            <div class="col s6 pad-0">
                                <span class="card-title activator">Total Visitors</span>
                                <p>200</p>
                            </div>

                        </div>

                    </div>


                </div>

            </div>




            <!-- <div class="col-xl-12">
            <div class="card calendar-card">
                <div class="card-body">
                    <span class="header-title mt-0 mb-3 today">Today</span>   <span class="last-8-days">Last 8 days</span>  <span class="last-month mt-0 mb-3">Last month</span>                              
                    <div id="v-cal">
                        <div class="vcal-header">
                            <button class="vcal-btn" data-calendar-toggle="previous">
                                <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                                </svg>
                            </button>
            
                            <div class="vcal-header__label" data-calendar-label="month">
                                March 2017
                            </div>
            
            
                            <button class="vcal-btn" data-calendar-toggle="next">
                                <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="vcal-week">
                            <span>Mon</span>
                            <span>Tue</span>
                            <span>Wed</span>
                            <span>Thu</span>
                            <span>Fri</span>
                            <span>Sat</span>
                            <span>Sun</span>
                        </div>
                        <div class="vcal-body" data-calendar-area="month"></div>
                    </div>
                </div>
            </div>
        </div> -->






            <div class="col s12 visit-status-card">


                <div class="row visit-status-card-inner">

                    <div class="col s7 pad-0">

                        <div class="blog-info">
                            <h5 class="title" style="text-transform:capitalize ; color: #000; margin: 2.2rem 0 1.2rem 0;">Mr
                                Emmanuel</h5>

                            <span class="visit-status">Status</span>
                            <span class="visit-active">Active</span>
                            <span class="visit-expired">Expired</span>


                        </div>

                    </div>


                    <div class="col s5 pad-0">

                        <div class="blog-info" style="text-align: right;">

                            <h6 class="title" style="text-transform:capitalize ; color: #000; font-weight: 300;">2022/05/04 11:25
                            </h6>

                            <span style="color: #000;">Code: <span style="font-weight: 700;">505555</span> </span>



                        </div>

                    </div>

                </div>

            </div>


            <div class="col s12  visit-status-card ">


                <div class="row visit-status-card-inner">

                    <div class="col s7 pad-0 ">

                        <div class="blog-info">
                            <h5 class="title" style="text-transform:capitalize ; color: #000; margin: 2.2rem 0 1.2rem 0;">Mr
                                Emmanuel</h5>

                            <span class="visit-status">Status</span>
                            <span class="visit-active">Active</span>
                            <span class="visit-expired">Expired</span>


                        </div>

                    </div>


                    <div class="col s5 pad-0">

                        <div class="blog-info" style="text-align: right;">

                            <h6 class="title" style="text-transform:capitalize ; color: #000; font-weight: 300;">2022/05/04 11:25
                            </h6>

                            <span style="color: #000;">Code: <span style="font-weight: 700;">505555</span> </span>



                        </div>

                    </div>

                </div>

            </div>

        </div>





        <div class="links powered-by">
            <a href="#" class='waves-effect'> powered by:
            </a> <img src="mobile/assets/images/logo.png" alt="">

        </div>



        <br><br><br>

    </div>
    </div>











    <div class="footer-menu">
        <ul>


            <li>
                <a href="{{ route('mobile.menu') }}" > <i class="mdi mdi-home-outline"></i>

                </a>
            </li>

            <li>
                <a href="{{ route('mobile.visitor') }}" class="active"> <i class="mdi mdi-qrcode-scan"></i>

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




    <script>
        let tips = Array.from(document.getElementsByClassName('show-box'))

        tips.forEach(function(mov) {
            mov.addEventListener("click", handleClick);
        });

        function handleClick(event) {
            tips.forEach(function(val) {
                if (val == event.target) {
                    val.classList.add("active-show");
                } else {
                    val.classList.remove("active-show");
                }
            });
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
        $(document).ready(function() {
            $(".tabs").tabs();
        });
    </script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->






    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script type="text/javascript">
        $(".datepicker").datepicker();
        $(".datepicker.datepicker1").datepicker({
            autoClose: true
        });
        $(".datepicker.datepicker2").datepicker({
            format: "dddd, dd mmmm yyyy",
            autoClose: true
        });

        $(".datepicker.datepicker3").datepicker({
            isRTL: true,
            autoClose: true
        });
        $(".datepicker.datepicker4").datepicker({
            autoClose: true,
            firstDay: 1
        });

        $(".datepicker.datepicker5").datepicker({
            autoClose: true,
            showDaysInNextAndPreviousMonths: true
        });

        $(".datepicker.datepicker6").datepicker({
            autoClose: true,
            showClearBtn: true
        });
        $(".datepicker.datepicker7").datepicker({
            autoClose: true,
            format: "mm/dd/yyyy",
            autoClose: true
        });

        $(".datepicker.datepicker8").datepicker({
            autoClose: true,
            disableWeekends: true,
            firstDay: 1
        });
    </script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->




    <script type="text/javascript">
        $(".modal").modal();
    </script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->









    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script type="text/javascript">
        $(".timepicker").timepicker();
        $(".timepicker.timepicker1").timepicker({
            autoClose: true
        });

        $(".timepicker.timepicker2").timepicker({
            twelveHour: false,
            autoClose: true
        });

        $(".timepicker.timepicker3").timepicker({
            vibrate: false,
            autoClose: true
        });
        $(".timepicker.timepicker4").timepicker({
            autoClose: true,
            showClearBtn: true
        });
    </script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->





    <!-- Barcode -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">
        function generateBarCode() {
            var nric = $('#text').val();
            var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
            $('#barcode').attr('src', url);
        }
    </script>






    <!-- show and hide contents for buttons -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#visits-content").hide();

            $("#invite-btn").click(function() {
                $("#visits-content").hide();
                $("#invite-content").show();
            });
            $("#visits-btn").click(function() {
                $("#visits-content").show();
                $("#invite-content").hide();
            });
        });
    </script>





    <!-- calendar -->
    <script src="mobile/assets/plugins/fullcalendar/vanillaCalendar.js"></script>




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

<!-- Mirrored from www.jaybabani.com/zak-html/app/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2022 13:17:37 GMT -->

</html>