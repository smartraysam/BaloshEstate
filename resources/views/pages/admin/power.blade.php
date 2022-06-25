@extends('layouts.admin.adminDefault')
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
    background-color: #FF8C2E;
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



.modal-power-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem 1rem;
    
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    background: #FF8C2E;
    color: #fff;
    border: none;
}


.modal-dialog-power {
    max-width: 700px;
    margin: 5.75rem auto;
}



.modal-content-power {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    
    border-radius: 20px;
    outline: 0;
    border: none;
}



.modal-footer-power {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 1rem;
    border-top: 1px solid #e9ecef; 
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px; 
}



.form-control-power {
    display: block;
    width: 100%;
    height: calc(3rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}



.btn-primary-power {
    background-color: #242c6d;
    border: none;
    background: #FF8C2E;
    box-shadow: 0px 8px 12px rgb(135 145 233 / 25%);
    border-radius: 20px;
    
    padding: 0.7rem 1.3rem;
    font-family: 'Work Sans';
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
    color: #FFFFFF;
}




@media (max-width: 480px){

.btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    
    margin-bottom: 1rem;
    
}


.col-12{
    padding-right: 0px;
    padding-left: 0px;
}


.success-btns{
    display: flex;
    padding-left: 1rem;
}

.btn-success-cancel {
    margin-right: 1rem;
    padding: 1rem 2rem;
    
}

.btn-success-dashboard {
    margin-left: 0px; 
    padding: 1rem 1.8rem;
   
}


}


@media (max-width: 768px){

    .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    
    margin-bottom: 1rem;
    
}

.col-12{
    padding-right: 0px;
    padding-left: 0px;
}



.success-btns{
    display: flex;
    padding-left: 1rem;
}

.btn-success-cancel {
    margin-right: 1rem;
    padding: 1rem 2rem;
    
}

.btn-success-dashboard {
    margin-left: 0px; 
    padding: 1rem 1.8rem;
   
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
                                    <div class="btn-group float-right">
                                            <button type="button" class="btn btn-danger btn-top" data-toggle="modal"  style="background:#FF0808; color:#fff; border-radius: 1rem; padding:1rem 0;" data-target="#exampleModalform2">
                                               Send Resident Electricity
                                            </button>

                                            <div class="modal fade" id="exampleModalform2" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-dialog-power" role="document">
                                                    <div class="modal-content modal-content-power">
                                                        <div class="modal-header modal-power-header">
                                                            <h5 class="modal-title">Power Purchase</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                                <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="field-1" class="control-label" style="font-family: 'Work Sans'; font-style: normal; font-weight: 600; font-size: 18px; line-height: 21px; color: #878787;">Purchase Option</label>
                                                                        
                                                                        <select class="form-control form-control-power">
                                                                            <option>USSD</option>
                                                                            <option >NGN</option>
                                                                            <option >GBP</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="field-3" class="control-label" style="font-family: 'Work Sans'; font-style: normal; font-weight: 600; font-size: 18px; line-height: 21px; color: #878787;">Meter Number</label>
                                                                        <input type="text" class="form-control form-control-power" id="field-3" placeholder="123456789">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="field-3" class="control-label" style="font-family: 'Work Sans'; font-style: normal; font-weight: 600; font-size: 18px; line-height: 21px; color: #878787;">Name</label>
                                                                        <input type="text" class="form-control form-control-power" id="field-3" placeholder="John Vee">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="field-3" class="control-label" style="font-family: 'Work Sans'; font-style: normal; font-weight: 600; font-size: 18px; line-height: 21px; color: #878787;">Amount</label>
                                                                        <input type="text" class="form-control form-control-power" id="field-3" placeholder="&#8358;20,000">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            
                                                        </div>                                          
                                                        <div class="modal-footer modal-footer-power">
                                                            
                                                            <!-- <button type="button" class="btn btn-primary btn-primary-power">Purchase</button> -->
                                                            <a type="button" href="#myModalpower" data-toggle="modal" class="btn btn-primary btn-primary-power" data-dismiss="modal">Purchase</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  


                                        </div>
                                        <h4 class="page-title">Power Management</h4>
                                        <hr>
                                    </div>

                                    

                                    
                                    
                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            



                            <!-- Modal HTML -->
                            <div id="myModalpower" class="modal fade">
                                    <div class="modal-dialog modal-confirm">
                                        <div class="modal-content modal-content-success">
                                            <div class="modal-header modal-header-success-img justify-content-center">
                                                <div class="icon-box">
                                                    <img src="assets/images/success-img.png" width="150" class="modal-success-img" alt="">
                                                </div>
                                                
                                            </div>
                                            <div class="modal-body modal-body-success text-center">
                                                <h4>Success!</h4>	
                                               
                                                <div class="success-btns">
                                                <button class="btn btn-success btn-success-cancel" data-dismiss="modal"><span>Cancel</span> </button>
                                                <button class="btn btn-success btn-success-dashboard"  data-dismiss="modal"><span>Dashboard</span> </button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <!--end Modal HTML -->









                            
                        <div class="row">



                            <div class="col-lg-3 push-down-twice">
                                    <div class="card head-body">
                                        <div class="card-header">
                                            Registered Meters
                                        </div>
                                        <div class="card-body">
                                            <h2 class="summary-above-table">
                                                200
                                            </h2>
                                        </div>
                                    </div>
                            </div>



                            <div class="col-lg-3">
                                    <div class="card head-body">
                                        <div class="card-header">
                                            Revenue
                                        </div>
                                        <div class="card-body">
                                        <h2 class="summary-above-table">
                                                &#8358;80,000
                                            </h2>
                                        </div>
                                    </div>
                            </div>


                            <div class="col-lg-3">
                                    <div class="card head-body">
                                        <div class="card-header">
                                            Vending
                                        </div>
                                        <div class="card-body">
                                        <h2 class="summary-above-table">
                                            &#8358;9,000
                                        </h2>
                                        </div>
                                    </div>
                            </div>



                            <div class="col-lg-3">
                                    <div class="card head-body">
                                        <div class="card-header">
                                            On Credit Sales
                                        </div>
                                        <div class="card-body">
                                        <h2 class="summary-above-table">
                                                &#8358;20,000
                                        </h2>
                                        </div>
                                    </div>
                            </div>


                        </div>
                            
                        

                        
                        


                        

                                    <div class="row table-row">
                                        <div class="col-12">
                                        <div class="card">
                                        <div class="card-header table-head">
                                               Vending Details
                                            </div>
                                            <div class="card-body">
                                            
                                            <div class="table-responsive">
                                                <table
                                                id="file_export"
                                                class="table table-striped table-bordered display">
                                                <thead>
                                                <tr>
                                                    <th class="th">Estate</th>
                                                    
                                                    <th class="th">Amount</th>
                                                    <th class="th">Vended Amount</th>
                                                    <th class="th">Unit(kH)</th>
                                                    
                                                    
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td> Osborne Estate </td>
                                                    
                                                    <td>&#8358;20000</td>
                                                    <td>&#8358;16,900</td>
                                                    <td>220kWH</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td> ChevyView Estate </td>
                                                    
                                                    <td>&#8358;20000</td>
                                                    <td>&#8358;16,900</td>
                                                    <td>220kWH</td>
                                                </tr>


                                                <tr>
                                                    <td> Lekky Estate </td>
                                                    
                                                    <td>&#8358;20000</td>
                                                    <td>&#8358;16,900</td>
                                                    <td>220kWH</td>
                                                </tr>
                                                    
                                                    
                                                </tbody>
                                                
                                                </table>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                          




                            

                </div><!-- container -->

            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->

                
            </div>




            

            
@stop