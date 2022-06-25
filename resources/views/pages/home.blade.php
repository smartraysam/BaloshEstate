@extends('layouts.default')
@section('content')


    <style>
        .card-body-bottom {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
            border-bottom-left-radius: 1.25rem;
            border-bottom-right-radius: 1.25rem;
            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            width: 299px;
            line-height: 28px;
            letter-spacing: -0.01em;
            background-color: #FF8C2E
        }

        .col-xl-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: none;
        }

        .card-home {
            border: none;
            -webkit-box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 300.48px;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            /* border: 1px solid rgba(0, 0, 0, .125); */
            border-radius: 1.25rem;
            box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
            margin-bottom: 30px;
            margin-left: 20px;
        }




        @media (max-width: 480px){

            
            }


            @media (max-width: 768px){

            
            }


            
            @media (max-width: 480px){

                .card-body-bottom {
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                padding: 1.25rem;
                border-bottom-left-radius: 1.25rem;
                border-bottom-right-radius: 1.25rem;
                font-family: 'Work Sans';
                font-style: normal;
                font-weight: 700;
                font-size: 20px;
                width: 230px;
                line-height: 28px;
                letter-spacing: -0.01em;
                background-color: #FF8C2E
            }




            .card-home {
            border: none;
            -webkit-box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: inherit;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 1.25rem;
            box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
            margin-bottom: 30px;
            margin-left: 0px;
            }


            .row {
                margin-right: 0px;
                margin-left: 40px;
            }


            .container-fluid {
                width: 100%;
                padding-right: 15px;
                padding-left: 0px;
                margin-right: auto;
                margin-left: auto;
            }

            }





            @media (max-width: 768px){

                .card-body-bottom {
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                padding: 1.25rem;
                border-bottom-left-radius: 1.25rem;
                border-bottom-right-radius: 1.25rem;
                font-family: 'Work Sans';
                font-style: normal;
                font-weight: 700;
                font-size: 20px;
                width: 230px;
                line-height: 28px;
                letter-spacing: -0.01em;
                background-color: #FF8C2E

                
            }


            .card-home {
            border: none;
            -webkit-box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: inherit;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            /* border: 1px solid rgba(0, 0, 0, .125); */
            border-radius: 1.25rem;
            box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
            margin-bottom: 30px;
            margin-left: 0px;
            }


            .row {
                margin-right: 0px;
                margin-left: 40px;
            }


            .container-fluid {
                width: 100%;
                padding-right: 0px;
                padding-left: 0px;
                margin-right: auto;
                margin-left: auto;
            }

            



            }



            
        









        .card-body-bottom a {
            text-align: center;

            color: #fff;
            display: block;
        }


        .app-search a {
            position: absolute;
            top: 18px;
            left: 160px;
            display: block;
            height: 34px;
            line-height: 34px;
            width: 34px;
            text-align: center;
            color: #ffffff;
        }
    </style>

    <!-- Start content -->
    <div class="content">

        <!-- Top Bar Start -->
        <div class="topbar">

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">
                    <!-- language-->
                    <li class="list-inline-item hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>



                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ti-bell noti-icon"></i>
                            <!-- <span class="badge badge-success noti-icon-badge">23</span> -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of
                                        the printing and typesetting industry.</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87
                                        unread messages</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long
                                        established fact that a reader will</small></p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>Welcome</h5>
                            </div>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i>
                                Profile</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i>
                                Logout</a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

                <div class="clearfix"></div>

            </nav>

        </div>
        <!-- Top Bar End -->

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- end page title end breadcrumb -->



                <div class="row">

                    <div class="col-md-6 col-lg-6 col-xl-4">

                        <div class="card-home">

                            <img class="img-fluid" src="assets/images/balosh-power.png" alt="Card image cap">
                            <div class="card-body-bottom">

                                <a href="{{ route('power') }}" class="card-link">Power Management</a>
                            </div>
                        </div>

                    </div><!-- end col -->


                    <div class="col-md-6 col-lg-6 col-xl-4">

                        <div class="card-home">

                            <img class="img-fluid" src="assets/images/balosh-visitor.png" alt="Card image cap">
                            <div class="card-body-bottom">

                                <a href="{{ route('visit') }}" class="card-link">Visitor Center</a>
                            </div>
                        </div>

                    </div><!-- end col -->


                    <div class="col-md-6 col-lg-6 col-xl-4">

                        <div class="card-home">

                            <img class="img-fluid" src="assets/images/balosh-servicefee.png" alt="Card image cap">
                            <div class="card-body-bottom">

                                <a href="{{ route('serviceFee') }}" class="card-link">Service Fee</a>
                            </div>
                        </div>

                    </div><!-- end col -->





                    <div class="col-md-6 col-lg-6 col-xl-4">

                        <div class="card-home">

                            <img class="img-fluid" src="assets/images/balosh-message.png" alt="Card image cap">
                            <div class="card-body-bottom">

                                <a href="{{ route('message') }}" class="card-link">Messaging</a>
                            </div>
                        </div>

                    </div><!-- end col -->



                    <div class="col-md-6 col-lg-6 col-xl-4">

                        <div class="card-home">

                            <img class="img-fluid" src="assets/images/balosh-emergency.png" alt="Card image cap">
                            <div class="card-body-bottom">

                                <a href="{{ route('emergency') }}" class="card-link">Emergency Contacts</a>
                            </div>
                        </div>

                    </div><!-- end col -->


                    <div class="col-md-6 col-lg-6 col-xl-4">

                        <div class="card-home">

                            <img class="img-fluid" src="assets/images/balosh-revenue.png" alt="Card image cap">
                            <div class="card-body-bottom">

                                <a href="{{ route('revenue') }}" class="card-link">Revenue Management</a>
                            </div>
                        </div>

                    </div><!-- end col -->
                </div>
            </div><!-- container -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->
    </div>
@stop
