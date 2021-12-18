<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-6">
                    <h3>
                        Smart Performa</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>Manager"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Manager</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Review</h5>
            </div>
            <form action="" method="POST" class="form">
                <div class="card-body">
                    <h5>Pemohon</h5>
                    <input type="hidden" name="id" value="<?= $list['id_performa'] ?>">
                    <div class="form-group">
                        <label for="">Nama : </label>
                        <input type="text" class="form-control" value="<?= $list['nama_jabatan'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Unit : </label>
                        <input type="text" class="form-control" value="<?= $list['nama_unit'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi : </label>
                        <textarea class="form-control" name="" id="" cols="30" rows="5"><?= $list['deskripsi_layanan'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="">Tanggal Input : </label>
                                <input class="form-control" type="datetime" value="<?= tanggal_indo($list['created_at'])  ?>">
                            </div>
                            <div class="col-4">
                                <label for="">Tanggal Deadline : </label>
                                <input class="form-control" type="date" value="<?= $list['tanggal_deadline']   ?>">
                            </div>
                            <div class="col-4">
                                <label for="">Tanggal Selesai : </label>
                                <input class="form-control" type="datetime" value="<?= tanggal_indo($list['tanggal_selesai']) ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Hasil :</label>
                        <a class="btn btn-sm btn-success" href="<?= base_url() ?>assets/uploads/<?= $list['file'] ?>" target="_blank" title="lihat berkas"> Download</a>
                    </div>
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="catatan" class="form-control" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Rating</label>
                        <div class="rating-container">
                            <select id="u-rating-fontawesome" name="rating" autocomplete="off">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
            </form>
            <div class="form-group ">
                <button class="btn btn-primary float-right" type="submit" href="#">Kirim</button>
            </div>
        </div>


    </div>
</div>
</div>
<!-- Container-fluid Ends-->


</div>