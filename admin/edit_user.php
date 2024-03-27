<?php 

include 'header.php';
include '../koneksi.php';

if (isset($_GET['id'])) {
  $id_pengguna = ($_GET['id']);
  $query = "SELECT * FROM tb_pengguna WHERE id_pengguna='$id_pengguna'";
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
              edit data user
            </div>
             <div class="card-body">
              <form method="POST" action="update_user.php" enctype="multipart/form-data">
               <!-- <form action="tambah_kamar.php" method="post" enctype="multipart/form-data"> -->
               
                  <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input name="id_pengguna" value="<?php echo $data['id_pengguna'];?>" hidden>
                    <input type="text" name ="nama_pengguna" class="form-control" value="<?php echo $data['nama_pengguna'];?>">
                  </div>

                  <div class="form-group">
                    <label>password</label>
                    <input type="password" name ="password" class="form-control" value="<?php echo $data['password'];?>">
                  </div>

                  <div class="form-group">
                    <label>LEVEL</label>
                    <select name="level" class="form-control" required>
                      <option value="<?php echo $data['level'];?>"><?php echo $data['level'];?></option>
                      <option value="">------Pilih 1------</option>
                      <option value="admin">Administrator</option>
                      <option value="Resepsionis">Resepsionis</option>
                      <option value="tamu">Tamu</option>
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
