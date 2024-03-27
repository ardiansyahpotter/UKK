<?php
include 'header.php';
session_start();
include 'koneksi.php';;
if (empty($_SESSION['nama_pengguna'])) {
  ?>
  <script type="text/javascript">
    alret("anda belum login");
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
            <h1 class="m-0"> DATA TRANSAKSI</h1>
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

        <form action="transaksi.php" method="GET">
        <div class="col-md-12">
            <div class="chard-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Rentang Tanggal Chek In</label>
                    <input type="date" class="form-control" name="dari" required>
                  </div>
                </div>
                <div class="col-md-0">
                  <div class="form-group">
                    <br>
                    <h1><b>-</b></h1>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Ke</label>
                    <input type="date" class="form-control" name="ke" required>
                  </div>
                </div>
                
                <div class="col-md-1">
                  <div class="form-group">
                    <br>
                    <button type="submit"class="btn btn-info">Cari</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah">+Tambah</button>
            </div>
            <div class="card-body">
             <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Tamu</th>
                  <th>Tipe Kamar</th>
                  <th>Jumlah Pesan Kamar</th>
                  <th>Jumlah Orang</th>
                  <th>Total Harga</th>
                  <th>Tanggal chek-in</th>
                  <th>Tanggal chek-out</th>
                  <th>Konfirmasi</th>
                </tr>
              </thead>
              <tbody>

                <?php 
                $no= 1;
                $harga_total=0;
                
                $query = "SELECT * FROM tb_transaksi 
                INNER JOIN tb_tamu ON tb_transaksi.NIK= tb_tamu.NIK
                INNER JOIN tb_kamar ON tb_transaksi.id_kamar =tb_kamar.id_kamar WHERE tb_tamu.nik = '$_SESSION[password]'";
              
                $result = mysqli_query($koneksi, $query);
                if (!$result) {
                  die("Query Error:".mysqli_errno($koneksi)."-".mysqli_error($koneksi));

                }
                while ($row = mysqli_fetch_assoc($result)) {
                  $harga_total = $row['harga'] * $row['jumlah_pesan'];
                  ?>

                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama_tamu'];?></td>
                    <td><?php echo $row['tipe'];?></td>
                    <td><?php echo $row['jumlah_pesan'];?></td>
                    <td><?php echo $row['jumlah_orang'];?></td>
                    <td><?php echo $harga_total;?></td>
                    <td><?php echo $row['tgl_chek_in'];?></td>
                    <td><?php echo $row['tgl_chek_out'];?></td>
                    <td>
                      <form action="aksi_konfirmasi.php" method="POST">
                        <input type="hidden" name="id_transaksi" value="<?php echo $row['id_transaksi'];?>">
                        <input type="hidden" name="status" value="<?php echo $row['status'];?>">

                      <?php
                      if ($row['status'] == 1) { 
                        ?>
                        <span class="badge bg-warning">Belum di Konfirmasi</span>
                        <?php
                      }else{
                        ?>
                        <button type="submit" class="btn btn-sm btn-success">Cetak</button>
                        <?php
                      }
                      ?>
                    </form>
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
<!-- Control Sidebar -->

<!-- ./wrapper -->

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
  <form action="tambah_transaksi.php" method="post" enctype = "multipart/form-data">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Transaksi</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Tamu</label>
            <select class="form-control select2" name="NIK">
              <option value="">---Pilih Tamu ngab---</option>
              <?php 
              $query = "SELECT * FROM tb_tamu";
              $result = mysqli_query($koneksi, $query);
              if (!$result) {
                die("Query Error:".mysqli_errno($koneksi)."-".mysqli_error($koneksi));

              }
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="'.$row['NIK'].'">'.$row['nama_tamu'].'</option>';
              }


              ?>
            </select>

          </div>
          <div class="form-group">
            <label>Tipe_kamar</label>
            <select class="form-control select2" name="id_kamar">
              <option value="">---Pilih Kamar Ngab---</option>
              <?php 
              $query = "SELECT * FROM tb_kamar";
              $result = mysqli_query($koneksi, $query);
              if (!$result) {
                die("Query Error:".mysqli_errno($koneksi)."-".mysqli_error($koneksi));

              }
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="'.$row['id_kamar'].'">'.$row['tipe'].'</option>';
              }

              ?>
            </select>
          </div>
          <div class="form-group">
            <label>jumlah pesan kamar</label>
            <input type="number" name ="jumlah_pesan" class="form-control" placeholder="jumlah_pesan_kamar" required>
          </div>
          <div class="form-group">
            <label>jumlah orang</label>
            <input type="number" name ="jumlah_orang" class="form-control" placeholder="jumlah_pesan_orang" required>
          </div>
          
          <div class="form-group">
            <label>tgl chek in</label>
            <input type="date" name ="tgl_chek_in" class="form-control" placeholder="tgl_chek_in" required>
          </div>
          <div class="form-group">
            <label>tgl chek out</label>
            <input type="date" name ="tgl_chek_out" class="form-control" placeholder="tgl_chek_out" required>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">konfirmasi</button>
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

   //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

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
<script src="../assets/plugins/select2/js/select2.full.min.js"></script>