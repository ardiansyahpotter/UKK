<?php
include 'header.php';
session_start();
include '../koneksi.php';
if(empty($_SESSION['nama_pengguna'])){

  ?>
  <script type="text/javascript">
    alret("anda belum login !");
    window.location.href = "../index.php";
  </script>
  <?php

}
?>


<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> DATA USER</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah">+Tambah</button>
            </div>
            <div class="card-body">
               <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th style="width: 15px">NAMA_PENGGUNA</th>
                      <!-- <th style="width: 15px">PASSWORD</th> -->
                      <th style="width: 15px">LEVEL</th>
                      <th style="width: 35px">NO_HP</th>
                      <th style="width: 35px">aksi</th>
<!--                       <th style="width: 25px">Keterangan</th>
                      <th style="width: 30px">aksi</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php 
                    $no= 1;
                    $query = "SELECT * FROM tb_pengguna";
                    $result = mysqli_query($koneksi, $query);
                    if (!$result) {
                      die("Query Error:".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
                      
                    }
                    while ($row = mysqli_fetch_assoc($result)) {
                    
                    
                    ?>
                    
                    <tr>
                      <td><?php echo $no++?></td>
                      <td><?php echo $row['nama_pengguna'];?></td>
                      <!-- <td><?php echo $row['password'];?></td> -->
                      <td><?php echo $row['level'];?></td>
                      <td><?php echo $row['no_hp'];?></td>
                      
                        <td>
                        <a href="edit_user.php?id=<?php echo $row['id_pengguna']; ?>" class="btn btn btn-warning">Edit</a>
                        <a href="delete_user.php?id=<?php echo $row['id_pengguna']; ?>" class="btn btn btn-danger" onclick="retrun confrim('Anda yakin ingin menghapus data ini?')" >Hapus</a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
                </div>
            
            </div>
          </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<div class="modal fade" id="tambah">
  <form action="tambah_user.php" method="post" enctype = "multipart/form-data">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data user</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input type="text" name ="nama_pengguna" class="form-control" placeholder="nama user" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name ="password" class="form-control" placeholder="password" required>
                  </div>

                  <div class="form-group">
                    <label>LEVEL</label>
                    <select name="level" class="form-control" required>
                      <option value="">------Pilih 1------></option>
                      <option value="Administrator">Administrator</option>
                      <option value="Resepsionis">Resepsionis</option>
                      <option value="Tamu">Tamu</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>NO HP</label>
                    <input type="number" name ="no_hp" class="form-control" placeholder="NO HP" required>
                  </div>
                  
            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">submit</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


</body>
</html>

<?php include 'footer.php'; ?>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>