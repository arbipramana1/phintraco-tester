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
        <li class="active">Employee Mutation form</li>
      </ol>
    </section><br>

    <!-- Main content -->
    <section class="content">
    <div class="row">
   
      <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                    <h3 class="box-title">Employee Mutation form</h3>
            </div>
           <div class="box box-body">
            <div class="col-md-12">
             <table class="table table-hover" border="0">

             <tr><td width="15%"><label>NRP : </label></td> <td><input type="text" class="form-control " placeholder="NRP"  style="width:200px;"></td></tr>
             
             <tr><td width="15%"><label>Full name : </label></td> <td><input type="text" class="form-control " placeholder="Full name"  style="width:200px;"></td></tr>

             <tr><td width="15%"><label>Join Date * : </label></td>
             <td>
             <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-left datepicker" name="join_date" required" required style="width:300px;"><!--join date-->
              </div>
             </td></tr> 
             

             <tr><td width="15%"><label>Branch *  : </label></td>
             <td> <select name="" class="form-control  select2" style="width: 20%;" required style="width:500px;">
                  <option name="" id="0" value="Branch" selected="selected" >Branch</option>
             </select></td></tr>
             <tr><td width="15%"><label>Outlet *  : </label></td>
             <td> 
             <select name="" class="form-control select2" style="width: 20%;" required>
                  <option name="" id="0" value="Outlet" selected="selected" style="width:500px;">Outlet</option>
             </select></td></tr> 
             <tr><td width="15%"><label>Employee Status * : </label></td>
             <td>
              <select name="" class="form-control select2" style="width: 20%;" required>
                  <option name="" id="0" value="Employee_Status" selected="selected" style="width:500px;">Employee Status</option>
              </select>
             </td></tr>

             <tr><td width="15%"><label>Departement * : </label></td>
             <td>
              <select name="" class="form-control select2" style="width: 20%;" required>
                  <option name="" id="0" value="Employee_Status" selected="selected" >Departement</option>
              </select>
             </td></tr> 

              <tr><td width="15%"><label>Degree : </label></td> <td><input type="text" class="form-control " placeholder="Degree"  style="width:200px;"></td></tr>
             
             <tr><td width="15%"><label>From Date * : </label></td>
             <td>
             <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-left datepicker" name="" required required style="width:300px;"><!--to date-->
              </div>
             </td></tr> 

             <tr><td width="15%"><label>To Date * : </label></td>
             <td>
             <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-left datepicker" name="" required required style="width:300px;"><!--to date-->
              </div>
             </td></tr> 

              <tr><td width="15%"><label>Employee Type: </label></td> <td><input type="text" class="form-control " placeholder=""  style="width:200px;"></td></tr>
              </table>

              <hr>
            <label><h4>Mutation</h4></label>
             <table class="table">
            
              <tr><td width="15%"><label>New Branch *  : </label></td>
             <td> <select name="" class="form-control  select2" style="width: 20%;" required style="width:500px;">
                  <option name="" id="0" value="Branch" selected="selected" >Branch</option>
             </select></td></tr>
             <tr><td width="15%"><label>New Outlet *  : </label></td>
             <td> 
             <select name="" class="form-control select2" style="width: 20%;" required>
                  <option name="" id="0" value="Outlet" selected="selected" style="width:500px;">Outlet</option>
             </select></td></tr> 
             <tr><td width="15%"><label>New Employee Status * : </label></td>
             <td>
              <select name="" class="form-control select2" style="width: 20%;" required>
                  <option name="" id="0" value="Employee_Status" selected="selected" style="width:500px;">Employee Status</option>
              </select>
             </td></tr>

             <tr><td width="15%"><label>New Departement * : </label></td>
             <td>
              <select name="" class="form-control select2" style="width: 20%;" required>
                  <option name="" id="0" value="Employee_Status" selected="selected" >Departement</option>
              </select>
             </td></tr> 

              <tr><td width="15%"><label>New Degree : </label></td> <td><input type="text" class="form-control " placeholder="Degree"  style="width:200px;"></td></tr>
             
             <tr><td width="15%"><label>New From Date * : </label></td>
             <td>
             <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-left datepicker" name="" required required style="width:300px;"><!--to date-->
              </div>
             </td></tr> 

             <tr><td width="15%"><label>New To Date * : </label></td>
             <td>
             <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-left datepicker" name="" required required style="width:300px;"><!--to date-->
              </div>
             </td></tr> 

              <tr><td width="15%"><label>New Employee Type: </label></td> <td><input type="text" class="form-control " placeholder=""  style="width:200px;"></td></tr>
             <tr><td width="15%"></td><td><div style="height:5px;border:0px solid #000"></div>
             <button type="button" class="btn btn-primary" onclick="location.href='http://localhost/phintraco/c_mutation';">Submit </button>&nbsp;
             <button type="button" class="btn btn-default" onclick="location.href='http://localhost/phintraco/c_mutation';"> Cancel </button>
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
