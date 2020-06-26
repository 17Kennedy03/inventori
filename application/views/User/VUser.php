<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
		
			<br>
      <a href="<?php echo site_url('User/VFormAddUser'); ?>" class="btn btn-primary btn-sm">Tambah</a>
		
	
              <table class="table table-hover">
                <tr>
          
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                
                </tr>
                
                <?php
	if(!empty($DataUser))
	{
		foreach($DataUser as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->username; ?></td>
    <td><?php echo $ReadDS->password; ?></td>
    <td><?php echo $ReadDS->level; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('User/DataUser/'.$ReadDS->kd_login.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('User/DeleteDataUser/'.$ReadDS->kd_login) ?>">Delete</a>
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




