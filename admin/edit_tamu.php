<?php 

include 'header.php';
include '../koneksi.php';

if (isset($_GET['id'])) {
  $NIK = ($_GET['id']);
  $query = "SELECT * FROM tb_tamu WHERE NIK='$NIK'";
  $result = mysqli_query($koneksi, $query);
  if (!$result){
      die("query gagal dijalankan :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
    }
      $data = mysqli_fetch_assoc($result);
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
            <h1 class="m-0"> DATA TAMU</h1>
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
              edit data TAMU
            </div>
             <div class="card-body">
              <form method="POST" action="update_tamu.php" enctype="multipart/form-data">
               <!-- <form action="tambah_kamar.php" method="post" enctype="multipart/form-data"> -->
               <div class="form-group">
                    <label>nik</label>
                    <input type="text" name ="NIK" class="form-control" value="<?php echo $data['NIK'];?>">
                  </div>

                  <div class="form-group">
                    <label>Nama Tamu</label>
                    <input type="text" name ="nama_tamu" class="form-control" value="<?php echo $data['nama_tamu'];?>">
                  </div>

                  <div class="form-group">
                    <label>Alamat</label>
                    <input name ="alamat" class="form-control" value="<?php echo $data['alamat'];?>">
                  </div>

                  <div class="form-group">
                    <label>jenis_kelamin</label>
                    <select name="jenis_kelamin" class="form-control" required>
                      <option value="<?php echo $data['jenis_kelamin'];?>"><?php echo $data['jenis_kelamin'];?></option>
                 
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                    </div>

                  <div class="form-group">
                    <label>NO HP</label>
                    <input type="number" name ="no_hp" class="form-control" value="<?php echo $data['no_hp'];?>">
                  </div>
                  <!--  -->
            <div class="form-group">
              <button type="submit" class="btn btn-primary">update</button>
            </div>
              </form>

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
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; Ujian Praktek <a href="https://adminlte.io">Deni ardiansyah</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->
s