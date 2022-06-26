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



.bg-light {
    background-color: #FFF6ED !important;
}



.col-xl-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: none;
}

.card-admin-home {
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

.table > tbody > tr.admin-list > td {
    padding: 8px 3px;
    vertical-align: middle;
}

@media (max-width: 480px){

.btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    
    margin-bottom: 1rem;
    
}


.col-12{
    padding-right: 0px;
    padding-left: 0px;
}

.col-calendar{
    flex: none;
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

.col-calendar{
    flex: none;
}

}



.card-body-admin-home {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding-top: .5rem;
    border-bottom-left-radius: 1.25rem;
    border-bottom-right-radius: 1.25rem;
    font-family: 'Work Sans';
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    width: inherit;
    line-height: 28px;
    letter-spacing: -0.01em;
    background-color: #FF8C2E;
    
}

.card-body-admin-home p{
    color: #fff;
    text-align: center;
}



.card-admin-home {
    border: none;
    -webkit-box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
    position: relative;
    display: -ms-flexbox;
    filter: drop-shadow(0px 8px 12px rgba(255, 140, 46, 0.15));
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    font-family: 'Work Sans';
    font-style: normal;
    width: inherit;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 1.25rem;
    box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
    margin-bottom: 30px;
    
    
}



.summary-above-table {
    text-align: center;
    font-family: 'Work Sans';
    font-style: normal;
    font-weight: 600;
    font-size: 30px;
    line-height: 38px;
    color: #FF8C2E;
}


.card-calendar{
    border-radius: 20px;
    filter: drop-shadow(0px 8px 12px rgba(255, 140, 46, 0.15));
}

.card-calendar h5{
    color: #FF8C2E;
    text-align: center;
}


#v-cal .vcal-date--today {
    background-color: #FF8C2E;
}

#v-cal .vcal-header svg {
    fill: #FF8C2E;
}


.form-select {
    background-image: url(../../assets/images/custom-select.png);
    background-size: auto;
}

.form-select {
    display: block;
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(.75rem - 3px);
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #54667a;
    background-color: transparent;
    /* background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e); */
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
    border: 1px solid #e9ecef;
    border-radius: 2px;
    box-shadow: unset;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    margin: 0 .7rem;
}



.text-info {
    --bs-text-opacity: 1;
    color: #FF8C2E;
    font-size: 20px;
    margin: 0 0 0 5rem ;
}


.card-review-table{
    border-radius: 20px;
}


.fw-normal{
    font-size: 20px;
    color: #FF8C2E;
}


.card-review-table h5{
    color: #FF8C2E;
}


.dashboard-thead th{
    font-weight: 700;
}

.bg-success {
    background-color: #29b348 !important;
    padding: 0.3rem;
}


.bg-danger {
    /* background-color: #29b348 !important; */
    padding: 0.3rem;
}


.card-work-schedule{
    border-radius: 20px;
}


.cardbody-work-schedule{
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    background-color: #fff;
    filter: drop-shadow(0px 8px 12px rgba(255, 140, 46, 0.15));
}

.cardbody-work-schedule h4{
    font-size: 16px;
}

.cardbody-work-schedule .py-3{
    /* border: 1px solid; */
    margin-bottom: 1rem;
    padding-left: 1rem;
}

.cardbody-work-schedule .ms-3{
    margin-left: 10px;
   
}


.sch-1{
    background: #E9EAF4;
    border-radius: 12px;
}

.sch-1 h4{
    color: #4D56A2;
}

.text-muted-1{
    color: #737BC1;
}

.sch-2{
    background: #FFF9EC;
    border-radius: 12px;
}

.sch-2 h4{
    color: #F0B604;
}

.text-muted-2{
    color: #EBC758;
}

.sch-3{

    background: #FFEEEA;
    border-radius: 12px;
}

.sch-3 h4{
    color: #FD6540;
}

