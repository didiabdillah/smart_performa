<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-6">
          <h3>
            Smart Performa</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Data Layanan</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->

  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5>Data Layanan</h5>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-primary mb-5" onclick="add_layanan()">Tambah Data</button>
        <div class="table-responsive">
          <div id="data-source-4_wrapper" class="dataTables_wrapper">

            <table class="display dataTable" id="dataTable" style="width: 100%;" role="grid" aria-describedby="data-source-4_info">
              <thead>
                <tr role="row">
                  <th>#</th>
                  <th>Tanggal Deadline</th>
                  <th>Deskripsi</th>
                  <th>Unit Tujuan</th>
                  <th>Status</th>
                  <th width="200" class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
            <div class="dataTables_info" id="data-source-4_info" role="status" aria-live="polite"></div>
            <div class="dataTables_paginate paging_simple_numbers" id="data-source-4_paginate"></div>
          </div>
        </div>
      </div>
    </div>


    <!-- Container-fluid Ends-->
  </div>

</div>





<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h3 class="modal-title">Layanan Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="needs-validation was-validated" novalidate="">
          <input type="hidden" value="" name="id" />
          <div class="form-body">

            <div class="col-md-12 mb-5" id="input_biasa">
              <label for="validationTooltip02">Deskripsi Layanan</label>
              <textarea class="form-control" id="validationTooltip02" type="text" placeholder="deskripsi" required="true" data-original-title="deskripsi" title="Masukan deskripsi" name="deskripsi_layanan"></textarea>
              <div class="invalid-tooltip">Pastikan deskripsi Benar</div>
            </div>



            <div class="col-md-12 mb-5" id="input_biasa">
              <label for="validationTooltip06">Tanggal Deadline</label>
              <input class="form-control" id="validationTooltip06" type="date" placeholder="deadline" required="true" data-original-title="deadline" title="Masukan nomor hp" name="tanggal_deadline">
              <div class="invalid-tooltip">Pastikan deadline Benar</div>
            </div>


            <div class="col-md-12 mb-5" id="input_biasa">
              <label for="validationTooltip04">Unit</label>
              <div class="input-group">
                <select class="form-control" id="validationTooltip04" data-original-title="Pilih Unit" title="Pilih Unit" required="true" name="unit">
                  <option value="">Pilih Unit</option>
                  <?php if ($unit != null) {
                    foreach ($unit as $data) {
                  ?>

                      <option value="<?= $data->id_unit ?>"><?= $data->nama_unit ?></option>
                  <?php
                    }
                  }
                  ?>
                </select>
                <div class="invalid-tooltip">Pastikan Unit Dipilih</div>
              </div>
            </div>




          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->





</div>