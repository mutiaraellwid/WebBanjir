<?php $this->extend('Layout/body'); ?>

<!-- Content Wrapper. Contains page content -->

<?php $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tables</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class=button>
                                <a type="button" class="btn btn-outline-success"
                                    href="<?= base_url() ?>/Station2/download" target="_blank">Download</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>ID</center>
                                        </th>
                                        <th>
                                            <center>DATE</center>
                                        </th>
                                        <th>
                                            <center>RAIN GAUGE</center>
                                        </th>
                                        <th>
                                            <center>WATER LEVEL</center>
                                        </th>
                                        <th>
                                            <center>TEMPERATURE</center>
                                        </th>
                                        <th>
                                            <center>pH</center>
                                        </th>
                                        <th>
                                            <center>CONDUCTIVITY</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?= $d['ID'] ?></td>
                                        <td><?= $d['DateTime'] ?></td>
                                        <td><center><?= $d['Rain_Gauge'] ?></center></td>
                                        <td><center><?= $d['Water_Level'] ?></center></td>
                                        <td><center><?= $d['Temperature'] ?></center></td>
                                        <td><center><?= $d['pH'] ?></center></td>
                                        <td><center><?= $d['Conductivity'] ?></center></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            </div>
                            <br>
                            <?= $pager->links('DB_Banjir','data_pagination'); ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    <script>
       setTimeout(function(){
       window.location.reload(1);
       },60000);
    </script>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<?php $this->endSection(); ?>
