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
        <div class="card">
            <div class="card-header">
                <h5>View Pekerjaan</h5>
            </div>
            <form action="" method="POST" class="form">
                <div class="card-body">
                    <input type="hidden" name="id" value="<?= $list['id_performa'] ?>">
                    <h5>Pemohon</h5>
                    <div class="form-group">
                        <label for="nama">Nama : </label>
                        <input type="text" id="nama" class="form-control" value="<?= $list['nama_jabatan'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="unit">Unit : </label>
                        <input type="text" id="unit" class="form-control" value="<?= $list['nama_unit'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi : </label>
                        <textarea name="" id="deskripsi" cols="30" rows="5" class="form-control"> <?= $list['deskripsi_layanan'] ?> </textarea>
                    </div>
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="deskripsi">Tanggal Input Permohonan </label>
                        <input type="datetime" class="form-control" value="<?= tanggal_indo($list['created_at']) ?>">
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label for="deskripsi">Tanggal Deadline </label>
                        <input type="datetime" class="form-control" value="<?= tanggal_indo($list['tanggal_deadline']) ?>">
                    </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="validationTooltip04" data-original-title="Pilih Pegawai" title="Pilih Pegawai" required="true" name="pegawai">
                            <option value="">Pilih Pegawai yang Mengerjakan</option>
                            <?php
                            foreach ($pegawai as $data) {
                            ?>
                                <option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <?= form_error('pegawai', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
            </form>
            <div class="form-group ">
                <button class="btn btn-primary float-right" type="submit" href="#">Kirim</button>
            </div>
        </div>

    </div>
</div>
<!-- Container-fluid Ends-->


</div>