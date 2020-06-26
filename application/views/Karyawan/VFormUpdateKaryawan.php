<!-- Main content -->
<form action="<?php echo site_url('Karyawan/UpdateDataKaryawan'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Karyawan</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                  <div class="form-group">
                    <label>Nama</label>
                    <br>
                    <input type="hidden" name="nik" value="<?php echo $detail['nik']; ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Jabatan</label>
                    <br>
                    <input type="text" name="jabatan" class="form-control" value="<?php echo $detail['jabatan']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>No Telepon</label>
                    <br>
                    <input type="text" name="no_tlp" class="form-control" placeholder="Dilarang menggunakan 0">
                  </div>
                  <br>
                  <div>
                    <label>Alamat</label>
                    <br>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $detail['alamat']; ?>">
                  </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->