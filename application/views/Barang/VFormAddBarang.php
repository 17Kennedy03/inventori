<form action="<?php echo site_url('Barang/AddDataBarang'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Barang</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label>ID Barang</label>
                    <input type="text" class="form-control" placeholder="Masukan ID" name="id_barang">
                  </div>
                  
                  <div>
                  <label>Nama Barang</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Barang" name="nama_barang">
                      </div>
                      <div>
                  <label>Stok</label>
                    <input type="text" class="form-control" placeholder="Masukan Stok" name="stok">
                      </div>
                      <div>
                  <label>Keterangan</label>
                    <input type="text" class="form-control" placeholder="Masukan Keterangan" name="keterangan">
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