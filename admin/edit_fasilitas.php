<?php 

include 'header.php';
include '../koneksi.php';

if (isset($_GET['id'])) {
  $nama_fasilitas= ($_GET['id']);
  $query = "SELECT * FROM tb_fasilitas_umum WHERE id_fasilitas_umum ='$nama_fasilitas'";
  $result = mysqli_query($koneksi, $query);
  if (!$result){
      die("query gagal dijalankan :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
    }
      $data = mysqli_fetch_assoc($result);
      // if (!count($data)) {
      //   echo "<script>alert('data tidak ditemukan.');window.location='kamar.php';</script>";
      // }
      // else {
      //   echo "<script>alert('masukan data.');window.location='kamar.php';</script>";
      // }
      
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
            <h1 class="m-0"> fasilitas umum</h1>
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
              edit data fasilitas
            </div>
             <div class="card-body">
              <form method="POST" action="update_fasilitas.php" enctype="multipart/form-data">
               <!-- <form action="tambah_kamar.php" method="post" enctype="multipart/form-data"> -->
               
                  <div class="form-group">
                    <label>Nama fasilitas</label>
                    <input name="id_fasi" value="<?php echo $data['id_fasilitas_umum'];?>" hidden>
                    <input type="text" name ="nama_fasilitas" class="form-control" value="<?php echo $data['nama_fasilitas'];?>">
                  </div>
                  <div class="form-group">
                    <label>Gambar</label>
                    <img src="gambar/<?php echo $data['gambar'];?>" class="d-block" width="150">
                    <br>
                    <input type="file" name ="foto" class="form-control">
                  </div>
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
    <strong>Copyright &copy; Ujian Praktek <a href="https://adminlte.io">Deni Ardiansyah</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->
