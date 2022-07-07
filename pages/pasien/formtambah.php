<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH DATA PASIEN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH DATA PASIEN</li>
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
            <!-- form start -->
            <form role="form" method="post" action="/his/index.php?page=simpan">
            <div class="box-body">
			 <div class="col-md-6">
			  <div class="col-md-12">
			   <div class="col-sm-3">
                <div class="form-group">
                  <label>Kode</label>
                  <input type="text" name="kode1" class="form-control" placeholder="Kode" required>
                </div>
				  </div>
				  </div>
				    </div>
			
			<div class="col-md-6">
			  <div class="col-md-12">
			  <div class="col-sm-7">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>
				 </div>
				  </div>
				   </div>
				   
			<div class="col-md-6">
			  <div class="col-md-12">
				<div class="col-sm-8">				  
				  <div class="form-group">
                  <label>Nomor Surat</label>
                  <input type="text" name="nomor_surat" class="form-control" placeholder="Nomor Surat" required>
                </div>
				</div>
				  </div>
				   </div>
				  
			<div class="col-md-6">
			  <div class="col-md-12">
				<div class="col-sm-8">
				  <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                </div>
				</div>
				  </div>
				   </div>
				  
			<div class="col-md-6">
			  <div class="col-md-12">
				<div class="col-sm-3">
				  <div class="form-group">
                  <label>Norm</label>
                  <input type="text" name="norm" class="form-control" placeholder="Norm" required>
                </div>
				</div>
				  </div>
				  </div>
				  
				  
			<div class="col-md-6">
			  <div class="col-md-12">
				<div class="col-sm-8">			  
				  <div class="form-group">
                  <label>Tgl_KRS</label>
                  <input type="date" name="tglkrs" class="form-control" placeholder="tglkrs" required>
                </div>
				</div>
				  </div>
				    </div>
				    
					
			<div class="col-md-6">
			  <div class="col-md-12">
				<div class="col-sm-8">			  
				  <div class="form-group">
                  <label>Diagnosa</label>
                  <input type="text" name="dx" class="form-control" placeholder="Diagnosa" required>
                </div>
				</div>
				  </div>
				    </div>
				  
				<div class="col-md-6">
			  <div class="col-md-12">	
				<div class="col-sm-8">				  
                <div class="form-group">
                  <label>BPJS/UMUM</label>
                  <select class="form-control" name="bpjs">
                    <option value="">- Pilih  -</option>
                    <option value="bpjs">bpjs</option>
                    <option value="umum">umum</option>
                  </select>
                </div>
				</div>
				  </div>
				  		</div>

						
		<div class="col-md-6">
			  <div class="col-md-12">
					<div class="col-sm-8">	
				  <div class="form-group">
                  <label>Tanggal Kontrol</label>
                  <input type="date" name="tgl_ktrl"  class="form-control" placeholder="Tanggal Kontrol" required>
                </div>
				</div>
				  </div>
				  </div>
				  
			<div class="col-md-6">
			  <div class="col-md-12">
				<div class="col-sm-8">			  
				  <div class="form-group">
                  <label>SPRI</label>
                  <input type="text" name="spri" class="form-control" placeholder="SPRI" required>
                </div>
				</div>
				  </div>
				    </div>
				  
			<div class="col-md-6">
			  <div class="col-md-12">
				<div class="col-sm-8">
				  <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" required>
                </div>
				</div>
				  </div>
				  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->