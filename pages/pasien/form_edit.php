	
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      EDIT DATA PASIEN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">EDIT# DATA PASIEN</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
			
		
<?php
	$conn = new mysqli ("localhost", "root","","project");
	mysqli_connect_errno ();
	
	$id		=$_GET['id'];
	$sql=$conn->query("select * from pasien where id='$id'");
	
	while ($rs=$sql->fetch_object () )	{
			$kode=$rs->kode;
			$nama=$rs->nama;
			$alamat=$rs->alamat;
			
	
	}
?>	
		
<form method="post" action="update_p.php">
<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
<font face="verdana" >
<table width="400" style="background-color:#eee;"  border='2'>
	<tr>

		<td> Kode </td>  <td> <input type="text" name="kode" value="<?php echo $kode; ?>" > <br> </td>
	</tr>

	<tr>
		<td> Nama </td> <td> <input type="text" name="nama" value="<?php echo $nama; ?>" ><br> </td>
	</tr>
	<tr>
		<td> Nomor Surat </td> <td> <input type="text" name="nomor_surat" value="<?php echo $nomor; ?>" ><br> </td>

	</tr>


	<tr>
		<td> Alamat </td> <td> <input type="text" name="alamat" value="<?php echo $alamat; ?>" ><br> </td>
	</tr>


	
	</font>

</body>



	<input type="submit" class="active3" value="  &nbsp;&nbsp;&nbsp;  EDIT  &nbsp;&nbsp;&nbsp;  " >
</form>
           
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->