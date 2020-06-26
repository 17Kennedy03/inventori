<form action="<?php echo site_url('Supplier/AddDataSupplier'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Supplier</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                  
                  <div>
                  <label>Nama Supplier</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Supplier" name="nama_supplier">
                      </div>
                      <div>
                  <label>Nama Pemilik</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Pemilik" name="nama_pemilik">
                      </div>
                  <label>No Telepon</label>
                    <input type="text" class="form-control" placeholder="Dilarang menggunakan 0" name="notlp">
                    </div>
                  <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->