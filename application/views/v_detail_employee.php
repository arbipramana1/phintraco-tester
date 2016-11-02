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
        <li class="active">Employee detail</li>
      </ol>
    </section><br>

    <!-- Main content -->
    <section class="content">
    <div class="row">
   
      <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                    <h3 class="box-title">Employee detail</h3>
            </div>
           <div class="box box-body">
            <div class="col-md-12">
             <table class="table table-hover" border="2">
             <tr><td width="15%"><label>NRP * : </label></td> <td>  </td></tr>
             <tr><td><label>Full Name * : </label></td> <td>  </td></tr>
             <tr><td><label>Gender *  : </label></td> <td>  </td></tr>               
             <tr><td><label>No. KTP * : </label></td> <td>  </td></tr>
             <tr><td><label>Date of Birth * : </label></td> <td>  </td></tr>
             <tr><td><label>Birth Place * : </label></td> <td>  </td></tr> 
             <tr><td><label>Mother Maiden Name *  :</label></td> <td>  </td></tr>  
             <tr><td><label>Jamsostek : </label></td> <td>  </td></tr> 
             <tr><td><label>Join Date : </label></td> <td>  </td></tr> 
             <tr><td><label>Telephone  : </label></td> <td>  </td></tr> 
             <tr><td><label>Mobile  : </label></td> <td>  </td></tr> 
             <tr><td><label>E-mail  : </label></td> <td>  </td></tr> 
             <tr><td><label>NPWP *  : </label></td> <td>  </td></tr> 
             <tr><td><label>Marital Status *  : </label></td> <td>  </td></tr> 
             <tr><td><label>Children *  : </label></td> <td>  </td></tr> 
             <tr><td><label>Dependent * : </label></td> <td> </td></tr> 
             <tr><td><label>Religion  : </label> </td> <td>  </td></tr>
             <tr><td><label>Valid To : </label> </td><td> </td></tr> 
             <tr><td><label>Password *  : </label> </td> <td>  </td></tr> 
             <tr><td><label>Attendance ID : </label> </td> <td> </td></tr> 
            </table>
            <hr>
            <table class="table table-hover" border="2"> 
             <tr><td width="15%"><label>Position *  : </label></td> <td> </td></tr> 
             <tr><td><label>Employee Status * : </label> </td> <td> </td></tr> 
             <tr><td><label>Departement * : </label></td> <td> </td></tr>
             <tr><td><label>Branch *  : </label></td> <td> </td></tr>
             <tr><td><label>Outlet *  : </label></td> <td> </td></tr> 
              <tr><td><label>Jabatan * : </label> <br><br>*) Untuk mutasi lakukan di menu mutasi yang telah disediakan agar record tercatat. </td> <td> </td></tr>
             <tr><td><label>From Date * : </label></td> <td>  </td></tr> 
             <tr><td><label>To Date * : </label></td> <td>  </td></tr> 
            </table>
            
            <table class="table table-hover" border="2">
             <tr><td width=15%> <label>Pangkat :  </label></td> <td>  </td></tr>
            </table>
            
            <table class="table table-hover" border="2">
             <tr><td width="15%"><label>Golongan  :</label> <td> </td></tr>
              <tr><td><label>Create by : </label></td> <td>  </td></tr>
              <tr><td><label>Create on : </label></td> <td>  </td></tr>
              <tr><td><label>Change by : </label></td> <td>  </td></tr>
              <tr><td><label>Change on : </label></td> <td>  </td></tr>
            </table>
            
            <br><b>RECORD</b>
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

            <br><b>Address</b>
            <table class="table table-hover" border="2">
             <tr>
               <th> No.</th>
               <th> Adress Type </th>
               <th> Address </th>
               <th> City  </th>
            </tr>

             <tr>
               <td>  </td>
               <td>  </td>
               <td>  </td>
               <td>  </td>
             </tr>
            </table>
                        
            <table class="table table-hover" border="0">
             <tr>
             <td width=15%></td>
             <td>
             <button type="button" class="btn btn-danger" onclick="location.href='#;">Delete </button>&nbsp;
             <button type="button" class="btn btn-default" onclick="location.href='#';">Edit </button>&nbsp;
             <button type="button" class="btn btn-default" onclick="location.href='http://localhost/phintraco/c_employee';"> Cancel </button>
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
