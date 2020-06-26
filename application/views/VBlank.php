<div class="content-wrappers">
        
   
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3> 
                12              </h3>
              <p>Pengunjung Hari ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                420              </h3>
              <p>Pengunjung Bulan ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
                3101              </h3>
              <p>Total Pengunjung</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background: #b02794; color:white;">
            <div class="inner">
              <h3>
                0              </h3>
              <p>Pengunjung Online</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-xs-12">
         <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <i class="fa fa-line-chart"></i>
                            <h3 class="box-title">Jumlah pengunjung di tahun 2020 = 420  <i class="fa fa-user-o"></i></h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <!-- <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>-->
              </div>
            </div>
            <div class="box-body border-radius-none" style="width: 100%;">
                <div class="visible-md visible-lg">
<canvas id="myChart3" width="100" height="35"></canvas>
</div>
<div class="visible-xs visible-sm">
<canvas id="myChart3x" width="100" height="75"></canvas>
</div>
       

  
<script src="#"></script>
<script>
new Chart(document.getElementById("myChart3"), {
    type: 'line',
    data: {
      labels: 
      ["Januari",],
      datasets: [
        {
          label: "Persentase",
          borderColor: "#3cba9f",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#500","black","blue","chocolate","maroon"],
          data: ["420",],
          fill: false
        }
      ]
    },
    options: {
      legend: { display: false},
      title: {
        display: true,
        text: 'Number of visitors each month in 2020'
      }
    }
});
</script>
<script>
new Chart(document.getElementById("myChart3x"), {
    type: 'line',
    data: {
      labels: ["Januari",],
      datasets: [
        {
          label: "Persentase",
          borderColor: "#3cba9f",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#500","black","blue","chocolate","maroon"],
          data: ["420",],
          fill: false
        }
      ]
    },
    options: {
      legend: { display: false},
      title: {
        display: true,
        text: 'Number of visitors each month in 2020'
      }
    }
});
</script>
            </div>
            <div class="box-footer no-border">
              <div class="row">
                                    <div class="col-xs-3 text-center" style="border-right: 1px solid #f4f4f4">
                  
                    <div class="knob-label">Januari: 420 </div>
                </div>
                                  <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
        </div>
        
        <div class="col-lg-6 col-xs-12">
          <div class="box box-success ">
            <div class="box-header">
              <i class="fa fa-user-o"></i>
              <h3 class="box-title">Log History LOGIN</h3>
              <div class="box-tools pull-right">
                                <a href="<?php echo site_url('User/User'); ?>" onclick="return confirm('Apa anda ingin menghapus data Log ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Log  History LOGIN</a>
                                <!-- <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>-->
              </div>
            </div>
