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
            <h1 class="m-0"> Selamat datang Resepsionis || <small><?php echo $_SESSION['nama_pengguna'];?></small></h1>
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
               
               <?php
               include '../koneksi.php';
               $data = mysqli_query($koneksi, "Select * from tb_transaksi");
               $jumlah_transaksi = mysqli_num_rows($data);
               ?>

            

           

            <div class="col-lg-12 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $jumlah_transaksi?> Transaksi Belum Diselesaikan</h3>

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