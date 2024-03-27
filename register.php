<?php
include 'header.php';
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
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">

              <div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Selamat Datang di Hotel </b>ARDIANSYAH</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Untuk Melakukan Pesanan Silahkan Login Terlebih Dahulu</p>

      <form action="tambah_register.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="NIK" name="NIK">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama Tamu" name="nama_tamu">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Alamat" name="alamat">
          
          </div>
          <div class="input-group mb-3">
                    <select name="jenis_kelamin" class="form-control" required>
                      <option value="">------Pilih Jenis Kelamin------</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
          
          </div>
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="no_hp" name="no_hp">
          
          </div>
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">Sudah punya akun?</p>
      <p class="mb-0">
        <a href="index.php" class="text-center">Lomgin</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>

                <div class="col-md-8">
                  <div class="chard-body">
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
            </div>


            </div>

            <div class="col-md-12">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="text-center">Tentang kami</h3>
              </div>
              <div class="card-body">
                <p class="text-center">Selamat datang di hotel Ardiansyah, hotel yang mengusung tema mewah nan elegan menyajikan pemandangan yang indah serta murah menggunakan teknologi terbaru dalam memanjakan anda dalam menggunakan fasilitas</p>

                <table>
                  <tr>
                    <td><h5><b>Lokasi</b></h5></td>
                  </tr>
                  <tr>
                  <td>City Of Saints Petersburg</td>
                </tr>
                <tr>
                  <td style="width: 100%;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26906.22411677809!2d30.336196051247715!3d59.91858320626589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696378cc74a65ed%3A0x6dc7673fab848eff!2sSaint%20Petersburg%2C%20Rusia!5e0!3m2!1sid!2sid!4v1650600906946!5m2!1sid!2sid" width="1070" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                </table>
                <table>
                <p><h5><b></b></h5></p>
              </table>

              </div>
            </div>
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