<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-6">
                    <h3>
                        Smart Performa</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->

    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-4">
                <div class="card o-hidden static-top-widget-card">
                    <div class="card-body">
                        <div class="media static-top-widget">
                            <div class="media-body">
                                <h6 class="font-roboto">Number Of Employee</h6>
                                <h4 class="mb-0"><?= $number_of_employee; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card o-hidden static-top-widget-card">
                    <div class="card-body">
                        <div class="media static-top-widget">
                            <div class="media-body">
                                <h6 class="font-roboto">Total Task Accepted</h6>
                                <h4 class="mb-0"><?= $total_task_accepted; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card o-hidden static-top-widget-card">
                    <div class="card-body">
                        <div class="media static-top-widget">
                            <div class="media-body">
                                <h6 class="font-roboto">Total Task Completed</h6>
                                <h4 class="mb-0"><?= $total_task_completed ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
                <div class="chart">
                    <!-- CHART Will Render Here -->
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Overall Health Index</h4>
                            <div class="chart1"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="chart2"></div>
                        </div>
                    </div>
                </div>

                <div class="stats mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h4>EMPLOYEE PERFORMANCE ANALYSIS</h4>
                                <select class="form-control option-karyawan" style="width: 100%;" name="karyawan">
                                    <option value="">Pilih Karyawan</option>
                                    <?php
                                    foreach ($employee as $row) {
                                    ?>
                                        <option value="<?= $row->id; ?>"><?= $row->nama; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <div class="chart3"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rank mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Top Performer</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <?php
                                        foreach ($top_performer as $row) {
                                        ?>
                                            <li class="list-group-item"><?= $row->nama; ?></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Bottom Performer</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <?php
                                        foreach ($bottom_performer as $row) {
                                        ?>
                                            <li class="list-group-item"><?= $row->nama; ?></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->


</div>