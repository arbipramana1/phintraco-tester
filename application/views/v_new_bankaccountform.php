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
        <li class="active">Employee bank account form</li>
      </ol>
    </section><br>

    <!-- Main content -->
    <section class="content">
    <div class="row">
   
      <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                    <h3 class="box-title">Employee bank account form</h3>
            </div>
           <div class="box box-body">
            <div class="col-md-12">
             <table class="table table-hover" border="0">
             <tr><td width="15%"><label>NRP * : </label></td> <td><input type="text" class="form-control " placeholder="NRP"  style="width:200px;"> </td></tr>
             <tr><td><label>Full Name * : </label></td> <td> <input type="text" class="form-control " placeholder="Full Name" style="width:500px;"> </td></tr>
             <tr><td>Bank *</td><td>  <input type="text" class="form-control " style="width:500px;"> </td></tr>
             <tr><td>Account Number * </td><td>  <input type="text" class="form-control " style="width:500px;"> </td></tr>
             <tr><td>Basic Salary Amount *  </td> <td> <input type="text" class="form-control " style="width:500px;"> <td></td></tr>
             <tr><td>Create by  : </td><td> - </td></tr> 
             <tr><td>Create on : </td><td> - </td></tr> 
             <tr><td>Change by : </td><td> - </td></tr> 
             <tr><td>Change on : </td><td> - </td></tr>
             <tr><td></td><td>
             <button type="button" class="btn btn-primary" onclick="location.href='http://localhost/phintraco/c_employee/new_educationform';">Submit </button>&nbsp;
             <input type="button" class="btn btn-default" onclick="location.href='#';" value="Cancel" />
             </td></tr>
             </table>
              
            </div><!--col-md-12-->
          </div><!--box-body-->
        </div><!--box-primary-->
      </div><!--col-md-12-->
    </div><!--row-->
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
