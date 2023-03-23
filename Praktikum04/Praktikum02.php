<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 02</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="container">
                <h1>From Belanja</h1>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


                <form method="POST">
                  <div class="form-group row">
                    <label for="Nama Customer" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                          </div>
                        </div>
                        <input id="Nama Customer" name="nama_customer" placeholder="Masukan Nama Customer" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="tv" type="radio" class="custom-control-input" value="tv">
                        <label for="tv" class="custom-control-label">TV</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="kulkas" type="radio" class="custom-control-input" value="kulkas">
                        <label for="kulkas" class="custom-control-label">Kulkas</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="mesin_cuci" type="radio" class="custom-control-input" value="mesin_cuci">
                        <label for="mesin_cuci" class="custom-control-label">Mesin Cuci</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                      <input id="jumlah" name="jumlah" placeholder="Jumlah Beli" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-4 col-8">
                      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                  </div>
                </form>

                <?php if (isset($_POST['submit'])) {

                  // tampung data menggunakan variabel
                  $custname = $_POST["nama_customer"];
                  $produk = $_POST["produk"];
                  $jumlah_beli = $_POST["jumlah"];

                  switch ($produk) {
                    case "tv":
                      $total = $jumlah_beli * 4200000;
                      break;
                    case "kulkas":
                      $total = $jumlah_beli * 3100000;
                      break;
                    case "mesin_cuci":
                      $total = $jumlah_beli * 3800000;
                      break;
                  }

                  // Tampilkan data dari variabel
                  echo '<br>Nama Customer : ' . $custname;
                  echo '<br>Produk pilihan : ' . $produk;
                  echo '<br>Jumlah beli : ' . $jumlah_beli;
                  echo '<br>Total harga : ' . $total;
                }
                ?>
              </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>