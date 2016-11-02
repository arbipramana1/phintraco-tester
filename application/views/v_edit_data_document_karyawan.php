<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php include 'title.php'; ?></title>
  
  <!--   link css disini -->
  <?php include 'css.php' ;?>
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
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
        <li class="active">Tambah Dokumen Data Karyawan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-md-6">
        <?php foreach($loop as $u){?>
        <form role="form" action="<?php echo base_url(). 'C_data_karyawan/update_document/'.$nrp; ?>" method="post">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Dokumen Data Karyawan</h3>
              </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="form-group">
                        <label>NRP* : </label>
                        <input class="form-control" type="hidden" name="nrp" value="<?php echo $u->nrp ?>">
                        <input class="form-control" type="text" value="<?php echo $u->nrp ?>" disabled>
                        <label>Full Name* : </label>
                        <input class="form-control" type="hidden" name="full_name" value="<?php echo $u->full_name ?>">
                        <input class="form-control" type="text"  value="<?php echo $u->full_name ?>" disabled>
                        <label>Dcoument* : </label>
                        <input class="form-control" type="text" name="document" value="<?php echo $u->document ?>" required>
                        <label for="exampleInputFile">File</label>
                        <input type="file" id="exampleInputFile" name="file">
                        
                        
                        
                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div> <!-- form group -->
                    </div><!-- /.box-body -->
              </div> <!-- box primary -->
        </form>
        <?php } ?>
      </div>
    </div>
    </section>
    <!-- /.content -->
  </div><!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="">Phintech System Tester</a>.</strong> All rights
    reserved.
  </footer>
</div>  <!-- ./wrapper -->

<!--script di sini-->
<?php include 'script.php' ;?>

</body>
</html>
