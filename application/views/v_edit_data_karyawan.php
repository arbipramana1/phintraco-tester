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
        <li class="active">Update data karyawan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-md-6">
        <?php foreach($loop as $u){?>
        <form role="form" action="<?php echo base_url(). 'C_data_karyawan/update/'.$nrp; ?>" method="post">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Update Data Karyawan</h3>
              </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="form-group">
                        <label>NRP* : </label>
                        <input class="form-control" type="text" name="nrp" value="<?php echo $u->nrp ?>" required>
                        <label>Full Name* : </label>
                        <input class="form-control" type="text" name="full_name" value="<?php echo $u->full_name ?>" required>
                        <label>Gender* : </label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="gender" id="optionsRadios1" value="male" checked>
                            Male
                          </label>
                          <label>
                            <input type="radio" name="gender" id="optionsRadios2" value="female">
                            Female
                          </label>
                        </div>
                        <label>No KTP* : </label>
                        <input class="form-control" type="text" name="no_ktp" value="<?php echo $u->no_ktp ?>" required>
                       
                        <label>Date of Birth*</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right datepicker" name="date_of_birth" value="<?php echo $u->date_of_birth ?>" required>
                          </div>
                        
                        <label>Birth Place*</label>
                        <input class="form-control" type="text" name="birth_place" value="<?php echo $u->birth_place ?>" required>
                        <label>Mother Maiden Name*</label>
                        <input class="form-control" type="text" name="mother_maiden_name" value="<?php echo $u->mother_maiden_name ?>" required>
                        <label>Jamsostek*</label>
                        <input class="form-control" type="text" name="jamsostek" value="<?php echo $u->jamsostek ?>" required>
                        
                        <label>Join Date*</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right datepicker" name="join_date" value="<?php echo $u->join_date ?>" required>
                          </div>
                        
                        <label>Telephone</label>
                        <input class="form-control" type="text" name="telephone" value="<?php echo $u->telephone ?>" >
                        <label>Mobile</label>
                        <input class="form-control" type="text" name="mobile" value="<?php echo $u->mobile ?>" >
                        <label>Email*</label>
                        <input class="form-control" type="email" name="email" value="<?php echo $u->email ?>" required>
                        <label>NPWP*</label>
                        <input class="form-control" type="text" name="npwp" value="<?php echo $u->npwp ?>" required>
                        <label>Marital Status*</label>
                        <input class="form-control" type="text" name="marital_status" value="<?php echo $u->marital_status ?>" required>
                        <label>Children</label>
                        <input class="form-control" type="text" name="children" value="<?php echo $u->children ?>" >
                        <label>Dependent</label>
                        <input class="form-control" type="text" name="dependent" value="<?php echo $u->dependent ?>" >
                        <label>Religion</label>
                        <input class="form-control" type="text" name="religion" value="<?php echo $u->religion ?>" >
                        <label>Password*</label>
                        <input class="form-control" type="text" name="password" value="<?php echo $u->password ?>" required>

                        <label for="exampleInputFile">Photos</label>
                        <input type="file" id="exampleInputFile" name="photos">
                        <label>Note</label>
                        <input class="form-control" type="text" name="note" >

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
