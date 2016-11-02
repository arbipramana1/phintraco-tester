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

<style type="text/css">
.input-xs {
  height: 22px;
  padding: 2px 5px;
  margin-bottom : 5px;
  font-size: 12px;
  line-height: 1.5; /* If Placeholder of the input is moved up, rem/modify this. */
  border-radius: 3px;
}
</style>

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
        <li class="active">Employee mutation</li>
      </ol>
    </section><br>

    <!-- Main content -->
    <section class="content">
		<div class="row">
			<div class="col-md-12">
			  <div class="box box-primary">
			  		<div class="box-header with-border">
                		<h3 class="box-title">Employee mutation</h3>
             		</div>
             		<div class="box box-body">
						<table class="table table-hover" border="0">
							<tr><td width="15%"><label>Branch : </label></td> 
							<td>
							*Branch</td></tr>	
							<tr><td width="15%"><label>Outlet : </label></td>
							<td>
							*Outlet
							</td></tr>								
							<tr><td width="15%"><label>Employee Status Approval : </label></td>
							<td>
							*Employee Status Approval	
							</td></tr>								
							
							<tr><td width="15%"><label>Position : </label></td>
							<td>
							*Position 
							</td></tr>	
							<tr><td width="15%"><label>Employee Status : </label></td>
							<td>
							*Employee Status
							</td></tr>	
							<tr><td width="15%"><label>From Join Date : </label></td>
							<td>
							*From Join Date
							</td></tr>	
							<tr><td width="15%"><label>To Join Date : </label></td>
							<td>
							*To Join Date
							</td></tr>	
							
								
							<tr><td width="15%"><label>Number : </label></td>
							<td>
							*Number
							</td></tr>	

							<tr><td width="15%"><label>Full Name : </label></td>
							<td>
							*Full Name
							</td></tr>	
							
							<tr>
							<td width="15%"></td><td><div style="height:20px;border:0px solid #000"></div>
							<button type="button" class="btn btn-default" onclick="location.href='http://localhost/phintraco/c_mutation';" >Back </button><div style="height:30px;border:0px solid #000"></div>
							</td></tr>	
						</table>
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



</body>
</html>
