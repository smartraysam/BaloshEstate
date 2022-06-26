<!DOCTYPE html>
<html lang="en" style="overflow:auto ;">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>VGC Login</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.png">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">


        <style>

        .accountbg {
        /* background: url(../images/bg-account.png); */
        background-repeat: repeat-x;
        position: absolute;
        height: 30%;
        width: 100%;
        background: #353595;
        /* border-radius: 20px; */
        top: -20%;
    }



    .wrapper-page {
    margin: 7rem auto;
    max-width: 774px;
    max-height: 582px;
    position: relative;
}


.footer-info{
        /* font-family: 'Poppins'; */
font-style: normal;
font-weight: 600;
font-size: 13px;
line-height: 20px;

color: #000000;


    }




    
.footerbg {
        /* background: url(../images/bg-account.png); */
        background-repeat: repeat-x;
        position: absolute;
        height: 7%;
        width: 100%;
        background: #fff;
        top: 95%;
        text-align: center;
    }


    .logo-large {
    height: 6rem;
    }


    .login-header{
        font-family: 'Work Sans';
        font-style: normal;
        font-weight: 700;
        /* font-size: 24px; */
        line-height: 28px;
        

    }


    .btn-login{
        padding: 1rem 0;
        border-radius: 10px;
    }


    .wrapper-page .card {
    border: none;
    border-radius: 20px;
    }

        </style>

    </head>
    <body>


    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page" style="filter:drop-shadow(0px 8px 12px rgba(135, 145, 233, 0.25));">

        <div class="card">
            <div class="card-body">

                <div class="text-center">
                    <a href="index.html" class="logo logo-admin"><img src="assets/images/1.png" class="logo-large" alt="logo"></a>
                </div>

                <div class="text-center">
                    <h3 class="login-header">Dashboard</h3>
                    <p class="header-details" style="color:#9FA2B4;">Enter your email and password below</p>
                </div>

                <div class="px-3 pb-3">
                    <form class="form-horizontal m-t-20" action="{{ route('adminHome') }}">

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="email" style="font-family: 'Work Sans'; font-style: normal; font-weight: 700; font-size: 12px; line-height: 14px; letter-spacing: 0.3px; text-transform: uppercase; color:#9FA2B4;">EMAIL</label>
                                <input class="form-control" type="text" required="" style="border-radius:10px;" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                            <label for="email" style="font-family: 'Work Sans'; font-style: normal; font-weight: 700; font-size: 12px; line-height: 14px; letter-spacing: 0.3px; text-transform: uppercase; color:#9FA2B4;">PASSWORD</label>
                                <input class="form-control" type="password" required="" style="border-radius:10px;" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-login btn-block waves-effect waves-light" style="border:none; background-color:#353595 ;" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-sm-7 m-t-20">
                                <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> <small>Forgot your password ?</small></a>
                            </div>
                            
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="footerbg"><span class="footer-info">Powered By: </span> <img src="assets/images/footer-balosh.png" width="10%" alt=""></div>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>