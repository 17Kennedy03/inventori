<form action="<?php echo site_url('Masuk/AddDataMasuk'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Data Barang Masuk</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" placeholder="Masukan ID" name="id_masuk">
                  </div>
                  
                  <div>
                    <label>ID Barang</label>
                    <select name="id_barang" class="form-control">
                      <?php
                        foreach($list_barang as $lb){
                          echo '<option value="'.$lb->id_barang.'">'.$lb->nama_barang.'</option>';

                        }
                      ?>
                      
                    </select>
                  </div>

                  <div>
                    <label>Tanggal</label>
                    <input type="text" class="form-control" placeholder="Masukan Tanggal" name="tanggal">
                  </div>

                  <div>
                    <label>Jumlah</label>
                    <input type="text" class="form-control" placeholder="Masukan Jumlah Barang" name="jumlah">
                  </div>

                  <div>
                  <label>Satuan</label>
                    <input type="text" class="form-control" placeholder="Masukan Satuan" name="satuan">
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