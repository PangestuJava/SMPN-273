</div>
<!-- /.row -->
</div>
<!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('front/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('front/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('front/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('front/dist/js/adminlte.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('front/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('front/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('front/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('front/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('front/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('front/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('front/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('front/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('front/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('front/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('front/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('front/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('front/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('front/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('front/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('front/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('front/plugins/chart.js/Chart.min.js') }}"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>

</html>
