<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>



        






        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
            @include('includes.nav')
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page" style="padding-bottom: 5rem;">
                <!-- Start content -->
                @yield('content')

                <footer class="footer">
                    @include('includes.footer')
                </footer>

            </div>
            <!-- End Right content here -->






                            












        </div>
        <!-- END wrapper -->




            



        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>

        <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        
        <script src="{{ asset('assets/plugins/skycons/skycons.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/fullcalendar/vanillaCalendar.js') }}"></script>
        
        <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
        <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script> 
         
        <script src="{{ asset('assets/pages/dashborad.js') }}"></script>


        <!-- Required datatable js -->
        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        
        <!-- Responsive examples -->
        <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
 
        <!-- Datatable init js -->
        <script src="{{ asset('assets/pages/datatables.init.js') }}"></script> 

        <!-- Sweet-Alert  -->
        <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="assets/pages/sweet-alert.init.js"></script>   

        <!--Summernote js-->
        <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="assets/pages/summernote.init.js"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('#datatable2').DataTable({
                    scrollX: true,
                }
            ); 


                $('table.display').DataTable();
                
                
             

                

            } );
        </script>

<script>
// Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
</script>


    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/dist/js/pages/datatable/datatable-advanced.init.js"></script>

    <script src="{{ asset('assets/plugins/colorpicker/jquery-asColor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/colorpicker/jquery-asGradient.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/colorpicker/jquery-asColorPicker.min.js') }}" type="text/javascript"></script>
    <script src="{{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}}"></script>
    <script src="assets/pages/form-advanced.js"></script>
    
    </body>
</html>
