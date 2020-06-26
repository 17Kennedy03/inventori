<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pembelian</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
		
			<br>
      <a href="<?php echo site_url('Pembelian/VFormAddPembelian'); ?>" class="btn btn-primary btn-sm">Tambah</a>
		
	
              <table class="table table-hover">
                <tr>
          
                  <th>ID</th>
                  <th>ID Barang</th>
                  <th>Supplier</th>
                  <th>Harga Satuan</th>
                  <th>Jumlah</th>
                  <th>Satuan</th>
                  <th>tanggal</th>
                  <th>Keterangan</th>
                
                </tr>
                
                <?php
	if(!empty($DataPembelian))
	{
		foreach($DataPembelian as $ReadDS)
		{
	?>

	<tr>
		
		
    <td><?php echo $ReadDS->id_transaksi; ?></td>
    <td><?php echo $ReadDS->id_barang; ?></td>
    <td><?php echo $ReadDS->supplier; ?></td> 
    <td><?php echo $ReadDS->harga_satuan; ?></td>
    <td><?php echo $ReadDS->jumlah ?></td>
		<td><?php echo $ReadDS->satuan ?></td>
    <td><?php echo $ReadDS->tanggal ?></td>
    <td><?php echo $ReadDS->keterangan ?></td>

    <td width="5%">
			<a href="<?php echo site_url('Pembelian/DataPembelian/'.$ReadDS->id_transaksi.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Pembelian/DeleteDataPembelia/'.$ReadDS->id_transaksi) ?>">Delete</a>
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




