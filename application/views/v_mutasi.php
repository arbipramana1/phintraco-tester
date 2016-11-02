<!DOCTYPE html>
<html>
<head>
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
        <li class="active">View Data Mutasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mutasi Karyawan</h3><br><br>
                        
            <!-- << addItem, mesti dibikin di js -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>nrp</th>
                  <th>full_name</th>
                  <th>join_date</th>
                  <th>company</th>
                  <th>division</th>
                  <th>departement</th>
                  <th>Employee status</th>
                  <th>Position</th>
                  <th>Jabatan</th>
                  <th>From Date</th>
                  <th>To Date</th>
                  <th>Employee Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach($loop as $u){ 
                  ?>
                  <tr>
                    <td><?php echo $u->nrp?></td>
                    <td><?php echo $u->full_name?></td>
                    <td><?php echo $u->join_date ?></td>
                    <td><?php echo $u->company?></td>
                    <td><?php echo $u->division?></td>
                    <td><?php echo $u->departement?></td>
                    <td><?php echo $u->employee_status?></td>
                    <td><?php echo $u->position?></td>
                    <td><?php echo $u->jabatan?></td>
                    <td><?php echo $u->from_date?></td>
                    <td><?php echo $u->to_date?></td>
                    <td><?php echo $u->employee_status?></td>
                    
                    <td>
                          <?php echo anchor('c_data_karyawan/edit_mutasi/'.$u->nrp,'Mutasi'); ?> 
                          
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>nrp</th>
                  <th>full_name</th>
                  <th>join_date</th>
                  <th>company</th>
                  <th>division</th>
                  <th>departement</th>
                  <th>Employee status</th>
                  <th>Position</th>
                  <th>Jabatan</th>
                  <th>From Date</th>
                  <th>To Date</th>
                  <th>Employee Status</th>
                  <th>Aksi</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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

</body>
</html>
