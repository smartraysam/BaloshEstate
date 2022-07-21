<!DOCTYPE html>
<html class=" ">
    

<head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
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
    <link href="mobile/assets/css-3/style.css" rel="stylesheet" type="text/css">
    <link rel="manifest" href="mobile/assets/images/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="mobile/assets/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">






        <!-- CORE CSS FRAMEWORK - START -->
        <link href="mobile/assets/css/preloader.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="mobile/assets/plugins/fullcalendar/vanillaCalendar.css" rel="stylesheet" type="text/css"  />
        <link href="mobile/assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="mobile/assets/fonts/mdi/materialdesignicons.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="mobile/assets/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection"/>


        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
                <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

        <!-- CORE CSS TEMPLATE - START -->

        
                <link href="mobile/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" id="main-style"/>
        <!-- CORE CSS TEMPLATE - END -->

    



        <style>
            .footer-menu ul{
                background: #FEFEFF;
                box-shadow: -4px -4px 20px rgba(5, 30, 71, 0.1);
                /* padding: 15px 0px 0 0px; */
   
            }


            .z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-small, .btn-floating, .dropdown-content, .collapsible, .sidenav {
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }


            body{
                background-color: #FEFEFF !important;
            }


            .chevy-view-menu{
                padding: 1rem;
                background: #FFFFFF;
                box-shadow: 0px 8px 12px rgba(74, 85, 104, 0.25);
                border-radius: 15px;
                /* display: none !important; */
            }


            .section-form{
                padding: 0px !important;
            }

            .card.card-menu{
                margin: 10px;
                background-color: inherit !important;
            }


            .sec-tit:after {
                display: none;
            }


            .menu-logo{
                margin-bottom: 0px !important;
                text-align: center;
            }


            .menu-logo img{
                margin-bottom: 0px !important;
                width: 70% !important;
            }



            .panic-btn{
                border: none;
                border-radius: 50%;
                height:100px;
                text-align: center;
                width:100px;
                background: linear-gradient(135.96deg, #FF0808 0%, #BA0303 101.74%) !important;
                box-shadow: 0px 4px 25px rgba(141, 141, 141, 0.1)  !important;
            }







            .powered-by{
            text-align: right;
            
            }


            .powered-by img{
                width: 35% !important;
                
            }


            .powered-by a{
                color: #000 !important;
                font-size: 10px !important;
                font-weight: 600;
                margin:-1rem 0 0 !important;
            }


            .card-action{
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
                border-top-right-radius:20px ;

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


            .bot-20 img{
                margin-top: 7px !important;
                margin-bottom: 7px !important;
            }



            /* .profile-info-brief{
                text-align: center;
            } */

            .profile-info-brief .section{
                padding: 0px ;
            }


            .pagetitle::after {
                display: none;
                
            }

            img.circle2{
                width: 30% !important;
                border-radius: 50%;
            }


            p.name{
                margin: 0px !important;
                letter-spacing: -0.5px;
                color: #000000;
                font-weight: 900;
                font-size: 18px;
            }
          

            p.email{
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


            .profile-info-date{
                text-align: left;
                padding: 0px !important;
                margin: 0px !important;
            }


            .profile-info-date .section{
                text-align: left;
                padding: 0px !important;
                
            }

           


            .infoarea-date{
                margin-left: 1rem !important;
            }


            p.weekday{
                margin: 0px;
                mix-blend-mode: normal;
                opacity: 0.5;
                color: #000000;
            }

            p.date{
                margin: 0px;
                letter-spacing: 0.5px;
                color: #000000;
                font-weight: 700;
                font-size: 20px;
            }


            .mdi.mdi-menu{
                color: #1C1B1F !important;
            }


            

            nav .navicon.nav-site-mode, nav .navicon.sidenav-trigger-left {
                
                margin: 10px 18px 10px -1px !important;
                background: #FFFFFF;
                box-shadow: 0px 10px 30px rgba(179, 179, 179, 0.2);
                border-radius: 10px;
            }



            .invite-box{
                
                border-radius: 15px;
                color: rgba(0, 0, 0, 0.26);;
                padding: 15px 5px;
                /* margin-bottom: 24px; */
                display: block;
                /* letter-spacing: -0.408px; */
                font-size: 21px;
                font-weight: 700;
            }


            .visit-box{
               
                border-radius: 15px;
                color: rgba(0, 0, 0, 0.26);;
                padding: 15px 5px;
                /* margin-bottom: 24px; */
                display: block;
                /* letter-spacing: -0.408px; */
                font-size: 21px;
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




            .input-field .prefix~input, .input-field .prefix~textarea, .input-field .prefix~label, .input-field .prefix~.validate~label, .input-field .prefix~.helper-text, .input-field .prefix~.autocomplete-content {
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



            #modal1{
                background: #FFFFFF;
                border-radius: 15px;
            }


            .sticky-action{
                background: #0A75BD;
                border-radius: 15px;
                color: #fff;
                text-align: center;
                margin: 0px !important;
            }


            .card-content-visits{
                padding: 10px !important;
                
            }


            .activator{
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


            .row-top-visit{
                margin-bottom: 0px !important;
            }


            .visit-status{
                background: #FFFFFF;
                box-shadow: 0px 3px 8px rgba(74, 85, 104, 0.07);
                border-radius: 20px;
                padding: 10px;
                font-size: 10px;
                font-weight: 600;
                color: #000;
            }

            .visit-active{
                background: #FFFFFF;
                box-shadow: 0px 3px 8px rgba(74, 85, 104, 0.07);
                border-radius: 20px;
                padding: 5px;
                font-size: 10px;
                color:#00844C;
                font-weight: 600;
            }


            .visit-expired{
                background: #FFFFFF;
                box-shadow: 0px 3px 8px rgba(74, 85, 104, 0.07);
                border-radius: 20px;
                font-weight: 600;
                padding: 5px;
                font-size: 10px;
                color: #FF0808;
            }



            .visit-status-card{
                background: #fff;
                border-radius: 15px;
                box-shadow: 0px 3px 8px rgb(74 85 104 / 34%);
                text-align: left;
                margin: 10px 0 !important;
            }


            .visit-status-card-inner{
                padding: 0 10px;
                margin-bottom: 0px !important;
            }



            .calendar-card{
                background: #FFFFFF;
                border-radius: 28px;
            }


            .today{
                background: #F8F8F8;
                border-radius: 8px;
                padding: 10px;
            }

            .last-8-days{
                background: #F8F8F8;
                border-radius: 8px;
                padding: 10px;
            }


            .last-month{
                background: #F8F8F8;
                border-radius: 8px;
                padding: 10px;
            }


            .float-right{
                float: right;
            }



            .no_sub h6{
                text-transform: capitalize !important;
                font-weight: 500;
                color: #131313 !important;
                margin: .5rem 0 0.5rem 0;
            }

            .no_sub h6 span{
                font-size: 13px !important;
            }

            .no_sub{
                margin: 0rem !important;
            }



            #sidebar-menu {
                
                padding-bottom: 0px;
                padding-top: 0px;
            }



            #sidebar-menu > ul > li > a {
                color: #131313;
                display: block;
                padding: 0px 10px !important;
                margin: 1rem 0 !important;
                background: #FFFFFF;
                box-shadow: 0px 15px 40px rgb(178 178 178 / 38%);
                border-radius: 10px;
            }


            #sidebar-menu > ul > li > a.active {
                color: #242c6d;
                background-color: #fff !important;
            }


            #sidebar-menu > ul > li.nav-active > a {
                background-color: #eff3f6;
            }


            #sidebar-menu > ul > li > a:hover {
                color: #242c6d;
                text-decoration: none;
            }



            form{
                margin: 0 1rem;
            }


            .form-control{
                background: #FFFFFF;
                
                border-bottom: 1px solid #131313 !important;
                padding-left:10px !important;
                width: 95% !important;
                
            }


            .form-group label{
                margin: 0 .6rem;
                
            }


            .form-group label b{
                font-weight: 500 !important;
            }

            .form-group button{
                border: none !important;
                background-color: #0A75BD !important;
                border-radius: 10px !important;
                text-transform: capitalize;
                padding: 10px 40px 40px;
                font-size: 20px;
                font-weight: 700;
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



            


            @media only screen and (max-width: 992px){
                .modal {
                    width: 90%;
                    margin-top: 35%;
                }

            }



        </style>














        

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->

    
    <body class="  html"  data-header="" data-footer=""  data-header_align=""  data-menu_type="" data-menu="" data-menu_icons="" data-footer_type="" data-site_mode="" data-footer_menu="" data-footer_menu_style="" >
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
                <p class="date">Bill Payment</p>
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
                    <a href="#!" class="invite-box show-box active-show" id="power-btn">
                        
                        Power
                    </a>
                </div>
            </div>


            <div class="col s6 infoarea">
                
                <div class=" z-depth-1 center">
                    <a href="#!" class="visit-box show-box" id="servicefee-btn">
                        Service Fee
                    </a>
                </div>
            </div>
        </div>
      
	
	
    </div>
    </div>	






<div class="container">
    <div class="section section-form">



        <div class="row chevy-view-menu" id="power-content">


            <div class="row " id="visits-content" style="margin-bottom: 0px;">
       
               
        
        
                <div class="col s12 visit-status-card">
                
                
                    <div class="row visit-status-card-inner">
                
                        <div class="col s12 pad-0">
                
                            <div class="blog-info">
                                <h6 class="title" style="text-transform:capitalize ; color: #000; margin: .5rem 0 0rem ; font-size: 13px;">Power Transactions</h6>
                
                            </div>
                
                        </div>
                
                
                        
        
                        <div class="col s6 pad-0" style="text-align: left;">
                            <h6 class="title" style="text-transform:capitalize ; color: #000; margin: 0; font-weight: 400; font-size: 14px; ">Last Unit Purchase</h6>
                        </div>
        
        
                        <div class="col s6 pad-0">
                
                            <div class="blog-info" style="text-align: right;">
                
                                <h6 class="title" style="text-transform:capitalize ; color: #000; font-weight: 300; margin-bottom: 0px; margin-top: 0; font-size: 13px;">Purchase Summary </h6>
                    
                            </div>
                
                        </div>
        
        
                        <div class="col s6 pad-0">
                           
                            <div class="blog-info">
                                
                                <h6 class="title" style="text-transform:capitalize ; color: #000; margin: 0rem 0 .5rem 0;">200kWH</h6>
                
                            </div>
                
                        </div>
        
        
                        <div class="col s6 pad-0" style="text-align:right ; padding-right: 10px;">
                            <h6 class="title" style="text-transform:capitalize ; color: #000; margin: 0rem 0 .5rem 0;">&#8358; 20,000</h6>
                        </div>
                
                    </div>
                
                </div>


                    <div id="sidebar-menu">
                        <ul>
                    
                    
                            <li class="no_sub">
                                <a href="#modal-bills" class="waves-effect modal-trigger">
                            
                                    <h6> <i class="mdi mdi-lightbulb-on-outline" style="color: #131313;"></i> <span> Buy Electricity </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span>
                                    </h6>
                                </a>
                            
                                
                            </li>


                            <div id="modal-bills" class="modal panic-modal" style="border-radius: 15px ;">


                                <div class="row " style="margin-top:0px ; margin-bottom:0px; ">
                                    <div class="col s12 pad-0">
                                
                                        <form class="" action=" " method="post">
                            
                            
                                            <div class="form-group mb-0">
                                                
                                                <div style="color: #131313; ">
                                                    <h6 style="text-transform: capitalize;">Buy Power</h6>
                                                </div>
                                                
                                            </div>



                                            <div class="form-group mb-0">
                                                
                                                <div>
                                                    <input type="text" class="form-control"  placeholder="Enter Amount">
                                                </div>

                                                
                                            </div>
                                        
                                        
                                        
                                            <div class="form-group mb-0">
                                                <div style="text-align:center ; margin: 20px 0 0;">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Proceed
                                                    </button>
                                        
                                        
                                                </div>
                                        
                                                <br>
                                            </div>
                                        </form>
                                
                                    </div>
                                </div>
                            
                            
                            </div>
                    
                    
                    
                        </ul>
                    
                    
                        
                    
                    </div>
    
       


                <div class="col s12 visit-status-card">
        
        
                    <div class="row visit-status-card-inner">
                
                        <div class="col s6 pad-0">
                
                            <div class="blog-info" style="margin-top: 1rem;">
                                
                                <span class="visit-status">Status</span>
                            </div>
                
                        </div>
                
                
                        <div class="col s6 pad-0">
                
                            <div class="blog-info" style="text-align: right;">
                
                                <h6 class="title" style="text-transform:capitalize ; color: #000; font-weight: 300; margin-bottom: 0px; margin-top: 0;">2022/05/04 </h6> <span style="display:block ;"> 11:25</span>
                                
                
                            </div>
                
                        </div>
        
        
        
                       
        
                        <div class="col s6 pad-0">
                           
                            <div class="blog-info">
                               
                                <span class="visit-active">Active</span>
                                <span class="visit-expired">Expired</span>
                
                            </div>
                
                        </div>
        

                        <div class="col s6 pad-0">
                           
                            <div class="blog-info">
                                
                                <span style="color: #000; display:block; font-size: 13px;">Code:<span style="font-weight: 700; font-size: 11px;"> 5202020200202005555 </span> </span>
                
                            </div>
                
                        </div>
        
                       
                
                    </div>
                
                </div>

                

                <div class="col s12 visit-status-card">
        
        
                    <div class="row visit-status-card-inner">
                
                        <div class="col s6 pad-0">
                
                            <div class="blog-info" style="margin-top: 1rem;">
                                
                                <span class="visit-status">Status</span>
                            </div>
                
                        </div>
                
                
                        <div class="col s6 pad-0">
                
                            <div class="blog-info" style="text-align: right;">
                
                                <h6 class="title" style="text-transform:capitalize ; color: #000; font-weight: 300; margin-bottom: 0px; margin-top: 0;">2022/05/04 </h6> <span style="display:block ;"> 11:25</span>
                                
                
                            </div>
                
                        </div>
        
        
        
                       
        
                        <div class="col s6 pad-0">
                           
                            <div class="blog-info">
                               
                                <span class="visit-active">Active</span>
                                <span class="visit-expired">Expired</span>
                
                            </div>
                
                        </div>
        

                        <div class="col s6 pad-0">
                           
                            <div class="blog-info">
                                
                                <span style="color: #000; display:block; font-size: 13px;">Code:<span style="font-weight: 700; font-size: 11px;"> 5202020200202005555 </span> </span>
                
                            </div>
                
                        </div>
        
                       
                
                    </div>
                
                </div>
        
        
            </div>


        </div>




        <div class="row chevy-view-menu" id="servicefee-content">


            <div class="row " id="visits-content" style="margin-bottom: 0px;">
       
               
        
        
                <div class="col s12 visit-status-card">
                
                
                    <div class="row visit-status-card-inner">
                
                        <div class="col s12 pad-0">
                
                            <div class="blog-info">
                                <h6 class="title" style="text-transform:capitalize ; color: #000; margin: .5rem 0 0rem ; font-size: 13px;">Service Fee Transactions</h6>
                
                            </div>
                
                        </div>
                
                
                        
        
                        <div class="col s6 pad-0" style="text-align: left;">
                            <h6 class="title" style="text-transform:capitalize ; color: #000; margin: 0; font-weight: 400; font-size: 14px; ">Payment Due Date</h6>
                        </div>
        
        
                        <div class="col s6 pad-0">
                
                            <div class="blog-info" style="text-align: right;">
                
                                <h6 class="title" style="text-transform:capitalize ; color: #000; font-weight: 300; margin-bottom: 0px; margin-top: 0; font-size: 13px;">Purchase Summary </h6>
                    
                            </div>
                
                        </div>
        
        
                        <div class="col s6 pad-0">
                           
                            <div class="blog-info">
                                
                                <h6 class="title" style="text-transform:capitalize ; color: #000; margin: 0rem 0 .5rem 0;">20/10/2022</h6>
                
                            </div>
                
                        </div>
        
        
                        <div class="col s6 pad-0" style="text-align:right ; padding-right: 10px;">
                            <h6 class="title" style="text-transform:capitalize ; color: #000; margin: 0rem 0 .5rem 0;">&#8358; 20,000</h6>
                        </div>
                
                    </div>
                
                </div>


                    <div id="sidebar-menu">
                        <ul>
                    
                    
                            <li class="no_sub">
                                <a href="#modal-bills-Servicefee" class="waves-effect modal-trigger">
                            
                                    <h6> <i class="mdi mdi-cash-multiple" style="color: #131313;"></i> <span> Pay Service Charge </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span>
                                    </h6>
                                </a>
                            
                                
                            </li>


                            <div id="modal-bills-Servicefee" class="modal panic-modal" style="border-radius: 15px ;">


                                <div class="row " style="margin-top:0px ; margin-bottom:0px; ">
                                    <div class="col s12 pad-0">
                                
                                        <form class="" action=" " method="post">
                            
                            
                                            <div class="form-group mb-0">
                                                
                                                <div style="color: #131313; ">
                                                    <h6 style="text-transform: capitalize;">Service Charge Payment</h6>
                                                </div>
                                                
                                            </div>



                                            <div class="col s12 visit-status-card">
        
        
                                                <div class="row visit-status-card-inner">
                                            
                                                    <div class="col s12 pad-0">
                                            
                                                        <div class="blog-info">
                                                            
                                                            <span style="font-size:13px; color: rgba(19, 19, 19, 0.45); font-weight: 500;"  >Number of Month to pay</span>
                                                        </div>
                                            
                                                    </div>
                                            
                                            
                                                    
                                                    <div class="col s6 pad-0">
                                                       
                                                        <div class="blog-info">
                                                            
                                                            <span style="color: #000; display:block; font-size: 13px; font-weight: 700;"> 3 </span>
                                            
                                                        </div>
                                            
                                                    </div>
                                    
                            
                                                    <div class="col s6 pad-0">
                                                       
                                                        <div class="blog-info" style="text-align: right;">
                                                            
                                                            <span style="color: rgba(19, 19, 19, 0.45); display:block; font-size: 13px; font-weight: 400;"> 1-12 Months </span>
                                            
                                                        </div>
                                            
                                                    </div>
                                    
                                                   
                                            
                                                </div>
                                            
                                            </div>



                                            <div class="form-group mb-0">
                                                
                                                <div>
                                                    <input type="text" class="form-control"  placeholder="Enter Amount">
                                                </div>

                                                
                                            </div>
                                        
                                        
                                            <div class="form-group mb-0">
                                                <div style="text-align:center ; margin: 20px 0 0;">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Proceed
                                                    </button>
                                        
                                        
                                                </div>
                                        
                                                <br>
                                            </div>
                                        </form>
                                
                                    </div>
                                </div>
                            
                            
                            </div>
                    
                    
                    
                        </ul>
                    
                    
                        
                    
                    </div>
    
       


                <div class="col s12 visit-status-card">
        
        
                    <div class="row visit-status-card-inner">
                
                        <div class="col s6 pad-0">
                
                            <div class="blog-info" style="margin-top: 1rem;">
                                
                                <span class="visit-status">Status</span>
                            </div>
                
                        </div>
                
                
                        <div class="col s6 pad-0">
                
                            <div class="blog-info" style="text-align: right;">
                
                                <h6 class="title" style="text-transform:capitalize ; color: #000; font-weight: 300; margin-bottom: 0px; margin-top: 0;">2022/05/04 </h6> <span style="display:block ;"> 11:25</span>
                                
                
                            </div>
                
                        </div>
        
        
        
                       
        
                        <div class="col s6 pad-0">
                           
                            <div class="blog-info">
                               
                                <span class="visit-active">Active</span>
                                <span class="visit-expired">Expired</span>
                
                            </div>
                
                        </div>
        

                        <div class="col s6 pad-0">
                           
                            <div class="blog-info">
                                
                                <span style="color: #000; display:block; font-size: 13px;">Code:<span style="font-weight: 700; font-size: 11px;"> 5202020200202005555 </span> </span>
                
                            </div>
                
                        </div>
        
                       
                
                    </div>
                
                </div>

                

                <div class="col s12 visit-status-card">
        
        
                    <div class="row visit-status-card-inner">
                
                        <div class="col s6 pad-0">
                
                            <div class="blog-info" style="margin-top: 1rem;">
                                
                                <span class="visit-status">Status</span>
                            </div>
                
                        </div>
                
                
                        <div class="col s6 pad-0">
                
                            <div class="blog-info" style="text-align: right;">
                
                                <h6 class="title" style="text-transform:capitalize ; color: #000; font-weight: 300; margin-bottom: 0px; margin-top: 0;">2022/05/04 </h6> <span style="display:block ;"> 11:25</span>
                                
                
                            </div>
                
                        </div>
        
        
        
                       
        
                        <div class="col s6 pad-0">
                           
                            <div class="blog-info">
                               
                                <span class="visit-active">Active</span>
                                <span class="visit-expired">Expired</span>
                
                            </div>
                
                        </div>
        

                        <div class="col s6 pad-0">
                           
                            <div class="blog-info">
                                
                                <span style="color: #000; display:block; font-size: 13px;">Code:<span style="font-weight: 700; font-size: 11px;"> 5202020200202005555 </span> </span>
                
                            </div>
                
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



    <br><br><br>

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
      .then(function (reg) {
        console.log("[PWA Builder] Service worker has been registered for scope: " + reg.scope);
      });
  }
}

</script>




<script>
    let tips = Array.from(document.getElementsByClassName('show-box'))

        tips.forEach(function (mov) {
            mov.addEventListener("click", handleClick);
        });

        function handleClick(event) {
            tips.forEach(function (val) {
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
    $(document).ready(function () {
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



<script src="mobile/assets/js-new/bootstrap.min.js"></script>
<script src="mobile/assets/js-new/jquery.nicescroll.js"></script>
<script src="mobile/assets/js-new/app.js"></script>





<!-- show and hide contents for buttons -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $("#servicefee-content").hide();
        $("#power-content").show();

        $("#power-btn").click(function () {
            $("#servicefee-content").hide();
            $("#power-content").show();
        });
        $("#servicefee-btn").click(function () {
            $("#servicefee-content").show();
            $("#power-content").hide();
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
  document.addEventListener("DOMContentLoaded", function(){
    $('.preloader-background').delay(10).fadeOut('slow');
  });
</script>
</body>

<!-- Mirrored from www.jaybabani.com/zak-html/app/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2022 13:17:37 GMT -->
</html>



