<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    .dt-buttons{
      display:none;
    }
    th{
      color:#0751AF;
    }
  </style>
</head>

<body style="height:600px;padding:20px;" class="hold-transition sidebar-mini">


  <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>COMPANY NAME</th>
      <th>AVG. BUY PRICE</th>
      <th>AVG. SELL PRICE</th>
      <th>PRICE RANGE</th>
      <th>Expected IPO Price</th>
      <th>PE</th>
      <th>PB</th>
      <th>Industry PE</th>
      <th>Industry PB</th>
      <th>Valuation Zone</th>
    </tr>
    </thead>
    <tbody>

    <?php
  
      $json = file_get_contents('https://api1.unlistedassets.com/association/allcompanies');
      $obj = json_decode($json);
      foreach($obj as $data){
        ?>
          <tr>
            <td><b><?php echo $data->company_name;?></b></td>
            <td><?php echo $data->buy_price;?></td>
            <td><?php echo $data->sell_price;?></td>
            <td><?php echo $data->price_range;?></td>
            <td><?php echo $data->expected_ipo;?></td>
            <td><?php echo $data->pe;?></td>
            <td><?php echo $data->pb;?></td>
            <td><?php echo $data->industry_pe;?></td>
            <td><?php echo $data->industry_pb;?></td>
            <td><?php echo $data->viluation_zone;?></td>
          </tr>
        <?php
      }

    ?>

    </tbody>
  </table>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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
