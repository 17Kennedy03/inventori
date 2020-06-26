<!-- Main content -->
<form action="<?php echo site_url('Pembelian/UpdateDataPembelian'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Pembelian</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                  <div class="form-group">
                    <label></label>
                    <br>
                    <input type="hidden" name="id_transaksi" value="<?php echo $detail['id_transaksi']; ?>">
                    <input type="hidden" name="id_barang" class="form-control" value="<?php echo $detail['id_barang']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Supplier</label>
                    <br>
                    <input type="text" name="supplier" class="form-control" value="<?php echo $detail['supplier']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Harga Satuan</label>
                    <br>
                    <input type="text" name="harga_satuan" class="form-control" value="<?php echo $detail['harga_satuan']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Jumlah</label>
                    <br>
                    <input type="text" name="jumlah" class="form-control" value="<?php echo $detail['jumlah']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Satuan</label>
                    <br>
                    <input type="text" name="satuan" class="form-control" value="<?php echo $detail['satuan']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Tanggal</label>
                    <br>
                    <input type="text" name="tanggal" class="form-control" value="<?php echo $detail['tanggal']; ?>">
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