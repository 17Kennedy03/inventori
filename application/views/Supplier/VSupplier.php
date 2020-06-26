<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Supplier</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
		
			<br>
      <a href="<?php echo site_url('Supplier/VFormAddSupplier'); ?>" class="btn btn-primary btn-sm">Tambah</a>
		
	
              <table class="table table-hover">
                <tr>
          
                  
                  <th>Nama Supplier</th>
                  <th>Nama Pemilik</th>
                  <th>No Telepon</th>
                  <th>Alamat</th>
                
                </tr>
                
                <?php
	if(!empty($DataSupplier))
	{
		foreach($DataSupplier as $ReadDS)
		{
	?>

	<tr>
		
		
    <td><?php echo $ReadDS->nama_supplier; ?></td>
    <td><?php echo $ReadDS->nama_pemilik; ?></td>
    <td><?php echo $ReadDS->notlp; ?></td> 
    <td><?php echo $ReadDS->alamat; ?></td>
    
		<td width="5%">
			<a href="<?php echo site_url('Supplier/DataSupplier/'.$ReadDS->id_supplier.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Supplier/DeleteDataSupplier/'.$ReadDS->id_supplier) ?>">Delete</a>
		</td>
	</tr>
            
         <?php
     }
 }
 ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>




