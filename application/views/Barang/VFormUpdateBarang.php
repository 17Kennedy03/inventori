<!-- Main content -->
<form action="<?php echo site_url('Barang/UpdateDataBarang'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Barang</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                  <div class="form-group">
                    <label>Nama Barang</label>
                    <br>
                    <input type="hidden" name="id_barang" value="<?php echo $detail['id_barang']; ?>">
                    <input type="text" name="nama_barang" class="form-control" value="<?php echo $detail['nama_barang']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Stok</label>
                    <br>
                    <input type="text" name="stok" class="form-control" value="<?php echo $detail['stok']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Keterangan</label>
                    <br>
                    <input type="text" name="keterangan" class="form-control" value="<?php echo $detail['keterangan']; ?>">
                  </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->