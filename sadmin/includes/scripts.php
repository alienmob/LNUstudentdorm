


<!-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js"></script> -->
<script type="text/javascript" src="../admin/assets/js/fullcalendar@5.8.0/main.js"></script>
<!-- jQuery 3 -->
<script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script type="text/javascript" src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Moment JS -->
<script type="text/javascript" src="../bower_components/moment/moment.js"></script>

<!-- DataTables -->

<script type="text/javascript" src="../admin/assets/js/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../admin/assets/js/dataTables/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../admin/assets/js/dataTables/jszip.min.js"></script>
<script type="text/javascript" src="../admin/assets/js/dataTables/pdfmake.min.js"></script>
<script type="text/javascript" src="../admin/assets/js/dataTables/vfs_fonts.js"></script>
<script type="text/javascript" src="../admin/assets/js/dataTables/buttons.html5.min.js"></script>
<script type="text/javascript" src="../admin/assets/js/dataTables/buttons.print.min.js"></script>

<script type="text/javascript" src="admin/assets/js/moment.min.js"></script>
<!-- ChartJS -->
<script type="text/javascript" src="../bower_components/chart.js/Chart.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="../bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script type="text/javascript" src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script type="text/javascript" src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Slimscroll -->
<script type="text/javascript" src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script type="text/javascript" src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="../dist/js/adminlte.min.js"></script>
<!-- Active Script -->
<script type="text/javascript" src="../admin/assets/js/lightbox.js"></script>

<script type="text/javascript" src='assets/js/nprogress.js'></script>
<script>
 NProgress.start();

setTimeout(() => {
   NProgress.set(1.0);
 }, 500)

 $( document ).ready(function() {
   NProgress.set(0.6);
   setTimeout(() => {
     NProgress.done();
     NProgress.remove();
    }, 1000)
 });	
</script>



<script>
$(document).ready(function() {
    $('#example').DataTable( {
      responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

<script>
$(function(){
	/** add active class and stay opened when selected */
	var url = window.location;

	// for sidebar menu entirely but not cover treeview
	$('ul.sidebar-menu a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');

	// for treeview
	$('ul.treeview-menu a').filter(function() {
	    return this.href == url;
	}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

});
</script>
<!-- Data Table Initialize -->
<script>
  $(function () {
    $('#example1').DataTable({
      responsive: true
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- Date and Timepicker -->
<script>
  //Date picker
  $('#datepicker_add').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#datepicker_edit').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  }) 
</script>


