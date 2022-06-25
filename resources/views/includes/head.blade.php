<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Balosh | Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

        <link
      href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
      rel="stylesheet"/>


      <link href="{{ asset('assets/plugins/colorpicker/asColorPicker.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">

         <!-- Sweet Alert -->
         <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote-bs4.css" rel="stylesheet" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <!-- jvectormap -->
        <link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/fullcalendar/vanillaCalendar.css') }}" rel="stylesheet" type="text/css"  />
        
        <link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        

        <!-- DataTables -->
        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />


        <style>


body{
    color: #878787;
    background-color: #fff;
}

a{
    color: #878787;
}


.col-12 .card-header{
    text-transform: capitalize;
}



.navbar-custom {
    background-color: #fff;
    border: none;
    
    padding: 0rem 0;
    margin: -20px -25px 0 -25px;
    -webkit-box-shadow: 1px 0px 20px rgb(0 0 0 / 20%);
    box-shadow: 1px 0px 20px rgb(0 0 0 / 20%);
}





.left .topbar-left {
    background-color: #fff;
    /* height: 0px; */
    padding: 2rem 0;
}




#sidebar-menu > ul > li > a span i {
    font-size: 18px;
    line-height: 25px;
    margin-right: 10px;
}



#sidebar-menu {
    background-color: #ffffff;
    padding-bottom: 100px;
    width: 110%;
    padding-top: 0px;
}


.col-xl-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 25.333333%;
}



.row {
    margin-right: 0px;
    margin-left: 0px;
}


.img-fluid {
    max-width: 30%;
    height: auto;
    padding: 1rem 0;
    margin-left: auto;
  margin-right: auto;
    
}


.app-search .form-control, .app-search .form-control:focus {
    border: none;
    font-size: 13px;
    display: none;
    height: 34px;
    color: #ffffff;
    padding-left: 20px;
    padding-right: 40px;
    background: #6067a1;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 30px;
    width: 200px;
}


.card-header {
    padding: 0.75rem .8rem;
    margin-bottom: 0;
    text-align: center;
    color: #fff;
    font-family: 'Work Sans';
    font-style: normal;
    font-weight: 600;
    font-size: 17px;
    line-height: 33px;
    background-color: #FF8C2E;
    text-transform: uppercase;
    
   
}




.card-header:first-child {
    border-radius: calc(1.25rem - 1px) calc(1.25rem - 1px) 0 0;
    box-shadow: 0px 8px 12px rgba(135, 145, 233, 0.25);
}

.head-body{
    border: none;
    -webkit-box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
    box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
    margin-bottom: 20px;
    border-radius: 1.25rem;
    filter: drop-shadow(0px 8px 12px rgba(255, 140, 46, 0.15));
}


.btn-top{
    width:200px;
    padding: 0.7rem 0;
    background-color: #FF0808;
    border-radius: 1rem;
    border: none;
    font-family: 'Work Sans';
font-style: normal;
font-weight: 600;
font-size: 15px;
line-height: 23px;
letter-spacing: -0.01em;
}


.btn-group>.btn-group:not(:last-child)>.btn, .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: .5rem;
    border-bottom-right-radius: .5rem;
    border-top-left-radius: .5rem;
    box-shadow: 0px 8px 12px rgb(135 145 233 / 25%);
    margin-left: 1rem;
    border-bottom-left-radius: .5rem;
    background-color: #E2ECF9;
    border: none;
    font-family: 'Work Sans';
    font-style: normal;
    font-weight: 700;
    font-size: 15px;
    line-height: 18px;
/* identical to box height */


color: #000000;
}

.table-row{
    margin-top: 3rem;
    padding-bottom: 3rem;
}


.table-row .card{
    border-radius: 1.25rem;
    filter: drop-shadow(0px 8px 12px rgba(255, 140, 46, 0.15));
}


table.dataTable {
    clear: both;
    margin-top: 6px !important;
    margin-bottom: 6px !important;
    max-width: none !important;
    /* border-collapse: none !important; */
    border:none;
}

.table-bordered td, .table-bordered th {
    /* border: none; */
}





.table-hover tbody tr:hover, .table-striped tbody tr:nth-of-type(odd), .thead-default th {
    background-color: #FFF6ED;
}




.table-head{
    text-align: left;
}

div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: auto;
    border-radius: 0.7rem;
    border: 1px solid #ced4dab0;
}



.buttons-colvis{
    display: none;
}


.buttons-copy{
    display: none;
}


.buttons-print{
    display: none;
}



table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting {
    /* padding: .5rem; */
    font-family: 'Work Sans';
    font-style: normal;
    font-weight: 600;
    font-size: 15px;
    /* width: 0rem; */
    line-height: 23px;
    color: #878787;
}


.button-menu-mobile {
    background-color: #FF8C2E;
    border-radius: 3px;
    
    
}


.button-menu-mobile-topbar {
    background-color: #ec536c;
    color: #ffffff;
    border-radius: 3px;
}


