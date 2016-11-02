<!DOCTYPE html>
<html>
<head>
  
  <?php require_once BASEPATH . '/helpers/url_helper.php'; ?> <!-- Helper -->
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Phintech Tester System  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url('assets/admin-lte/bootstrap/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/admin-lte/dist/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('assets/admin-lte/dist/css/skins/_all-skins.min.css') ?>">
    
    

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <?php include 'header.php'; ?>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <?php include 'sidebar.php'; ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Phintech Tester system
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Item</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <button class="btn btn-sm btn-success" onclick="addItem(event)">Tambah Item</button> <!-- << addItem, mesti dibikin di js -->
        <form action="<?= base_url('dashboard/post_tambah_data') ?>" method="POST"> <!-- << showData ini contoh, nggak usah dipake gpp -->
          <table id="list-items" class="table table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Barang</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Subtotal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody></tbody>
            <tfoot>
              <tr>
                <td colspan="4" class="text-right">Grand Total</td>
                <td id="grandtotal"></td>
                <td></td>
              </tr>
            </tfoot>
          </table>
          <button class="btn btn-primary">Submit</button>
        </form>

        <!-- ini untuk nampilin hasil showData, buat ngeliatin hasil formnya gimana -->
        <br>
        <pre id="result"></pre>

        <!-- template row untuk di append pas klik tambah item -->
        <template id="row-item">
          <tr class="row-item">
            <td>{{ no }}</td> <!-- @A -->
            <td>
              <input class="nama_barang form-control" type='text' name='nama_barang[]'/>
            </td>
            <td>
              <input class="harga form-control" type='text' name='harga[]' onkeyup="calculateSubtotal(this)"/>
            </td>
            <td>
              <input class="qty form-control" type='text' name='qty[]' onkeyup="calculateSubtotal(this)"/>
            </td>
            <td>
              <span class="subtotal"></span>
            </td>
            <!-- $(el).closest('tr') berarti <tr class="row-item"> -->
            <td>
              <a onclick="deleteItem(this)" class="btn btn-remove btn-danger btn-sm">hapus</a>
            </td>
            <!-- $(el).closest('tr') berarti <tr class="row-item"> -->
          </tr>
        </template>
        
        <!-- <?php echo $output; ?> -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="">Phintech System Tester</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url('assets/admin-lte/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url('assets/admin-lte/bootstrap/js/bootstrap.min.js') ?>"></script>
<!-- SlimScroll -->
<script src="<?= base_url('assets/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/admin-lte/plugins/fastclick/fastclick.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin-lte/dist/js/app.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/admin-lte/dist/js/demo.js') ?>"></script>

<!-- Javascript tambah item start-->
<script type="text/javascript">
function addItem() { 
  var template = $("template#row-item").html(); // isinya string <tr class='row-item'>...</tr>
  var no = $("table#list-items").find("tbody > tr").length + 1; // ini ngambil banyak <tr> didalam <tbody> di <table id="list-items"> ditambah 1
  template = template.replace('{{ no }}', no);  // replace {{ no }} (@A) jadi si no
  $("table#list-items > tbody").append(template); // masukin string template yg <tr blbala>...</tr> kedalam <tbody>
}

// nggak penting
function showData(e) {
  e.preventDefault();
  $("#result").html(JSON.stringify($(e.target).serializeArray()));
}

function calculateSubtotal(el) { // el ini si 'this' di onkeyup, this ini si <input> tempat onkeyup itu
  var $row = $(el).closest("tr"); // ngambil <tr> terdekat diatas el (inputan)
  var $harga = $row.find("input.harga"); // ngambil <input> yg classnya 'harga' 
  var $qty = $row.find("input.qty");  // ngambil <input> yg classnya 'qty'
  var harga = isNaN(val = parseInt($harga.val()))? 0 : val; // intinya ini dapetin nilai berupa int dari nilai inputan
  var qty = isNaN(val = parseInt($qty.val()))? 0 : val;
  var subtotal = harga * qty; // taulah
  
  $row.find(".subtotal").text(subtotal? subtotal : '-'); // kalo subtotal bukan 0 tampilin subtotal, tapi kalo 0, tampilin '-' di element dengan class 'subtotal'
  updateGrandTotal();
}

function updateGrandTotal() {
  var grand_total = 0;
  $(".subtotal").each(function() { // << loop element dengan class subtotalbih pa
    var subtotal = parseInt($(this).text()); // this ini si .subtotal yg di loop, jadi ini nge-parseInt text didalem .subtotal itu
    if (!isNaN(subtotal)) { // NaN = not a number, jadi ini artinya jika subtotal bukan bukan nomor (jika subtotal adalah nomor)
      grand_total += subtotal; // grandtotal ditambahin subtotal
    }
  });
  
  $("#grandtotal").text(grand_total); // masukin grand_total ke elemen dengan id 'grandtotal'
}

function deleteItem(el) {
  var $row = $(el).closest("tr"); // ngambil <tr> terdekat diatas el (inputan)
  $row.remove(); // dihapus tr-nya
}
</script>
<!-- Javascript tambah item end-->

</body>
</html>
