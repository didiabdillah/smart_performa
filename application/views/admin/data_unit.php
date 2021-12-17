<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-6">
                  <h3>
                    Smart Performa</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url()?>Dashboard"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Unit</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->

          <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Data Unit</h5>
                  </div>
                  <div class="card-body">
                    <button type="button" class="btn btn-primary mb-5" onclick="add_unit()">Tambah Data</button>
                    <div class="table-responsive">
                        <div id="data-source-4_wrapper" class="dataTables_wrapper">
                    
                          <table class="display dataTable" id="dataTable" style="width: 100%;" role="grid" aria-describedby="data-source-4_info">
                            <thead>
                              <tr role="row">
                                <th>#</th>
  
                                <th>Nama Unit</th>
                               
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
               
                <h3 class="modal-title">Unit Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="needs-validation was-validated" novalidate="">
                    <input type="hidden" value="" name="id_unit"/> 
                    <div class="form-body">
                        

                        <div class="col-md-12 mb-5" id="input_biasa">
                          <label for="validationTooltip02">Nama Unit</label>
                          <input class="form-control" id="validationTooltip02" type="text" placeholder="Nama Unit" required="true" data-original-title="nama unit" title="Masukan nama Unit" name="nama_unit">
                          <div class="invalid-tooltip">Pastikan Nama Unit  Benar</div>
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