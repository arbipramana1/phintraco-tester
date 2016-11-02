<!DOCTYPE html>
<html>
<head>
  
  <?php require_once BASEPATH . '/helpers/url_helper.php'; ?> <!-- Helper -->
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> <?php include 'title.php'; ?> </title>
  
  <!--   link css disini -->
  <?php include 'css.php' ;?>
  
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
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employee History</li>
      </ol>
    </section><br>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12" >
          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Employee History</h3>
              </div>
            <div class="box box-body">
              <div class="col-md-12">
                <table>
                  <tr>
                    <td width="250px">No </td>
                    <td width="300px"> : 0001 </td> <!-- << dari dBase -->
                    <td width="250px">Branch </td>
                    <td> : *branch </td> <!-- << dari dBase -->
                  </tr>
                  <tr>
                    <td>Nama </td>
                    <td> : Arbi Pramana </td> <!-- << dari dBase -->
                    <td width="250px">Join Date </td>
                    <td> : *join date </td> <!-- << dari dBase -->
                  </tr>
                </table>
                
                <tr><td><br><br><b>RECORD</b></td></tr>
                <table class="table table-hover" border="2">
                 <tr>
                   <th> No.</th>
                   <th> Branch </th>
                   <th> Outlet </th>
                   <th> Employee Status  </th>
                   <th> Position   </th>
                   <th> Departement  </th>
                   <th> Degree  </th>
                   <th> From Date   </th>
                   <th> To Date </th>
                   <th> Resign Date </th>
                 </tr>

                 <tr>
                   <td>  </td>
                   <td>  </td>
                   <td>  </td>
                   <td>  </td>
                   <td>  </td>
                   <td>  </td>
                   <td>  </td>
                   <td>  </td>
                   <td>  </td>
                   <td>  </td>
                 </tr>
                </table>                
                               
              </div>
            </div>
          </div>
        </div>
      </div>
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

<!--script di sini-->
<?php include 'script.php' ;?>

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

function deleteItem(el) {
  var $row = $(el).closest("tr"); // ngambil <tr> terdekat diatas el (inputan)
  $row.remove(); // dihapus tr-nya
}
</script>
<!-- Javascript tambah item end-->

</body>
</html>
