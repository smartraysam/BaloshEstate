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
    background-color: #373392;
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
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 1.25rem;
    box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
    margin-bottom: 30px;
    margin-left: 20px;
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



.page-title-box {
    padding: 22px 0 10px;
}


.page-title-desc{
    padding-bottom: 35px;
}

.modal-btn-left{
    margin-right: 1rem;
}


.btn-primary-newMessage {
    background-color: #242c6d;
    border: none;
    background: #373392;
    box-shadow: 0px 8px 12px rgb(135 145 233 / 25%);
    border-radius: 20px;
    
    padding: 0.7rem 5.3rem;
    font-family: 'Work Sans';
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
    color: #FFFFFF;
}


.float-right-btn{
    float: right;
}




@media (max-width: 480px){

    .float-right-btn{
        float:none !important;
        display: flex;

    }

    .page-title-box {
        padding: 22px 0 0px;
    }

    .btn-group>.btn:not(:last-child):not(.dropdown-toggle){
        margin-left: 0px;
    }

    .card-body-broadcast {
        
        padding: 1.25rem 0 0 0;
    }

    .label-message{
        padding-left:10px;
    }

}


@media (max-width: 768px){

    .float-right-btn{
        float:none !important;
        display: flex;
    }


    .page-title-box {
        padding: 22px 0 0px;
    }

    .btn-group>.btn:not(:last-child):not(.dropdown-toggle){
        margin-left: 0px;
    }



    .card-body-broadcast {
        
        padding: 1.25rem 0 0 0;
    }

    .label-message{
        padding-left:10px;
    }




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
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
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
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('login') }}"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
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
                                    <div class="btn-group float-right-btn ">
                                            


                                            <button type="button" onclick="window.location.href=`{{ route('message') }}`" class="btn btn-danger modal-btn-left btn-top" style="background:#373392; color:#fff; border:none; border-radius: 1rem;" data-toggle="modal" data-target="#exampleModalform2">
                                               New Message
                                            </button>

                                            

                                        </div>
                                        
                                        <h4 class="page-title">Messaging</h4> 
                                        <hr>
                                    </div>
                                        
                                        
                                    </div>

                                    
                                    
                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            

                            
                       

                        <div class="row table-row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header table-head">
                                          Broadcast Messages
                                        </div>
                                        <div class="card-body card-body-broadcast">
            
                                        
                                                    
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-visitorToken">
                                                                        <label for="field-1" class="control-label" style="font-family: 'Work Sans'; font-style: normal; font-weight: 600; font-size: 18px; line-height: 21px; color: #303972;">Subject</label>
                                                                        
                                                                        <input type="text" class="form-control form-control-visitorToken" id="field-3" placeholder="John Vee">
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-visitorToken">
                                                                        <label for="field-3" class="control-label" style="font-family: 'Work Sans'; font-style: normal; font-weight: 600; font-size: 18px; line-height: 21px; color: #303972;">Email</label>
                                                                        <input type="email" class="form-control form-control-visitorToken" id="field-3" placeholder="williams@gmail.com">
                                                                    </div>

                                                                    
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-visitorToken">
                                                                        <label for="field-3" class="control-label" style="font-family: 'Work Sans'; font-style: normal; font-weight: 600; font-size: 18px; line-height: 21px; color: #303972;">Recipient</label>
                                                                        <input type="text" class="form-control form-control-visitorToken" id="field-3" placeholder="Stephen Rose">
                                                                    </div>

                                                                    
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="card">
                                                                        <div class="card-body card-body-broadcast">
                                            
                                                                        <label for="field-3" class="control-label label-message" style="font-family: 'Work Sans'; font-style: normal; font-weight: 600; font-size: 18px; line-height: 21px; color: #303972;">Message</label> <br>
                                                                            <div class="summernote">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam perspiciatis enim at sapiente repudiandae dicta tenetur beatae asperiores vel, nam assumenda reiciendis architecto omnis harum quod consequatur quos porro expedita.</div>
                                            
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->  


                                                            
                                                            
                                                        
                                                            
                                                            <button type="button" class="btn btn-primary btn-primary-newMessage">Send</button>
                                                        </div>
                                                    </div>
                                                
            
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->    
                        


                        
                            

                                          




                            

                </div><!-- container -->

            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->

                
            </div>
@stop