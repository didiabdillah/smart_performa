<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-6">
                  <h3>
                    Smart Performa</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url()?>Dashboard"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Users</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->

          <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Data Users</h5>
                  </div>
                  <div class="card-body">
                    <button type="button" class="btn btn-primary mb-5" onclick="add_users()">Tambah Data</button>
                    <div class="table-responsive">
                        <div id="data-source-4_wrapper" class="dataTables_wrapper">
                    
                          <table class="display dataTable" id="dataTable" style="width: 100%;" role="grid" aria-describedby="data-source-4_info">
                            <thead>
                              <tr role="row">
                                <th>#</th>
                                <th>No Pegawai</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Unit Kerja</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Role</th>
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
               
                <h3 class="modal-title">Hewan Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="needs-validation was-validated" novalidate="">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="col-md-12 mb-5" id="input_biasa">
                          <label for="validationTooltip01">No Pegawai</label>
                          <input class="form-control" id="validationTooltip01" type="text" placeholder="no pegawai" required="true" data-original-title="no pegawai" title="Masukan no pegawai" name="no_pegawai">
                          <div class="invalid-tooltip">Pastikan No Pegawai Benar</div>
                        </div>

                        <div class="col-md-12 mb-5" id="input_biasa">
                          <label for="validationTooltip02">Nama</label>
                          <input class="form-control" id="validationTooltip02" type="text" placeholder="Nama" required="true" data-original-title="nama" title="Masukan nama" name="nama">
                          <div class="invalid-tooltip">Pastikan Nama Benar</div>
                        </div>

                       

                        <div class="col-md-12 mb-5" id="input_biasa">
                          <label for="validationTooltip06">No HP</label>
                          <input class="form-control" id="validationTooltip06" type="number" placeholder="No HP" required="true" data-original-title="no HP" title="Masukan nomor hp" name="no_hp">
                          <div class="invalid-tooltip">Pastikan NO HP Benar</div>
                        </div>

                        <div class="col-md-12 mb-5" id="input_biasa">
                          <label for="validationTooltip07">E-mail</label>
                          <input class="form-control" id="validationTooltip07" type="email" placeholder="Email " required="true" data-original-title="email" title="Masukan nomor hp" name="email">
                          <div class="invalid-tooltip">Pastikan E-Mail Benar</div>
                        </div>


                        <div class="col-md-12 mb-5" id="password">
                          <label for="validationTooltip08">Password</label>
                          <input class="form-control" id="validationTooltip08" type="password" placeholder="password " required="true" data-original-title="password" title="Masukan nomor hp" name="password">
                          <div class="invalid-tooltip">Pastikan password diisi</div>
                        </div>

                        <div class="col-md-12 mb-5" id="input_biasa"> 
                        <label for="validationTooltip04">Unit</label>
                          <div class="input-group">
                          <select class="form-control" id="validationTooltip04" data-original-title="Pilih Unit"  title="Pilih Unit" required="true" name="unit">
                            <option value="">Pilih Unit</option>
                            <?php if($unit != null){
                              foreach($unit as $data){
                                ?>
                             
                            <option value="<?= $data->id_unit?>"><?= $data->nama_unit?></option>
                          <?php
                           }
                            }
                            ?>
                          </select>
                          <div class="invalid-tooltip">Pastikan Unit Dipilih</div>
                        </div>
                        </div>

                        <div class="col-md-12 mb-5" id="input_biasa"> 
                        <label for="validationTooltip05">Jabatan</label>
                          <div class="input-group">
                          <select class="form-control" id="validationTooltip05" data-original-title="Pilih Jabatan"  title="Pilih Jabatan" required="true" name="jabatan">
                            <option value="">Pilih Jabatan</option>
                            <?php if($jabatan != null){
                              foreach($jabatan as $data){
                                ?>
                             
                            <option value="<?= $data->id_jabatan?>"><?= $data->nama_jabatan?></option>
                          <?php
                           }
                            }
                            ?>
                          </select>
                          <div class="invalid-tooltip">Pastikan jabatan Dipilih</div>
                        </div>
                        </div>

                        <div class="col-md-12 mb-5" id="input_biasa">
                        <label for="validationTooltip09">Role</label>
                          <div class="input-group">
                          <select class="form-control" id="validationTooltip09" data-original-title="Pilih role"  title="Pilih role" required="true" name="role">
                            <option value="">Pilih Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Manager</option>
                            <option value="3">Bagian SDM</option>
                            <option value="4">Pegawai</option>
                          </select>
                          <div class="invalid-tooltip">Pastikan Role Dipilih</div>
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