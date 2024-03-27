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
        <div class="col-md-12">

                          <?php 
                    $no= 1;
                    $query = "SELECT * FROM tb_kamar";
                    $result = mysqli_query($koneksi, $query);
                    if (!$result) {
                      die("Query Error:".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
                      
                    }
                    while ($row = mysqli_fetch_assoc($result)) {
                    
                    
                    ?>

          <div class="card card-outline card-info">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-outline card-outline">
                    <table>
                    
                    <tr>
                      <td><h4><b><?php echo $row['tipe']; ?></b></h4></td>
                    </tr>
                    <tr>
                      <td><?php echo $row['keterangan']; ?></td>
                    </tr>
                    <tr>
                      <td>Jumlah Kamar Yang Tersedia <?php echo $row['jumlah']; ?>
                      </td>
                    </tr>
                  </table>
                  <table>
                    <td><h5><b>Rp.<?php echo $row['harga']; ?></b></h5></td>
                  </table>

                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body card-outline">
                    <img class="d-block w-100" src="admin/gambar/<?php echo $row['gambar']; ?>" height="300">
                  </div>
                </div>
              </div>
            
            </div>
          </div>
           <?php } ?>
        </div>


        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<?php include 'footer.php'; ?>