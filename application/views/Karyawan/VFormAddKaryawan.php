<form action="<?php echo site_url('Karyawan/AddDataKaryawan'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Karyawan</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="text" class="form-control" placeholder="Masukan NIK" name="nik">
                  </div>
                  
                  <div>
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama" name="nama">
                  </div>

                  <div>
                    <label>Jabatan</label>
                    <input type="text" class="form-control" placeholder="Masukan Jabatan" name="jabatan">
                  </div>

                  <div>
                    <label>NO Telepon</label>
                    <input type="text" class="form-control" placeholder="Dilarang menggunakan 0" name="no_tlp">
                  </div>

                  <div>
                  <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
                  </div>
                 </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> 
              </form>
            </div>
            <!-- /.box -->