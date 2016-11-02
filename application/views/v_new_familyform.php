<!DOCTYPE html>
<html>
<head>
  
  <?php require_once BASEPATH . '/helpers/url_helper.php'; ?> <!-- Helper -->
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php include 'title.php'; ?></title>
  
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
        <li class="active">Employee family relation form</li>
      </ol>
    </section><br>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12" >
          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Employee family relation form</h3>
              </div>
            <div class="box box-body">
              <div class="col-md-12">
                <table>
                  <tr>
                    <td width="250px">No </td>
                    <td> : 0001 </td> <!-- << dari dBase -->
                  </tr>
                  <tr>
                    <td>Nama </td>
                    <td> : Arbi Pramana </td> <!-- << dari dBase -->
                  </tr>
                </table>
                <br><button class="btn btn-sm btn-success" onclick="addItem(event)">Tambah</button> <!-- << addItem, mesti dibikin di js -->

                <form action="http://localhost/phintraco/c_employee/" method="POST"> <!-- << showData ini contoh, nggak usah dipake gpp -->
                  <br>
                  <table id="list-items" class="table table-bordered">
                    <thead>
                      <tr>
                        <th width=2%>No</th> 
                        <th width=5%>Family Relation</th> 
                        <th width=5%>Full Name </th>
                        <th width=5%>Birth Place</th> 
                        <th width=5%>Birth Date  </th>
                        <th width=5%>Emergency Contact</th>
                        <th width=5%>Action</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                  <button class="btn btn-primary">Submit</button>
                  <input type="button" class="btn btn-default" onclick="location.href='#';" value="Cancel" />
                </form>

                <!-- 
                <br>
                <pre id="result"></pre>
                ini untuk nampilin hasil showData, buat ngeliatin hasil formnya gimana -->

                <!-- template row untuk di append pas klik tambah item -->
                <template id="row-item">
                  <tr class="row-item">
                    <td>{{ no }}</td> <!-- @A -->
                    <td>
                      <select>
                        <option value="" selected="selected" ></option>
                        <option value="" >ANAK</option>
                        <option value="" >AYAH</option>
                        <option value="" >IBU</option>
                        <option value="" >KAKEK</option>
                        <option value="" >NENEK</option>
                        <option value="" >ISTRI</option>
                        <option value="" >SUAMI</option>
                      </select>
                    </td>
                    <td>
                    <input type="text" name="">
                    </td>
                    <td>
                    <input type="text" name="">
                    </td>
                    <td>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-left datepicker" name="" required style="width:300px;"><!--to date {belum running script}-->
                      </div>
                    </td>
                    <td>
                    <input type="text" name="">
                    </td>

                    
                    <!-- $(el).closest('tr') berarti <tr class="row-item"> -->
                    <td>
                      <a onclick="deleteItem(this)" class="btn btn-remove btn-danger btn-sm">hapus</a>
                    </td>
                    <!-- $(el).closest('tr') berarti <tr class="row-item"> -->
                  </tr>
                </template>
                                
                               
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

<!-- script di sini -->
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