.text-muted-3{
    color: #F09C88;
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
                                        <h4 class="page-title">Admin Dashboard</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card card-admin-home">
                                                <div class="card-body">                                            
                                                    <h1 class="summary-above-table"> 22 </h1>
                                                    
                                                </div>
                                                <div class="card-body-admin-home">
                                                    <p class="card-link">Facility Managers</p>
                                                </div>
                                            </div><!--end card-->
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <div class="card card-admin-home">
                                                <div class="card-body">                                            
                                                    <h1 class="summary-above-table"> 200 </h1>
                                                   
                                                </div>
                                                <div class="card-body-admin-home">
                                                <p class="card-link">Number of Houses</p>
                                                </div>
                                            </div><!--end card-->
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <div class="card card-admin-home">
                                                <div class="card-body">                                            
                                                    <h1 class="summary-above-table">&#8358;250,000 </h1>
                                                    
                                                </div>
                                                <div class="card-body-admin-home">
                                                <p class="card-link">Revenue</p>
                                                </div>
                                            </div><!--end card-->
                                        </div><!--end col-->


                                        <div class="col-lg-4">
                                            <div class="card card-admin-home">
                                                <div class="card-body">                                            
                                                    <h1 class="summary-above-table"> &#8358;100,000 </h1>
                                                    
                                                </div>
                                                <div class="card-body-admin-home">
                                                    <p  class="card-link">Power Vend</p>
                                                </div>
                                            </div><!--end card-->
                                        </div><!--end col-->


                                        <div class="col-lg-4">
                                            <div class="card card-admin-home">
                                                <div class="card-body">                                            
                                                <h1 class="summary-above-table"> &#8358;100,000 </h1>
                                                   
                                                </div>
                                                <div class="card-body-admin-home">
                                                    <p class="card-link">Credit (Sold)</p>
                                                </div>
                                            </div><!--end card-->
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <div class="card card-admin-home">
                                                <div class="card-body">                                            
                                                <h1 class="summary-above-table"> 250 </h1>
                                                    
                                                </div>
                                                <div class="card-body-admin-home">
                                                    <p class="card-link">Active access cards</p>
                                                </div>
                                            </div><!--end card-->
                                        </div><!--end col-->

                                    </div><!--end row-->

                                    
                                </div><!--end col-->

                                <div class="col-xl-4 col-calendar">
                                    <div class="card card-calendar">
                                        <div class="card-body">
                                            <h5 class="header-title mt-0 mb-3">Calendar</h5>                                
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
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div><!--end row-->

                            
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="card card-review-table">
                                <div class="d-flex align-items-center p-3">
                                <h5 class="card-title mb-0">Revenue Income</h5>
                                <div class="ms-auto">
                                    <select class="form-select">
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    </select>
                                </div>
                                </div>
                                <div class="p-3 bg-light">
                                <div class="d-flex align-items-center">
                                    <div>
                                    <h2 class="fw-normal">March 2021</h2>
                                    <p class="mb-2 text-muted fs-3 fw-normal">Sales Report</p>
                                    </div>
                                    <div class="ms-auto">
                                    <h1 class="text-info mb-0 fw-light">$3,690</h1>
                                    </div>
                                </div>
                                </div>
                                <div class="p-3">
                                <div class="table-responsive">
                                    <table class="table mb-0 no-wrap recent-table table-hover">
                                    <thead>
                                        <tr class="dashboard-thead">
                                        
                                        <th>Name</th>
                                        <th>Service</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="admin-list">

                                        
                                        <td class="txt-oflo">Jon Vee</td>
                                        <td>
                                            <span
                                            class="
                                                badge
                                                rounded-pill
                                                text-white
                                                font-weight-medium
                                                bg-success
                                                label-rouded
                                            "
                                            >Service Fee</span
                                            >
                                        </td>
                                        <td class="txt-oflo">April 18, 2021</td>
                                        <td><span class="text-success">&#8358;20,000</span></td>
                                        </tr>

                                        <tr class="admin-list">

                                        
                                        <td class="txt-oflo">Jon Vee</td>
                                        <td>
                                            <span
                                            class="
                                                badge
                                                rounded-pill
                                                text-white
                                                font-weight-medium
                                                bg-success
                                                label-rouded
                                            "
                                            >Service Fee</span
                                            >
                                        </td>
                                        <td class="txt-oflo">April 18, 2021</td>
                                        <td><span class="text-success">&#8358;20,000</span></td>
                                        </tr>

                                        <tr class="admin-list">
                                        
                                        <td class="txt-oflo">Jon Vee</td>
                                        <td>
                                            <span
                                            class="
                                                badge
                                                rounded-pill
                                                text-white
                                                font-weight-medium
                                                bg-success
                                                label-rouded
                                            "
                                            >Service Fee</span
                                            >
                                        </td>
                                        <td class="txt-oflo">April 18, 2021</td>
                                        <td><span class="text-success">&#8358;20,000</span></td>
                                        </tr>
                                        <tr class="admin-list">
                       
                                        <td class="txt-oflo">Jon Vee</td>
                                        <td>
                                            <span
                                            class="
                                                badge
                                                rounded-pill
                                                text-white
                                                font-weight-medium
                                                bg-success
                                                label-rouded
                                            "
                                            >Service Fee</span
                                            >
                                        </td>
                                        <td class="txt-oflo">April 18, 2021</td>
                                        <td><span class="text-success">&#8358;20,000</span></td>
                                        </tr>

                                        
                                        
                                        
                                    </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4">
                            <div class="card card-review-table">
                                <div class="d-flex align-items-center p-3">
                                <h5 class="card-title mb-0">Recent Sales</h5>
                                <div class="ms-auto">
                                    <select class="form-select">
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    </select>
                                </div>
                                </div>
                                <div class="p-3 bg-light">
                                <div class="d-flex align-items-center">
                                    <div>
                                    <h2 class="fw-normal">March 2021</h2>
                                    <p class="mb-2 text-muted fs-3 fw-normal">Sales Report</p>
                                    </div>
                                    <div class="ms-auto">
                                    <h1 class="text-info mb-0 fw-light">$3,690</h1>
                                    </div>
                                </div>
                                </div>
                                <div class="p-3">
                                <div class="table-responsive">
                                    <table class="table mb-0 no-wrap recent-table table-hover">
                                    <thead>
                                        <tr class="dashboard-thead">
                                        
                                        <th>Name</th>
                                        <th>Service</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="admin-list">

                                        
                                        <td class="txt-oflo">Jon Vee</td>
                                        <td>
                                            <span
                                            class="
                                                badge
                                                rounded-pill
                                                text-white
                                                font-weight-medium
                                                bg-danger
                                                label-rouded
                                            "
                                            >Power Purchase</span

                                            >
                                        </td>
                                        <td class="txt-oflo">April 18, 2021</td>
                                        <td><span class="text-success">&#8358;20,000</span></td>
                                        </tr>

                                        <tr class="admin-list">

                                        
                                        <td class="txt-oflo">Jon Vee</td>
                                        <td>
                                            <span
                                            class="
                                                badge
                                                rounded-pill
                                                text-white
                                                font-weight-medium
                                                bg-danger
                                                label-rouded
                                            "
                                            >Power Purchase</span
                                            >
                                        </td>
                                        <td class="txt-oflo">April 18, 2021</td>
                                        <td><span class="text-success">&#8358;20,000</span></td>
                                        </tr>

                                        <tr class="admin-list">

                                        
                                        <td class="txt-oflo">Jon Vee</td>
                                        <td>
                                            <span
                                            class="
                                                badge
                                                rounded-pill
                                                text-white
                                                font-weight-medium
                                                bg-danger
                                                label-rouded
                                            "
                                            >Power Purchase</span
                                            >
                                        </td>
                                        <td class="txt-oflo">April 18, 2021</td>
                                        <td><span class="text-success">&#8358;20,000</span></td>
                                        </tr>

                                        <tr class="admin-list">
               
                                        <td class="txt-oflo">Jon Vee</td>
                                        <td>
                                            <span
                                            class="
                                                badge
                                                rounded-pill
                                                text-white
                                                font-weight-medium
                                                bg-danger
                                                label-rouded
                                            "
                                            >Power Purchase</span
                                            >
                                        </td>
                                        <td class="txt-oflo">April 18, 2021</td>
                                        <td><span class="text-success">&#8358;20,000</span></td>
                                        </tr>

                                        

                                        
                                    </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>

                            <div class="d-flex align-items-stretch col-md-12 col-lg-4">
                                <div class="card w-100 card-work-schedule">
                                    <div class="p-4 border-bottom">
                                    <div class="d-flex align-items-center">
                                        <div style="text-align:center ;">
                                        <h4 class="mb-0 card-title">Work Schedules</h4>
                                        </div>
                                        
                                    </div>
                                    </div>
                                    <div class="card-body cardbody-work-schedule">
                                    <div class="d-flex align-items-center py-3 sch-1">
                                        <img
                                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/2.jpg"
                                        class="rounded-circle"
                                        width="40"
                                        />
                                        <div class="ms-3">
                                        <h4 class="font-weight-medium mb-0 ">Send meeting notifications</h4>
                                        <span class="text-muted-1">07:30 - 08:15</span>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-center py-3 sch-2">
                                        <img
                                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/2.jpg"
                                        class="rounded-circle"
                                        width="40"
                                        />
                                        <div class="ms-3">
                                        <h4 class="font-weight-medium mb-0">General Maintenance</h4>
                                        <span class=" text-muted-2">07:30 - 08:15</span>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-center py-3 sch-3">
                                        <img
                                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/2.jpg"
                                        class="rounded-circle"
                                        width="40"
                                        />
                                        <div class="ms-3">
                                        <h4 class="font-weight-medium mb-0">Send last meeting minutes</h4>
                                        <span class="text-muted-3">07:30 - 08:15</span>
                                        </div>
                                        
                                    </div>
                                    <div class="pt-3">
                                        
                                    </div>
                                    </div>
                                </div>
                                </div>

                            
                    </div>
                            

                                         

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

        </div> <!-- content -->





@stop