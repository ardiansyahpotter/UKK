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
            <h1 class="m-0"> Selamat datang admin || <small><?php echo $_SESSION['nama_pengguna'];?></small></h1>
          </div><!-- /.col -->
          <div class="col-sm_report(MYSQLI_REPORT_ERROR | );-6 ">
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
            <div class="card-body">
              <div class="row">
               <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>DATA KAMAR</p>
              </div>
              <div class="icon">
                <i class="fas fa-home"></i>
              </div>
              <a href="kamar.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>FASILITAS KAMAR</p>
              </div>
              <div class="icon">
                <i class="fas fa-list-alt"></i>
              </div>
              <a href="fasilitas.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>USER</p>
              </div>
              <div class="icon">
                <i class="fas fa-image"></i>
              </div>
              <a href="user.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>TRANSAKSI</p>
              </div>
              <div class="icon">
                <i class="fas fa-check"></i>
              </div>
              <a href="transaksi.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Data Tamu</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="tamu.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
                
              </div>
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

<?php include 'footer.php'; ?>