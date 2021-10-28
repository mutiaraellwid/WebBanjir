<?php $this->extend('Layout/body'); ?>

<!-- Content Wrapper. Contains page content -->

<?php $this->section('content'); ?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Chart</h1>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <div class="form-group">
                                <label>Minimum date :</label>
                                <input type="date" id="min" name="startdate" class="form-control date"
                                    placeholder="Start date">
                            </div>
                            <div class="form-group">
                                <label>Maximum date :</label>
                                <input type="date" id="max" name="enddate" class="form-control date"
                                    placeholder="End date">
                            </div>

                            <div class=button>
                                <button type="button" id="btnFilter" class="btn btn-outline-success" onclick="tampilkanChart()">Tampilkan Chart</button>
                            </div>
                            <!-- <canvas id="chartandroid" class="chart"></canvas> -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php 
                    foreach ($chart as $key => $value) {
                        $datetime[] = $value['DateTime'];
                        $rain[] = $value['Rain_Gauge'];
                        $water[]= $value['Water_Level'];
                        $temperature[]= $value['Temperature'];
                        $humidity[]= $value['pH'];
                        $conductivity[]= $value['Conductivity'];
                    }
                ?>
                <div class="col-md-6">
                    <!-- AREA CHART -->
                    <div class="card card-teal">
                        <div class="card-header">
                            <h3 class="card-title">Rain Chart</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="rainChart"
                                    style="min-height: 250px; height: 400px; max-height: 100%; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
                <!-- /.col (LEFT) -->
                <div class="col-md-6">
                    <!-- chart line -->
                    <div class="card card-teal">
                        <div class="card-header">
                            <h3 class="card-title">Water Chart</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="waterChart"
                                    style="min-height: 250px; height: 400px; max-height: 100%; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col (RIGHT) -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                    <!-- AREA CHART -->
                    <div class="card card-teal">
                        <div class="card-header">
                            <h3 class="card-title">Temperature</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="temperatureChart"
                                    style="min-height: 250px; height: 400px; max-height: 100%; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
                <!-- /.col (LEFT) -->
                <div class="col-md-6">
                    <!-- chart line -->
                    <div class="card card-teal">
                        <div class="card-header">
                            <h3 class="card-title">pH</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="humidityChart"
                                    style="min-height: 250px; height: 400px; max-height: 100%; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col (RIGHT) -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                    <!-- AREA CHART -->
                    <div class="card card-teal">
                        <div class="card-header">
                            <h3 class="card-title">Conductivity</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="conductivityChart"
                                    style="min-height: 250px; height: 400px; max-height: 100%; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        <script>
          function getParam(name) {
	      var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	      if(results == null) return "";
	      return results[1];
	  }
          var min = document.getElementById('min');
          var max = document.getElementById('max');
	  min.value = getParam('min');
	  max.value = getParam('max');
	  function tampilkanChart() {
               if(min.value && max.value) 
	           window.location = '?min=' + min.value + '&max=' + max.value;
	  }
           setTimeout(function() {
           window.location.reload(1);
           }, 60000);
        </script>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->endSection(); ?>
