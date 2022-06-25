<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>VGC Estate</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

        <link
      href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
      rel="stylesheet"/>

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

.navbar-custom {
    background-color: #353595;
    border: none;
    
    padding: 2rem 0;
    margin: -20px -25px 0 -25px;
    -webkit-box-shadow: 1px 0px 20px rgb(0 0 0 / 20%);
    box-shadow: 1px 0px 20px rgb(0 0 0 / 20%);
}



.left .topbar-left {
    background-color: #353595;
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
    padding-top: 16px;
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
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    text-align: center;
    color: #fff;
    font-family: 'Work Sans';
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 33px;
    background-color: #373392;
    
    border-bottom: 1pxsolidrgba(0,0,0,.125);
}

.card-header:first-child {
    border-radius: calc(1.25rem - 1px) calc(1.25rem - 1px) 0 0;
}

.head-body{
    border: none;
    -webkit-box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
    box-shadow: 1px 0px 20px rgb(0 0 0 / 5%);
    margin-bottom: 20px;
    border-radius: 1.25rem;
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
    background-color: #F4F6FB;
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
    color: #373392;
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

color: #373392;

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
color: #373392;
}


.summary-above-table span{
    font-size: 15px;
}


.page-title{
    color: #373392;
}


div.dataTables_wrapper div.dataTables_filter {
    text-align: right;
    margin-top: -2rem;
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



@media (max-width: 480px){

.navbar-custom {
    background-color: #353595;
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




}


@media (max-width: 768px){

.navbar-custom {
    background-color: #353595;
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

}

























    

</style>
