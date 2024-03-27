<?php include 'header.php';
session_start();
include 'koneksi.php';
if (empty($_SESSION['nama_pengguna'])) {
  ?>
  <script type="text/javascript">
    alert("anda belum login");
    window.location.href = "index.php";
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
            <h1 class="m-0"> Selamat Datang || <?php echo $_SESSION['nama_pengguna']; ?></h1>
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
                <h3 class="card-title">Carousel</h3>
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
                      <img class="d-block w-100" src="assets/gambar/gambar_homtel.jpg" alt="First slide" height="480">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/gambar/gambar_homtel3.jpg" alt="Second slide" height="480">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/gambar/gambar_homtel4.jpg" alt="Third slide" height="480">
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
          </div>

          <form action="tambah_transaksi.php" method="POST">
          <div class="col-md-12">
            <div class="chard-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Tanggal cek in</label>
                    <input type="date" class="form-control" name="tgl_chek_in">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Tanggal cek Out</label>
                    <input type="date" class="form-control" name="tgl_chek_out">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Jumlah Kamar</label>
                    <input type="number" name="jumlah_pesan" class="form-control" placeholder="Jumlah pesan kamar">
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">

                    <button class="btn btn-primary" data-toggle="modal" data-target="#pesan">pesan</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="pesan">
 
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
            <input type="text" name="nama_tamu" class="form-control" value="<?php echo $_SESSION['nama_pengguna']; ?>" readonly>

            <div class="form-group">
             <label> NIK</label>
            <input type="text" name="NIK" class="form-control" value="<?php echo $_SESSION['password']; ?>" readonly>

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
            <label>jumlah orang</label>
            <input type="number" name ="jumlah_orang" class="form-control" placeholder="jumlah_pesan_orang" required>
          </div>
           
        </div>
        <div class="modal-footer justify-content-between">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">konfirmasi</button>
        </div>
      </div>
        </div>
  
    </div>
          </form>

          <div class="col-md-12">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="text-center">Tentang kami</h3>
              </div>
              <div class="card-body">
                <p class="text-center">Selamat datang di hotel Ardiansyah, hotel yang mengusung tema mewah nan elegan menyajikan pemandangan yang indah serta murah menggunakan teknologi terbaru dalam memanjakan anda dalam menggunakan fasilitas</p>
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