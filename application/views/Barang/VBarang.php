<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
		
			<br>
      <a href="<?php echo site_url('Barang/VFormAddBarang'); ?>" class="btn btn-primary btn-sm">Tambah</a>
		
	
              <table class="table table-hover">
                <tr>
          
                  <th>ID Barang</th>
                  <th>Nama Barang</th>
                  <th>Stok</th>
                  <th>Keterangan</th>
                
                </tr>
                
                <?php
	if(!empty($DataBarang))
	{
		foreach($DataBarang as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->id_barang; ?></td>
    <td><?php echo $ReadDS->nama_barang; ?></td>
    <td><?php echo $ReadDS->stok; ?></td>
    <td><?php echo $ReadDS->keterangan; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('Barang/DataBarang/'.$ReadDS->id_barang.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Barang/DeleteDataBarang/'.$ReadDS->id_barang) ?>">Delete</a>
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




