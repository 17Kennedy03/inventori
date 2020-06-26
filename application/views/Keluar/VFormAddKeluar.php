<form action="<?php echo site_url('Keluar/AddDataKeluar'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Data Barang Keluar</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" placeholder="Masukan ID" name="id_keluar">
                  </div>
                  
                  <div>
                    <label>ID Barang</label>
                    <select name="id_barang" class="form-control">
                      <?php
                        foreach($list_barang as $la){
                          echo '<option value="'.$la->id_barang.'">'.$la->nama_barang.'</option>';

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

                  <div>
                  <label>Tujuan</label>
                    <input type="text" class="form-control" placeholder="Masukan Tujuan" name="tujuan">
                  </div>

                  <div>
                  <label>Keterangan</label>
                    <input type="text" class="form-control" placeholder="Masukan Keterangan" name="ket">
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