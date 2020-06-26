<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Karyawan</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
		
			<br>
      <a href="<?php echo site_url('Karyawan/VFormAddKaryawan'); ?>" class="btn btn-primary btn-sm">Tambah</a>
		
	
              <table class="table table-hover">
                <tr>
          
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>No telepon</th>
                  <th>Alamat</th>
                
                </tr>
                
                <?php
	if(!empty($DataKaryawan))
	{
		foreach($DataKaryawan as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->nik; ?></td>
    <td><?php echo $ReadDS->nama; ?></td>
    <td><?php echo $ReadDS->jabatan; ?></td>
    <td><?php echo $ReadDS->no_tlp; ?></td>
    <td><?php echo $ReadDS->alamat; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('Karyawan/DataKaryawan/'.$ReadDS->nik.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Karyawan/DeleteDataKaryawan/'.$ReadDS->nik) ?>">Delete</a>
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




