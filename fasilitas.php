<?php include 'header.php'; 
include 'koneksi.php';
?>

<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> HOTTEL ARDIANSYAH</h1>
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


        <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fasilitas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="assets/gambar/kamarmandi.jpg" alt="First slide" height="480">
                      <p align="center">Terdapat Kamar Mandi Umum</p>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/gambar/kolamhomtel.jpg" alt="Second slide" height="480">
                      <p align="center">Terdapat Kolam Renang Yang Luas</p>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/gambar/meeten.jpg" alt="Third slide" height="480">
                      <p align="center">Terdapat Ruang Meet/Ruang Rapat</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="col-md-12">
              <div class="row">

               <?php 
                    $no= 1;
                    $query = "SELECT * FROM tb_fasilitas_umum";
                    $result = mysqli_query($koneksi, $query);
                    if (!$result) {
                      die("Query Error:".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
                      
                    }
                    while ($row = mysqli_fetch_assoc($result)) {
                    
                    ?>

                <div class="col-md-4">
                  <div class="card card-outline">
                    <!--/.card-header -->
                    <div class="card-body">
                      <img class="d-block w-100" src="admin/gambar/<?php echo $row['gambar']; ?>" height="200">
                      <p><?php echo $row['nama_fasilitas'];?></p>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
              <?php } ?>

                    <!-- /.card-body -->
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