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

        <!-- Container-fluid starts-->

        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 box-col-6">
                <div class="card custom-card p-0">
                    <div class="card-profile m-4"><img class="rounded-circle" src="<?= base_url() ?>assets/cuba/assets/images/user/2.png" alt=""></div>
                    <ul class="card-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                    <div class="text-center profile-details">
                        <h5><?= $pegawai['nama'] ?></h5>
                        <h6><?= $pegawai['nama_jabatan'] ?></h6>
                    </div>
                    <div class="card-footer row">
                        <div class="col-4 col-sm-4">
                            <h6>Unit</h6>
                            <h5><?= $pegawai['nama_unit'] ?></h5>
                        </div>
                        <div class="col-4 col-sm-4">
                            <h6>Contact</h6>
                            <h5><?= $pegawai['no_hp'] ?></h5>
                        </div>
                        <div class="col-4 col-sm-4">
                            <h6>Job Success</h6>
                            <h5><span class="counter"><?= floatval($job['jobsuccess']) ?></span>%</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 box-col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Overall Performance</h5>
                    </div>
                    <div class="card-body">
                        <div class="knob-block text-center">
                            <input class="knob" data-width="200" data-thickness=".1" data-angleoffset="90" data-fgcolor="#7366ff" data-linecap="round" value="<?= (floatval($job['jobsuccess']) * floatval($rating['rating'])) / 5 ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 xl-100 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>EMPLOYEE STATUS</h5>

                    </div>
                    <div class="card-body">
                        <div class="user-status table-responsive emplyoee-table">
                            <div class="bar-chart-widget">
                                <div class="bottom-content card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <h5>Task Review</h5>
                                            <div class="chart4"></div>
                                        </div>
                                        <div class="col-3">
                                            <h5>Job Success</h5>
                                            <div class="knob-block text-center">
                                                <input class="knob" data-width="200" data-height="200" data-angleoffset="180" data-fgcolor="#7366ff" data-skin="tron" data-thickness=".1" value="<?= ceil($job['jobsuccess']) ?>">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <h5>On Going</h5>
                                            <div class="progress">
                                                <div class="progress-bar-animated progress-bar-striped bg-primary" role="progressbar" style="width:<?php if ($ongoing['ongoing'] >= 1) : ?> 60%; <?php else : ?>0%; <?php endif; ?>aria-valuenow=" 50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <h5>Rating</h5>
                                            <div class="height-equal">
                                                <div class="rating-container">
                                                    <div class="star-ratings">
                                                        <div class="stars stars-example-fontawesome-o">
                                                            <select id="u-rating-fontawesome-o" name="rating" data-current-rating="<?= floatval($rating['rating']) ?>" autocomplete="off">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select><span class="title current-rating">Current rating: <span class="value"></span></span><span class="title your-rating hidden">Your rating: <span class="value"></span><a class="clear-rating" href="#"><i class="fa fa-times-circle"></i></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Top 5 Task Solved</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa fa-spin fa-cog"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-status table-responsive best-seller-table mb-0">
                            <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Details</th>
                                        <th class="text-end" scope="col">Status</th>
                                        <th scope="col">Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($top as $row) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $row['deskripsi_layanan'] ?></td>
                                            <td>
                                                <?php if ($row['status'] == 1) : ?>
                                                    <span class="badge badge-light-info"><i class="me-2" data-feather="clock"></i> In process</span>
                                                <?php elseif ($row['status'] == 2) : ?>
                                                    <span class="badge badge-light-warning"><i class="me-2" data-feather="rotate-cw"></i> In Review</span>
                                                <?php elseif ($row['status'] == 3) : ?>
                                                    <span class="badge badge-light-success"><i class="me-2" data-feather="check"></i> Done</span>
                                            </td>
                                        <?php endif; ?>
                                        <td>
                                            <?php if ($row['performa'] == 5) : ?>
                                                <i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i>
                                            <?php elseif ($row['performa'] == 4) : ?>
                                                <i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rate-blank"></i>
                                            <?php elseif ($row['performa'] == 3) : ?>
                                                <i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i>
                                            <?php elseif ($row['performa'] == 2) : ?>
                                                <i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i>
                                            <?php elseif ($row['performa'] == 1) : ?>
                                                <i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i>
                                            <?php elseif ($row['performa'] == 0) : ?>
                                                <i class="icofont icofont-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i>
                                        </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Task Completed</h5>
                            </div>
                            <div class="card-body">
                                <div class="chart2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Task Incompleted</h5>
                            </div>
                            <div class="card-body">
                                <div class="chart3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>

</div>