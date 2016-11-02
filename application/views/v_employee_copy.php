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
        <li class="active">Employee</li>
      </ol>
    </section><br>

    <!-- Main content -->
    <section class="content">
		<div class="row">
			<div class="col-md-12">
			  <div class="box box-primary">
			  		<div class="box-header with-border">
                		<h3 class="box-title">Employee</h3>
             		</div>
             		<div class="box box-body">
						<table class="table table-hover" border="0">
							<tr><td width="15%"><label>Branch : </label></td> 
							<td>
							<select name="" class="form-control  select2" style="width: 20%;" required>
                            <option name="" id="0" value="Branch" selected="selected">Branch</option>
                        	</select></td></tr>	
							<tr><td width="15%"><label>Outlet : </label></td>
							<td>
							<select name="" class="form-control select2" style="width: 20%;" required>
                            <option name="" id="0" value="Outlet" selected="selected">Outlet</option>
                        	</select>	
							</td></tr>								
							<tr><td width="15%"><label>Employee Status Approval : </label></td>
							<td>
							<select name="" class="form-control select2" style="width: 20%;" required>
                            <option name="" id="0" value="Employee_Status_Approval" selected="selected">Employee Status Approval</option>
                        	</select>	
							</td></tr>								
							<tr><td width="15%"><label>Employee Type : </label></td>
							<td>
							<select name="" class="form-control select2" style="width: 20%;" required>
                            <option name="" id="0" value="Employee_Type" selected="selected">Employee Type</option>
                       		</select>
							</td></tr>	
							<tr><td width="15%"><label>Position : </label></td>
							<td>
							<select name="" class="form-control select2" style="width: 20%;" required>
                            <option name="" id="0" value="Position" selected="selected">Position</option>
                        	</select>
							</td></tr>	
							<tr><td width="15%"><label>Employee Status : </label></td>
							<td><select name="" class="form-control select2" style="width: 20%;" required>
                            <option name="" id="0" value="Employee_Status" selected="selected">Employee Status</option>
                        	</select></td></tr>	
							<tr><td width="15%"><label>From Join Date : </label></td>
							<td>
							<div class="input-group date">
	                          <div class="input-group-addon">
	                            <i class="fa fa-calendar"></i>
	                          </div>
	                          <input type="text" class="form-control pull-left datepicker" name="from_date" required style="width:300px;">
	                        </div>
							</td></tr>	
							<tr><td width="15%"><label>To Join Date : </label></td>
							<td>
							<div class="input-group date">
	                          <div class="input-group-addon">
	                            <i class="fa fa-calendar"></i>
	                          </div>
	                          <input type="text" class="form-control pull-left datepicker" name="from_date" required style="width:300px;">
	                        </div>
							</td></tr>	
							<tr><td width="15%"><label>To Resign Date : </label></td>
							<td>
							 <div class="input-group date">
	                          <div class="input-group-addon">
	                            <i class="fa fa-calendar"></i>
	                          </div>
	                          <input type="text" class="form-control pull-left datepicker" name="from_date" required style="width:300px;">
	                        </div>	
							</td></tr>	

							<tr>
							<td width="15%"><label>Create on : </label></td>
							<td >
							From : <div class="input-group date">
	                          <div class="input-group-addon">
	                            <i class="fa fa-calendar"></i>
	                          </div>
	                          <input type="text" class="form-control pull-left datepicker" name="from_date" required style="width:300px;">
	                        </div>

							
	                        To : <div class="input-group date">
	                          <div class="input-group-addon">
	                            <i class="fa fa-calendar"></i>
	                          </div>
	                          <input type="text" class="form-control pull-left datepicker" name="from_date" required style="width:300px;">
	                        </div>
							</td>
							</tr>	
							<tr><td width="15%"><label>Number : </label></td><td> <input type="text" class="form-control " placeholder="Number" style="width:500px;"> </td></tr>	
							<tr><td width="15%"><label>Full Name : </label></td><td> <input type="text" class="form-control " placeholder="Full Name " style="width:500px;"> </td></tr>	
							<tr><td width="15%"><label>Attendance ID : </label></td><td> <input type="text" class="form-control " placeholder="Attendance ID " style="width:500px;"> </td></tr>	
							<tr><td width="15%"><label>Jamsostek : </label></td>
							<td><input type="radio" name="" class="minimal" checked> Ada <input type="radio" name="" class="minimal" > Tidak ada <input type="radio" name="" class="minimal" > All </td></tr>
							<tr>
							<td width="15%"></td><td><div style="height:20px;border:0px solid #000"></div>
							<button type="button" class="btn btn-success">Search </button><div style="height:30px;border:0px solid #000"></div>
							</td></tr>	
						</table>
						</div>
						
						</div>
					</div>
				</div>
		
		<div class="row">
			<div class="col-md-12" >
				<div class="box box-body" style="overflow-x:auto;" id="dvData">
		              <table id="example1" class="table table-bordered table-striped" >
		                <thead>
		                <tr>
		                  <th>Number</th>
		                  <th>Attendance id</th>
		                  <th>Full name</th>
		                  <th>Branch</th>
		                  <th>Outlet</th>
		                  <th>Join date</th>
		                  <th>Appointment date</th>
		                  <th>Resign date</th>
		                  <th>Employee status approval</th>
		                  <th>Employee typee</th>
		                  <th>Action</th>
		                </tr>
		                </thead>
		                <!-- <tbody>
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
		                </tbody> -->

						<tbody>
		                <tr>
		                  <th>1</th>
		                  <th>01</th>
		                  <th>Arbi</th>
		                  <th>Jakarta</th>
		                  <th>Simpang 4</th>
		                  <th>26/6/2016</th>
		                  <th>26/6/2016</th>
		                  <th>27/6/2016</th>
		                  <th>Rejected</th>
		                  <th>Magang</th>
		                  <th>
		                  <a href="http://localhost/phintraco/c_employee/detail_employee"> Detail</a> 
		                  <a href="http://localhost/phintraco/c_employee/edit_employee"> Edit</a> 
 		                  <a href="http://localhost/phintraco/c_employee/new_addressform"> Address</a>
		                  <a href="http://localhost/phintraco/c_employee/new_bankaccountform"> Bank Account</a>
		                  <a href="http://localhost/phintraco/c_employee/new_documentform"> Document </a> 
		                  <a href="http://localhost/phintraco/c_employee/new_educationform"> Education </a>
		                  <a href="http://localhost/phintraco/c_employee/new_familyform"> Family & Emergency Contact Employee</a>
		                  <a href="http://localhost/phintraco/c_employee/history_employee"> History</a>
		                  </th>
		                </tr>
		                </tbody>

		                <tfoot>
		                <tr>
		                  <th>Number</th>
		                  <th>Attendance id</th>
		                  <th>Full name</th>
		                  <th>Branch</th>
		                  <th>Outlet</th>
		                  <th>Join date</th>
		                  <th>Appointment date</th>
		                  <th>Resign date</th>
		                  <th>Employee status approval</th>
		                  <th>Employee type</th>
		                  <th>Action</th>
		                </tr>
		                </tfoot>
		              </table>
		              <button type="button" class="btn btn-success" onclick="location.href='http://localhost/phintraco/c_employee/new_employee';" />New Employee</button>
		              <button type="button" class="btn btn-info" >Download Excel </button>
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