.table td, .table th {
    padding: 0.4rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

tbody{
    font-family: 'Work Sans';
font-style: normal;
font-weight: 500;
font-size: 13px;
line-height: 23px;

color: #878787;

}



.page-item.active .page-link {
    background-color: #878787;
    border-color: #878787;
}

span.item-border{
    background: #3CB554;
    border-radius: 20px;
    padding: 0.5rem 1.5rem;
    color: #fff;
}

span.item-border-1{
    background: #FF0808;
    border-radius: 20px;
    padding: 0.5rem 1.5rem;
    color: #fff;
}


span.item-border-2{
    background: #FFE600;
    border-radius: 20px;
    padding: 0.5rem 1.5rem;
    color: #fff;
}



.summary-above-table{
    text-align: center;
    font-family: 'Work Sans';
font-style: normal;
font-weight: 600;
font-size: 30px;
line-height: 38px;
color: #878787;
}


.summary-above-table span{
    font-size: 15px;
}


.page-title{
    color: #878787;
}


div.dataTables_wrapper div.dataTables_filter {
    text-align: right;
    margin-top: -2rem;
}


#sidebar-menu > ul > li > a.active .mdi-chevron-right {
    background-color: transparent;
    color: #fff;
}


#sidebar-menu > ul > li > a:hover .mdi-chevron-right {
    background-color: transparent;
    color: #fff;
}



.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #fff; 
    text-shadow: 0 1px 0 #fff;
    opacity: 1;
}

.close:hover{
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #fff; 
    text-shadow: 0 1px 0 #fff;
    opacity: 5;
}

.btn-group.float-right{
    margin-top: 5rem;
    margin-bottom: 2rem;
}


.notification-list .noti-icon {
    font-size: 18px;
    vertical-align: middle;
    color: #E3E3E3;
}


@media (max-width: 480px){

.navbar-custom {
    background-color: #fff;
    border: none;
    padding: 0px;
    margin: -20px -25px 0 -25px;
    -webkit-box-shadow: 1px 0px 20px rgb(0 0 0 / 20%);
    box-shadow: 1px 0px 20px rgb(0 0 0 / 20%);
}


div.dataTables_wrapper div.dataTables_filter {
    text-align: left;
    margin-top: 2rem;
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
    padding: 0px;
   
}

.push-down{
    margin-top: 2rem;
}




.btn-group.float-right{
    margin-top: 0px;
    margin-bottom: 0px;
}


.page-title-box hr{
    display: none;
}


.btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    
    margin-bottom: 1rem;
    position: absolute;
    right: 0.5rem;
    top: 3rem;


}

}

@media (max-width: 768px){

.navbar-custom {
    background-color: #fff;
    border: none;
    padding: 0px;
    margin: -20px -25px 0 -25px;
    -webkit-box-shadow: 1px 0px 20px rgb(0 0 0 / 20%);
    box-shadow: 1px 0px 20px rgb(0 0 0 / 20%);
}

div.dataTables_wrapper div.dataTables_filter {
    text-align: left;
    margin-top: 0rem;
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
    padding: 0px;
   
}

.push-down{
    margin-top: 2rem;
}



.btn-group.float-right{
    margin-top: 0px;
    margin-bottom: 0px;
}



.page-title-box hr{
    display: none;
}


.btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    
    margin-bottom: 1rem;
    position: absolute;
    right: 0.5rem;
    top: 3rem;


}






}



.dt-button{
    background-color:#FFF6ED;
    color:  #878787;
    box-shadow: 0px 8px 12px rgba(135, 145, 233, 0.12);
    border-radius: 10px;
    font-family: 'Work Sans';
    font-style: normal;
    font-weight: 700;
    border: none;
}

.dt-button:hover{
    background-color: #FF8C2E;
    color: #fff;
    box-shadow: 0px 8px 12px rgba(135, 145, 233, 0.12);
    border-radius: 10px;
    font-family: 'Work Sans';
    font-style: normal;
    font-weight: 700;
    border: none;
}





.modal-success-img{
    margin-top: -5rem;
}


.modal-header-success-img{
    flex: none;
    margin: 0 auto;
}


.modal-confirm{
    margin-top: 10rem;
}

.success-btns{
    margin-top: 7rem;
    border: none;
    background: #F1F5F8;
    height: 80px;
    padding: 0.5rem 0;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
}

.btn-success-cancel{
    margin-right:3rem ;
    padding: 1rem 3rem;
    background-color: #D0DEEB;
    border-radius: 4px;
    font-family: inherit;
    font-style: normal;
    font-weight: 800;
    color: #9BA9B9;
    border: none;
    font-size: 20px;
}



.btn-success-cancel:hover{
    background-color: red;
    border: none;
}

.btn-success-dashboard:hover{
    background-color: #373392;
    border: none;
}


.btn-success-dashboard{
    margin-left:3rem ;
    padding: 1rem 3rem;
    background-color: #373392;
    border-radius: 4px;
    border: none;
    font-family: inherit;
    font-style: normal;
    font-weight: 800;
    font-size: 20px;
}


.modal-body-success{
    padding: 0px;
   
    /* border-radius: 0px 0px 10px 10px; */
}

.modal-content-success{
    border-radius: 20px;
    border: none;
}

.modal-body-success h4{
    font-family: inherit;
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 50px;
    color: #7C8691;
    margin-top: 2rem;
}




/* .card-home img{
    filter: invert(100%) sepia(0%) saturate(100%) hue-rotate(9deg) brightness(0) contrast(104%);
} */













    

</style>
