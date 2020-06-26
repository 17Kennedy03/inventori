<!-- Main content -->
<form action="<?php echo site_url('Supplier/UpdateDataSupplier'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Supplier</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                  <div class="form-group">
                    <label>Nama Supplier</label>
                    <br>
                    <input type="hidden" name="id_supplier" value="<?php echo $detail['id_supplier']; ?>">
                    <input type="text" name="nama_supplier" class="form-control" value="<?php echo $detail['nama_supplier']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Nama Pemilik</label>
                    <br>
                    <input type="text" name="nama_pemilik" class="form-control" value="<?php echo $detail['nama_pemilik']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>No Telepon</label>
                    <br>
                    <input type="text" name="no_tlp" class="form-control"  placeholder="Dilarang menggunakan 0">
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