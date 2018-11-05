<!-- <footer class="app-footer">
  <div class="ml-auto">
    <span>Powered by</span>
    <a href="https://coreui.io">CoreUI</a>
  </div>
</footer> -->


    <!-- CoreUI and necessary plugins-->
    <script src="<?=base_url();?>/dist/vendors/jquery/js/jquery.min.js"></script>
    <script src="<?=base_url();?>/dist/vendors/popper.js/js/popper.min.js"></script>
    <script src="<?=base_url();?>/dist/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>/dist/vendors/pace-progress/js/pace.min.js"></script>
    <script src="<?=base_url();?>/dist/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="<?=base_url();?>/dist/vendors/@coreui/coreui/js/coreui.min.js"></script>
    <script src="<?=base_url();?>/libs/DataTables/datatables.min.js"></script>
    <script src="<?=base_url();?>/libs/vendor/ckeditor/ckeditor/ckeditor.js"></script>

    <!-- jquery utuk membuat centang pada multiple edit pada poliklinik/data.php-->
    <script>
      $(document).ready(function(){

        // datatables
        $('#dokter').DataTable({
          columnDefs :[
            {
              "searchable" : false,
              "orderable" : false,
              "targets" : [0, 6],
            }
          ],
          "order": [1, "desc"]

        });

        // data pasien
        $('#pasien').DataTable( {
          "processing": true,
          "serverSide": true,
          "ajax": "../pasien/pasien_data.php",

          // fungsi untuk menampilakn export pada datatable
          // scrollY : '250px',
          dom : 'Bfrtip',
          buttons : [
            {
              extend : 'pdf',
              // can potrait or landscape
              orientation : 'potrait',
              pageSize : 'A4',
              title : 'Data Pasien',
              // download : 'open'
            },
            'csv', 'excel', 'print', 'copy' 
          ],

          columnDefs : [
            {
              "searchable" : false,
              "orderable" : false,
              "targets" : 5,
              "render" : function(data, type, row){
                var btn = "<center><a href=\"edit.php?id="+data+"\" class=\"btn btn-warning btn-xs\">Edit</a> <a href=\"del.php?id="+data+"\" onclick=\"return confirm('Yakin Menghapus data?')\" class=\"btn btn-danger btn-xs\">Delete</a></center>";
                return btn;
              }
            }
          ]
        } );

        // table rekammedis
         $('#rekammedis').DataTable({
          columnDefs :[
            {
              "searchable" : false,
              "orderable" : false,
              "targets" : 8
            }
          ]
        });


        $('#select_all').on('click', function(){
          if(this.checked){
            $('.check').each(function(){
              this.checked = true;
            })
          }
          else{   
            $('.check').each(function(){
              this.checked = false;
            })
          }
        });

        $('.check').on('click', function(){
          if($('.check:checked').length == $('.check').length){
            $('#select_all').prop('checked', true);
          }
          else{
            $('#select_all').prop('checked', false);
          }
        });

        // ckeditor
        CKEDITOR.replace('keluhan',
          {
            uiColor: '#7CB9E8'
          });
        CKEDITOR.replace('diagnosa',
          {
            uiColor: '#7CB9E8'
          });
      })

      function edit(){
        document.proses.action = 'edit.php';
        document.proses.submit();
      }

      function hapus(){
        var conf = confirm('yakin akan menghapus data ?');
        if(conf){
          document.proses.action = 'del.php';
          document.proses.submit();
        }
        
      }
    </script>
  </body>
</html>