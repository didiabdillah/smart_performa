

<script type="text/javascript">
      
      var save_method; //for save method string
      var table;
      
      $(document).ready(function() {
      
          //datatables
          table = $('#dataTable').DataTable({ 
      
              "processing": true, //Feature control the processing indicator.
              "serverSide": true, //Feature control DataTables' server-side processing mode.
              "order": [1,'asc'], //Initial no order.
      
              // Load data for the table's content from an Ajax source
              "ajax": {
                
                  "url": "<?php echo base_url('Users/ajax_list') ; ?>",
                 
                  "type": "POST"
              },
      
              //Set column definition initialisation properties.
              "columnDefs": [
              { 
                  "targets": [ -1 ], //last column
                  "orderable": false, //set not orderable
              },
              ],
      
          });
      
          
      
          //set input/textarea/select event when change value, remove class error and remove text help block 
          $("input").change(function(){
              $(this).parent().parent().removeClass('has-error');
              $(this).next().empty();
          });
          $("textarea").change(function(){
              $(this).parent().parent().removeClass('has-error');
              $(this).next().empty();
          });
          $("select").change(function(){
              $(this).parent().parent().removeClass('has-error');
              $(this).next().empty();
          });
      
      });
      
      
      
      function add_users()
      {
          save_method = 'add';
          $('#form')[0].reset(); // reset form on modals
          $('.form-group').removeClass('has-error'); // clear error class
          $('.help-block').empty(); // clear error string
          $('#modal_form').modal('show'); // show bootstrap modal
          $('.modal-title').text('Add User'); // Set Title to Bootstrap modal title
      }
      
      function edit_users(id)
      {
          save_method = 'update';
          $('#form')[0].reset(); // reset form on modals
          $('.form-group').removeClass('has-error'); // clear error class
          $('.help-block').empty(); // clear error string
          $('#password').hide();
          //Ajax Load data from ajax
          $.ajax({
              url : "<?php echo site_url('Users/ajax_edit/')?>/" + id,
              type: "GET",
              dataType: "JSON",
              success: function(data)
              {
      
                  $('[name="id"]').val(data.id);
                  $('[name="no_pegawai"]').val(data.no_pegawai);
                  $('[name="nama"]').val(data.nama);
                  $('[name="jabatan"]').val(data.jabatan);
                  $('[name="unit"]').val(data.unit);
                  $('[name="no_hp"]').val(data.no_hp);
                  $('[name="email"]').val(data.email);
                  $('[name="role"]').val(data.role);
           
     
                  
                  $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                  $('.modal-title').text('Edit User'); // Set title to Bootstrap modal title
      
              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                  alert('Error get data from ajax');
              }
          });
      }


      function ganti_password(id)
      {
          save_method = 'ganti_password';
          $('#form2')[0].reset(); // reset form on modals
          
          $('[name="id"]').val(id);
      
          $('#modal_ganti').modal('show'); // show bootstrap modal
        
         $('.modal-title').text('Ganti password'); // Set title to Bootstrap modal title
      
      }
      
      function reload_table()
      {
        $('#dataTable').DataTable().ajax.reload();
      }
      
      function save()
      {
          $('#btnSave').text('saving...'); //change button text
          $('#btnSave').attr('disabled',true); //set button disable 
          var url;
      
          if(save_method == 'add') {
              url = "<?php echo site_url('Users/ajax_add')?>";
          } else if (save_method == 'update') {
              url = "<?php echo site_url('Users/ajax_update')?>";
          }
          else {
              url = "<?php echo site_url('Users/ajax_ganti_password')?>";
              
        
              $.ajax({
              url : url,
              type: "POST",
              data: $('#form2').serialize(),
              dataType: "JSON",
              success: function(data)
              {
              
                  if(data.status) //if success close modal and reload ajax table
                  {
                  
                      $('#modal_ganti').modal('hide');
                      reload_table();
                    


                      // location.reload();
                  }
                  else
                  {
                      for (var i = 0; i < data.inputerror.length; i++) 
                      {
                          $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                          $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                      }
                  }
                  $('#btnSave').text('save'); //change button text
                  $('#btnSave').attr('disabled',false); //set button enable 
      
      
              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                  alert('Error adding / update data');
                  $('#btnSave').text('save'); //change button text
                  $('#btnSave').attr('disabled',false); //set button enable 
      
              }
          });
          }
      
          // ajax adding data to database
          $.ajax({
              url : url,
              type: "POST",
              data: $('#form').serialize(),
              dataType: "JSON",
              success: function(data)
              {
              
                  if(data.status) //if success close modal and reload ajax table
                  {
                      $('#modal_form').modal('hide');
                      $('#modal_ganti').modal('hide');
                      reload_table();
                    


                      // location.reload();
                  }
                  else
                  {
                      for (var i = 0; i < data.inputerror.length; i++) 
                      {
                          $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                          $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                      }
                  }
                  $('#btnSave').text('save'); //change button text
                  $('#btnSave').attr('disabled',false); //set button enable 
      
      
              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                  alert('Error adding / update data');
                  $('#btnSave').text('save'); //change button text
                  $('#btnSave').attr('disabled',false); //set button enable 
      
              }
          });
      }
      
      function delete_users(id)
      {
          if(confirm('Are you sure delete this data?'))
          {
              // ajax delete data to database
              $.ajax({
                  url : "<?php echo site_url('Users/ajax_delete')?>/"+id,
                  type: "POST",
                  dataType: "JSON",
                  success: function(data)
                  {
                      //if success reload ajax table
                      $('#modal_form').modal('hide');
                      reload_table();
                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                      alert('Error deleting data');
                  }
              });
      
          }
      }

    
</script>