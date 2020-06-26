<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang Keluar</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
		
			<br>
      <a href="<?php echo site_url('Keluar/VFormAddKeluar'); ?>" class="btn btn-primary btn-sm">Tambah</a>
		  
	
              <table class="table table-hover">
                <tr>
          
                  <th>ID</th>
                  <th>ID Barang</th>
                  <th>Tanggal</th>
                  <th>Jumlah</th>
                  <th>Satuan</th>
                  <th>Tujuan</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                
                <?php
	if(!empty($DataKeluar))
	{
		foreach($DataKeluar as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->id_keluar; ?></td>
    <td><?php echo $ReadDS->id_barang; ?></td>
    <td><?php echo $ReadDS->tanggal; ?></td>
    <td><?php echo $ReadDS->jumlah; ?></td>
    <td><?php echo $ReadDS->satuan; ?></td>
    <td><?php echo $ReadDS->tujuan; ?></td>
    <td><?php echo $ReadDS->ket; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('Keluar/DataKeluar/'.$ReadDS->id_keluar.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Keluar/DeleteDataKeluar/'.$ReadDS->id_keluar) ?>">Delete</a>
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




