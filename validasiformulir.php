<?php
//Menggabungkan dengan file koneksi yang telah kita buat
include 'koneksi.php';
session_start();
include_once 'navbar.php';
?>

<head>
  <style>
    th {
      text-align: center;
    }

    td {
      text-align: center;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="dashboard.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block"> </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="profile.php" role="button"><i class="fa far fa-user mt-1"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Validasi Perizinan </h1>
              <h2 class="m-0 text-dark">Perizinan Laboratorium</h2>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">Validasi Perizinan</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <head>
        <title> Validasi Perizinan </title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
      </head>
      <div class="container-fluid">
        <table class="table table-hover">
          <thead>
            <tr>
              <td>No</td>
              <td>Nama</td>
              <td>NIM</td>
              <td>Laboratorium</td>
              <td>Tanggal Mulai</td>
              <td>Tanggal Selesai</td>
              <td>Preview Perizinan</td>
              <td>Tindakan</td>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($_SESSION['level'] == 'kalab') :
              $namaKalab = $_SESSION['nama'];
              $query2 = "SELECT lab FROM lab_kalab WHERE kalab = '$namaKalab'";
              $dd = $koneksi->query($query2);
              while ($row2 = $dd->fetch_assoc()) :
                $Laboratorium = $row2['lab'];
              endwhile;
              $batas = 5;
              $hal = @$_GET['hal'];
              if (empty($hal)) {
                $posisi = 0;
                $hal = 1;
              } else {
                $posisi = ($hal - 1) * $batas;
              }
              $no = 1;
              $query = "SELECT * FROM tb_form_lab  WHERE Laboratorium = '$Laboratorium' ORDER BY id DESC LIMIT $posisi, $batas";
              $queryjml = "SELECT * FROM tb_form_lab WHERE Laboratorium = '$Laboratorium'";
              $dewan1 = $db1->prepare($queryjml);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              $no = $posisi + 1;
              $jml = $res1->num_rows;
              echo "Jumlah data : <b>$jml</b>";
              $dewan1 = $db1->prepare($query);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              if ($res1->num_rows > 0) :
                while ($row = $res1->fetch_assoc()) :
                  $nama = $row['Nama_mahasiswa'];
                  $NIM = $row['NIM'];
                  $tgl_mulai = $row['tgl_mulai'];
                  $tgl_selesai = $row['tgl_selesai'];
                  $Kalab = $namaKalab;
                  $acc1 = $row['acc_pembimbing'];
                  $acc2 = $row['acc_kalab'];
                  $acc3 = $row['acc_fakultas'];
            ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $nama ?></td>
                    <td><?= $nim ?></td>
                    <td><?= $Laboratorium ?></td>
                    <td><?= $tgl_mulai ?></td>
                    <td><?= $tgl_selesai ?></td>
                    <td>
                      <a href="eksporpreview.php?id=<?= $row['Id'] ?>">
                        <button class="btn btn-primary">Preview</button>
                      </a>
                    </td>
                    <td>
                      <?php
                      if ($acc2 == 0) :
                        $posisi = "acc_kalab";
                      ?>
                        <a href="ProsesValidasi.php?id=<?= $row['Id'] ?>&posisi=<?= $posisi ?>">
                          <button class="download">Setujui</button>
                        </a>
                      <?php
                      elseif ($acc2 == 1) :
                        $posisi = "acc_kalab";
                      ?>
                        <a href="ProsesValidasi.php?id=<?= $row['Id'] ?>&posisi=<?= $posisi ?>">
                          <button class="download">Batalkan</button>
                        </a>
                      <?php
                      endif;
                      ?>
                    </td>
                  </tr>
                <?php
                endwhile;
              else : ?>
                <tr>
                  <td colspan='10'>"Tidak ada data ditemukan"</td>
                </tr>
                <?php
              endif;
            elseif ($_SESSION['level'] == 'fakultas') :
              $batas = 5;
              $hal = @$_GET['hal'];
              if (empty($hal)) {
                $posisi = 0;
                $hal = 1;
              } else {
                $posisi = ($hal - 1) * $batas;
              }
              $no = 1;
              $query = "SELECT * FROM tb_form_lab  ORDER BY id DESC LIMIT $posisi, $batas";
              $queryjml = "SELECT * FROM tb_form_lab ";
              $dewan1 = $db1->prepare($queryjml);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              $no = $posisi + 1;
              $jml = $res1->num_rows;
              echo "Jumlah data : <b>$jml</b>";
              $dewan1 = $db1->prepare($query);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              if ($res1->num_rows > 0) :
                while ($row = $res1->fetch_assoc()) :
                  $Laboratorium = $row['Laboratorium'];
                  $nama = $row['Nama_mahasiswa'];
                  $NIM = $row['NIM'];
                  $tgl_mulai = $row['tgl_mulai'];
                  $tgl_selesai = $row['tgl_selesai'];
                  $fakultas = $_SESSION['nama'];
                  $acc1 = $row['acc_pembimbing'];
                  $acc2 = $row['acc_kalab'];
                  $acc3 = $row['acc_fakultas'];
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $nama ?></td>
                    <td><?= $nim ?></td>
                    <td><?= $Laboratorium ?></td>
                    <td><?= $tgl_mulai ?></td>
                    <td><?= $tgl_selesai ?></td>
                    <td>
                      <a href="eksporpreview.php?id=<?= $row['Id'] ?>">
                        <button class="btn btn-primary">Preview</button>
                      </a>
                    </td>
                    <td>
                      <?php
                      if ($acc3 == 0) :
                        $posisi = "acc_fakultas";
                      ?>
                        <a href="ProsesValidasi.php?id=<?= $row['Id'] ?>&posisi=<?= $posisi ?>">
                          <button class="download">Setujui</button>
                        </a>
                      <?php
                      elseif ($acc3 == 1) :
                        $posisi = "acc_fakultas";
                      ?>
                        <a href="ProsesValidasi.php?id=<?= $row['Id'] ?>&posisi=<?= $posisi ?>">
                          <button class="download">Batalkan</button>
                        </a>
                      <?php
                      endif;
                      ?>
                    </td>
                  </tr>
                <?php
                endwhile;
              else : ?>
                <tr>
                  <td colspan='10'>"Tidak ada data ditemukan"</td>
                </tr>
              <?php
              endif;
            else :
              ?>
              <script>
                document.location = 'login.php'
              </script>
            <?php
            endif;
            ?>
          </tbody>
        </table>
      </div>
      <div>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">

            <?php
            $jml_hal = ceil($jml / $batas);
            for ($i = 1; $i <= $jml_hal; $i++) {
              if ($i != $hal) {
                echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?hal=$i\">$i</a></li>";
              } else {
                echo "<li class=\"page-item active\"><a class=\"page-link\">$i</a></li>";
              }
            }
            ?>
          </ul>
        </nav>
      </div>

      <br>
      <br>
      <br>
      <br>
      <br>
      </br>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>

      <!-- Footer -->
      <footer class="site-footer bg-dark">

        <div class="container-fluid">

          <div class="row">

            <div class="col-md-4">
              <img src="https://spada.uns.ac.id/pluginfile.php/2/course/section/1/uns.png" style="width: 40%; padding-center: 2em;" alt="">
              <h3 class="footer-heading text-blue">Fakultas Teknik UNS</h3>
              <p>Jl. Ir. Sutami No.36 A Surakarta 57126 <br>
                Telp (+62)77358350233 <br>
                Fax (+62)77358350233 <br>
                Email : ft@ft-uns.com </p>
            </div>

            <div class="col-md-4">
              <h3 class="footer-heading text-light">Program Studi</h3>
              <a href="https://arsitektur.ft.uns.ac.id/" target='_blank'>Arsitektur</a> <br>
              <a href="https://sipil.ft.uns.ac.id/?lang=id" target='_blank'>Teknik Sipil</a> <br>
              <a href="https://mesin.ft.uns.ac.id/" target='_blank'>Teknik Mesin</a> <br>
              <a href="http://industri.ft.uns.ac.id/" target='_blank'>Teknik Industri</a> <br>
              <a href="https://che.ft.uns.ac.id/" target='_blank'>Teknik Kimia</a> <br>
              <a href="https://elektro.ft.uns.ac.id/" target='_blank'>Teknik Elektro</a> <br>
              <a href="https://pwk.ft.uns.ac.id/" target='_blank'>Perencanaan Wilayah dan Kota</a> <br>
            </div>

            <div class="col-md-3">
              <div class="col-md-11">
                <h3 class="footer-heading text-light">Maps</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.120699070088!2d110.85154081477673!3d-7.5618169945466365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16fdf072a90f%3A0xea50b255b0e6ce3e!2sFakultas%20Teknik%20Uns!5e0!3m2!1sen!2sid!4v1619534477026!5m2!1sen!2sid" style="max-width:300; max-height:200" allowfullscreen="" loading="lazy"></iframe>
              </div>

            </div>
          </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <footer class="main-footer bg-dark">

    SISTEM INFORMASI PERIZINAN
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>