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


table.table-bordered-request.dataTable tbody td {
    border-bottom-width: 0;
    padding: .5rem;
    border: none;
}

.table-bordered-request th{
    border: none;
}


.row-request{
    font-family: 'Work Sans';
    font-style: normal;
    font-weight: 500;
    font-size: 20px;
    line-height: 23px;
    margin-top: 1rem;
    padding: .7rem;
    color: #000000;
}


.row-request-value{
    font-family: 'Work Sans';
    font-style: normal;
    font-weight: 500;
    font-size: 20px;
    line-height: 23px;
    
    color: #fff;
    padding: .5rem 2rem;
    border-radius: 10px;
}





.row-request-all{

    background: #373392;
    margin-left: 2rem;
}


.row-request-pending{
    
    background: #FF6B00;
    margin-left: 4.1rem;
}


.row-request-progress{
    background: #373392;
    margin-left: 2.3rem;
}


.row-request-completed{
    background: #3CB554;
    margin-left: 2.2rem;
}

.row-request-unread{
    background: #7E7E7E;
    margin-left: 4.5rem;
}

.row-request-read{
    background: #373392;
    margin-left: 5.8rem;
}





@media (max-width: 480px){

    .row-request-all{

        margin-left: 2px;
    }


    .row-request-pending{
        margin-left: 35px;
    }


    .row-request-progress{
        margin-left: 6px;
    }


    .row-request-completed{
       margin-left: 6px;
    }

    .row-request-unread{
        margin-left: 42px;
    }

    .row-request-read{
        margin-left: 4rem;
    }


    .card-body-request {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 0rem;
    margin-bottom: 30px;
    }

    .row-request-margin-bottom{

margin-bottom: 1rem;
}

.col-8-table {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: inherit;
}
    

}




@media (max-width: 768px){

    .card-body-request {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 0rem;
    margin-bottom: 30px;
    }



    .row-request-margin-bottom{

        margin-bottom: 1rem;
    }
   

    .row-request-all{

margin-left: 2px;
}


.row-request-pending{
margin-left: 35px;
}


.row-request-progress{
margin-left: 6px;
}


.row-request-completed{
margin-left: 6px;
}

.row-request-unread{
margin-left: 42px;
}

.row-request-read{
margin-left: 4rem;
}


.col-8-table {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width:inherit;
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
                                    <div class="btn-group float-right ">
                                            

                                        </div>
                                        <h4 class="page-title">Requests</h4>
                                    </div>

                                   
                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            




                            



                            <div style="border:none; background:#fff; border-radius:20px; padding:1rem .5rem;">

                            <div class="row table-row">

                                <div class="col-md-4">
                                    <div class="card card-body card-body-request">
                                        



                                            <div class="row-request "> All Request <span class="row-request-value row-request-all" > 20 </span></div>
                                            <hr>
                                            <div class="row-request "> Pending <span class="row-request-value row-request-pending" > 05 </span></div>
                                            <div class="row-request"> In Progress <span class="row-request-value row-request-progress" > 12 </span></div>
                                            <div class="row-request"> Completed <span class="row-request-value row-request-completed" > 04 </span></div>
                                            <div class="row-request"> Unread <span class="row-request-value row-request-unread" > 04 </span></div>
                                            <div class="row-request row-request-margin-bottom"> Read <span class="row-request-value row-request-read" > 04 </span></div>
                                            
                                        
                                        
                                            
                                    
                                    
                                    </div>
                                </div>




                                <div class="col-8 col-8-table">
                                    <div class="card">
                                    <!-- <div class="card-header table-head" style="border-radius: none; background-color:#fff;">
                                           
                                        </div> -->
                                        <div class="card-body">
            
                                    <div class="table-responsive">
                                                <table
                                                id="file_export"
                                                class="table table-striped table-bordered display">
                                                <thead>
                                                <tr>
                                                    <th class="th">Sender</th>
                                                    <th class="th">Title</th>
                                                    <th class="th">Request</th>
                                                    <th class="th">Request ID</th>
                                                    <th class="th">Action</th>
                                                    
                                                    
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <td>John Vee</td>
                                                    <td>Payment Issue</td>
                                                    <td>Payment Issue</td>
                                                    <td>1234</td>
                                                    <td><span class="item-border"> Paid</span></td>
                                                    
                                                </tr>
                                                <tr>
                                                <td>John Vee</td>
                                                    <td>John@gmail.com</td>
                                                    <td>09023356677</td>
                                                    <td>House 12b Road D</td>
                                                    <td><span class="item-border"> Paid</span></td>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                <td>John Vee</td>
                                                    <td>John@gmail.com</td>
                                                    <td>09023356677</td>
                                                    <td>House 12b Road D</td>
                                                    <td><span class="item-border"> Paid</span></td>
                                                    
                                                    
                                                </tr>
                                                
                                                
                                                
                                                </tbody>
                                                
                                                </table>
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->



                            </div> <!-- end row -->    

                            </div>


                    

                              

                        
                        


                        
                            

                                          




                            

                </div><!-- container -->

            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->

                
            </div>
@stop