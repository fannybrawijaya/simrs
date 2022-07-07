<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      FORM SURAT KONTROL
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA PASIEN</li>
      </ol>
    </section>

	

	
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="/his/index.php?page=formtambah" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
		  
		 
		   <div align="right">
		  <form action="" method="POST">
			<input type="text" name="query"  placeholder="Cari Berdasarkan NORM" />
			<input type="submit" name="cari" class="btn btn-primary" value="CARI" />
			</form>
			 </div>
			 
            <div class="box-body table-responsive">
              <table id="pasien" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Norm</th>
                  <th>Tgl_Kontrol</th>
                  <th>SPRI</th>
                  <th>Alamat</th>
                  <th> No.Surat</th>
                  <th>KRS</th>
                  <th>DX</th>
                  <th>BPJS/UMUM</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>

		<?php

	if(isset($_POST['query'])){
		$query=$_POST['query'];
		$sql=$conn->query("select * from pasien where norm LIKE '%".$query."%' OR nama LIKE '%".$query."%' OR spri LIKE '%".$query."%' order by spri desc");
		
		
	}else{ 
		$sql=$conn->query("select * from pasien order by spri desc");
	}
	while ($rs=$sql->fetch_object () ) {
?>
	<tr>
		<td><?php echo $rs->kode;?></td>
		<td><?php echo $rs->nama?></td>
		<td><?php echo $rs->norm?></td>
		<td><?php echo $rs->tgl_ktrl?></td>
		<td><?php echo $rs->spri?></td>		
		<td><?php echo $rs->alamat?></td>
		<td><?php echo $rs->nomor_surat?></td>
		<td><?php echo $rs->tglkrs?></td>
		<td><?php echo $rs->dx?></td>
		<td><?php echo $rs->bpjs?></td>
		<td><a href="/his/index.php?page=edit_form&id=<?php echo $rs->id; ?>">edit</a></td>
		<td><a href="hapus.php?id=<?php echo $rs->id; ?>">X</a></td>
		</tr>
		

<?php
	}	
?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#pasien').DataTable();
  });
</script>