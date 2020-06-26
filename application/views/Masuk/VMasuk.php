<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang Masuk</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
		
			<br>
      <a href="<?php echo site_url('Masuk/VFormAddMasuk'); ?>" class="btn btn-primary btn-sm">Tambah</a>
		  
	
              <table class="table table-hover">
                <tr>
          
                  <th>ID</th>
                  <th>ID Barang</th>
                  <th>Tanggal</th>
                  <th>Jumlah</th>
                  <th>Satuan</th>
                  <th>Aksi</th>
                </tr>
                
                <?php
	if(!empty($DataMasuk))
	{
		foreach($DataMasuk as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->id_masuk; ?></td>
    <td><?php echo $ReadDS->id_barang; ?></td>
    <td><?php echo $ReadDS->tanggal; ?></td>
    <td><?php echo $ReadDS->jumlah; ?></td>
    <td><?php echo $ReadDS->satuan; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('Masuk/DataMasuk/'.$ReadDS->id_masuk.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Masuk/DeleteDataMasuk/'.$ReadDS->id_masuk) ?>">Delete</a>
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




