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
        <li class="active">Edit Mutasi Data Karyawan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-md-6">
      <?php foreach($loop as $u){?>
      <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Data Karyawan</h3>
              </div>
         <div class="box-body">
              <label>NRP* : </label>
              <input class="form-control" type="text" value="<?php echo $u->nrp ?>" disabled>
              <label>Full Name* : </label>
              <input class="form-control" type="text"  value="<?php echo $u->full_name ?>" disabled>
              <label>family relation : </label>
              <input class="form-control" type="text" name="family_relation_r" value="<?php echo $u->family_relation_r ?>" disabled>
              <label>full name : </label>
              <input class="form-control" type="text" name="full_name_family_r" value="<?php echo $u->full_name_family_r ?>" disabled>
              <label>Join Date</label>
              <input class="form-control" type="text" name="join_date" value="<?php echo $u->join_date ?>" disabled>
              <label>Company</label>
              <input class="form-control" type="text" name="company" value="<?php echo $u->company?>" disabled>
              <label>Divison</label>
              <input class="form-control" type="text" name="divison" value="<?php echo $u->division?>" disabled>
              <label>Departement</label>
              <input class="form-control" type="text" name="departement" value="<?php echo $u->departement?>" disabled>
              <label>Employee_status</label>
              <input class="form-control" type="text" name="employee_status" value="<?php echo $u->employee_status?>" disabled>
              <label>From date</label>
              <input class="form-control" type="text" name="from_date" value="<?php echo $u->from_date?>" disabled>
              <label>To date</label>
              <input class="form-control" type="text" name="to_date" value="<?php echo $u->to_date?>" disabled>
              <label>Position</label>
              <input class="form-control" type="text" name="position" value="<?php echo $u->position?>" disabled>
              <label>Jabatan</label>
              <input class="form-control" type="text" name="jabatan" value="<?php echo $u->jabatan?>" disabled>
          </div>                 
      </div>
       <?php } ?>
      </div>
      <div class="col-md-6">
        <?php foreach($loop as $u){?>
        <form role="form" action="<?php echo base_url(). 'C_data_karyawan/update_mutasi/'.$nrp; ?>" method="post">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Mutasi</h3>
              </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="form-group">
                        <label>NRP* : </label>
                        <input class="form-control" type="text" name="nrp" value="<?php echo $u->nrp ?>">
                        <label>Full Name* : </label>
                        <input class="form-control" type="text"  name="full_name" value="<?php echo $u->full_name ?>">
                        <label>family relation : </label>
                        <input class="form-control" type="text" name="family_relation_r" value="<?php echo $u->family_relation_r ?>" required>
                        <label>full name : </label>
                        <input class="form-control" type="text" name="full_name_family_r" value="<?php echo $u->full_name_family_r ?>" required>
                        
                        <label>Join Date*</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right datepicker" name="join_date" required>
                          </div>

                        <label>Company</label>
                          <select name="company" class="form-control select2" style="width: 100%;" required>
                            <option id="0" value="" selected="selected"></option>
                            <option id="1" value="PT Phintraco Technology" >PT Phintraco Technology</option>
                            <option id="2" value="PT Phintraco Ekasarana " >PT Phintraco Ekasarana</option>
                            <option id="3" value="PT Phintraco Consultant" >PT Phintraco Consultant</option>
                            <option id="4" value="Mitrakom Ekasarana" >Mitrakom Ekasarana</option>
                            <option id="5" value="Relia" >Relia</option>
                            <option id="6" value="Aplikas" >Aplikas</option>
                            <option id="7" value="Vemisha" >Vemisha</option>
                          </select>
                        
                        <label>Division</label>
                          <select name="division" class="form-control select2" style="width: 100%;"  required>
                            <option id="0" value="" selected="selected"></option>
                            <option id="1" value="HRGA" >HRGA</option>
                            <option id="2" value="Finance and Accounting">Finance and Accounting </option>
                            <option id="3" value="Marketing">Marketing</option>
                            <option id="4" value="Purchasing">Purchasing</option>
                          </select>

                        <label>Departement</label>
                          <select name="departement" class="form-control select2" style="width: 100%;" required>
                            <option id="0" value="" selected="selected"></option>
                            <option id="1" value="Compensation and benefit" >Compensation and benefit</option>
                            <option id="2" value="Recruitment">Recruitment</option>
                            <option id="3" value="Training">Training</option>
                            <option id="4" value="Industrial Relation">Industrial Relation</option>
                            <option id="5" value="Organisation Development">Organisation Development</option>
                          </select>

                       <label>Employee Status</label>
                          <select name="employee_status" class="form-control select2" style="width: 100%;" required>
                            <option id="0" value="" selected="selected"></option>
                            <option value="Kontrak 1" >Kontrak 1</option>
                            <option value="Kontrak 2">Kontrak 2</option>
                            <option value="Magang">Magang</option>
                            <option value="Honorer">Honorer</option>
                            <option value="Termination">Termination</option>
                          </select>
                        
                        <label>From Date*</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right datepicker" name="from_date" required>
                        </div>

                        <label>To Date*</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right datepicker" name="to_date" required>
                        </div>

                        <label>Position*</label> 
                          <select name="position"  class="form-control select2" style="width: 100%;"  required>
                            <option id="0" value="" selected="selected"></option>
                            <option id="1" value="Presiden Direktur">Presiden Direktur</option>
                            <option id="2" value="Direktur">Direktur</option>
                            <option id="3" value="General Manager">General Manager</option>
                            <option id="4" value="Manager">Manager</option>
                            <option id="5" value="Supervisor">Supervisor</option>
                            <option id="6" value="Analyst">Analyst</option>
                            <option id="7" value="Officer">Officer</option>
                            <option id="8" value="Administrator">Administrator</option>
                          </select>

                        <label>Jabatan*</label> 
                        <select name="jabatan" class="form-control select2" style="width: 100%;" required>
                        <option id="0" value="" selected="selected"></option>
                        <option id="1" value="Division Head" >Division Head</option>
                        <option id="2" value="Departement Head">Departement Head</option>
                        <option id="3" value="Section Head">Section Head</option>
                        <option id="4" value="Coordinator">Coordinator</option>
                        </select>
                        
                        
                        
                        <br> <br>
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
