<?php
include 'koneksi.php';
session_start();
include_once 'navbar.php';
?>

<head>
  <title> Validasi Perizinan </title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
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
      <div class="container-fluid">
        <table class="table table-hover">
          <?php
          if ($_SESSION['level'] == 'Admin') :
          ?>
            <thead>
              <tr>
                <td>No</td>
                <td>Nama</td>
                <td>NIM</td>
                <td>Laboratorium</td>
                <td>Tanggal Mulai</td>
                <td>Tanggal Selesai</td>
                <td>Preview Perizinan</td>
                <td>Tindakan<br>Kalab</td>
                <td>Tindakan<br>Tim K3L/Fakultas</td>
                <td>Hapus</td>
              </tr>
            </thead>
            <tbody>
              <?php
              $batas = 5;
              $hal = @$_GET['hal'];
              if (empty($hal)) {
                $posisi = 0;
                $hal = 1;
              } else {
                $posisi = ($hal - 1) * $batas;
              }
              $no = 1;
              $query = "SELECT * FROM tb_form_lab ORDER BY id DESC LIMIT $posisi, $batas";
              $queryjml = "SELECT * FROM tb_form_lab";
              $dewan1 = $koneksi->prepare($queryjml);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              $no = $posisi + 1;
              $jml = $res1->num_rows;
              echo "Jumlah data : <b>$jml</b>";
              $dewan1 = $koneksi->prepare($query);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              if ($res1->num_rows > 0) {
                while ($row = $res1->fetch_assoc()) {
                  $Laboratorium = $row['Laboratorium'];
                  $nama = $row['Nama_mahasiswa'];
                  $NIM = $row['NIM'];
                  $tgl_mulai = $row['tgl_mulai'];
                  $tgl_selesai = $row['tgl_selesai'];
                  $Kalab = $row['Kalab'];
                  $fakultas = $row['Tim_Fakultas'];
                  $acc1 = $row['acc_kalab'];
                  $acc2 = $row['acc_fakultas'];
                  echo "<tr>";
                  echo "<td>" . $no++ . "</td>";
                  echo "<td>" . $nama . "</td>";
                  echo "<td>" . $NIM . "</td>";
                  echo "<td>" . $Laboratorium . "</td>";
                  echo "<td>" . $tgl_mulai . "</td>";
                  echo "<td>" . $tgl_selesai . "</td>";
              ?>
                  <td>
                    <a href="eksporpreview.php?id=<?= $row['Id'] ?>">
                      <button class="btn btn-primary">Preview</button>
                    </a>
                  </td>
                  <td>
                    <?php
                    if ($acc1 == 0) {
                      $posisi = "acc_kalab";
                    ?>
                      <a href="ProsesValidasi.php?id=<?= $row['Id'] ?>&posisi=<?= $posisi ?>&nama=<?= $_SESSION['nama'] ?>">
                        <button class="btn btn-success">Setujui</button>
                      </a>
                    <?php
                    } else if ($acc1 == 1) {
                      $posisi = "acc_kalab";
                    ?>
                      <a href="ProsesValidasi.php?id=<?= $row['Id'] ?>&posisi=<?= $posisi ?>&nama=<?= $_SESSION['nama'] ?>">
                        <button class="btn btn-danger">Batalkan</button>
                      </a>
                    <?php
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    if ($acc2 == 0) {
                      $posisi = "acc_fakultas";
                    ?>
                      <a href="ProsesValidasi.php?id=<?= $row['Id'] ?>&posisi=<?= $posisi ?>">
                        <button class="btn btn-success">Setujui</button>
                      </a>
                    <?php
                    } else if ($acc2 == 1) {
                      $posisi = "acc_fakultas";
                    ?>
                      <a href="ProsesValidasi.php?id=<?= $row['Id'] ?>&posisi=<?= $posisi ?>">
                        <button class="btn btn-danger">Batalkan</button>
                      </a>
                    <?php
                    }
                    ?>
                  </td>
                  <td class="text-center">
                    <div>
                      <a href="delete.php?id=<?= $row['Id'] ?>">
                        <button class="btn btn-danger">
                          <div style="font-size: 1rem;">
                            <i class="fa fa-trash" aria-hidden="true">
                            </i>
                          </div>
                        </button>
                      </a>
                    </div>
                  </td>
              <?php
                  echo "</tr>";
                }
              } else {
                echo "<tr>";
                echo "<td colspan='10'>Tidak ada data ditemukan</td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          <?php
          elseif ($_SESSION['level'] == 'kalab') :
          ?>
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
              $dewan1 = $koneksi->prepare($queryjml);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              $no = $posisi + 1;
              $jml = $res1->num_rows;
              echo "Jumlah data : <b>$jml</b>";
              $dewan1 = $koneksi->prepare($query);
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
                    <td><?= $NIM ?></td>
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
                          <button type="button" class="btn btn-success">Setujui</button>
                        </a>
                      <?php
                      elseif ($acc2 == 1) :
                        $posisi = "acc_kalab";
                      ?>
                        <a href="ProsesValidasi.php?id=<?= $row['Id'] ?>&posisi=<?= $posisi ?>">
                          <button type="button" class="btn btn-danger">Batalkan</button>
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
                  <td colspan='8'>"Tidak ada data ditemukan"</td>
                </tr>
              <?php
              endif; ?>
            </tbody>
          <?php
          elseif ($_SESSION['level'] == 'fakultas') :
          ?>
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
              $dewan1 = $koneksi->prepare($queryjml);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              $no = $posisi + 1;
              $jml = $res1->num_rows;
              echo "Jumlah data : <b>$jml</b>";
              $dewan1 = $koneksi->prepare($query);
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
                          <button type="button" class="btn btn-success">Setuju</button>
                        </a>
                      <?php
                      elseif ($acc3 == 1) :
                        $posisi = "acc_fakultas";
                      ?>
                        <a href="ProsesValidasi.php?id=<?= $row['Id'] ?>&posisi=<?= $posisi ?>">
                          <button type="button" class="btn btn-danger">Batalkan</button>
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
              endif; ?>
            </tbody>
          <?php
          else :
          ?>
            <script>
              document.location.href = 'dahsboard.php'
            </script>
          <?php
          endif;
          ?>
        </table>
      </div>
      <div class="mb-5">
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
      <!-- Footer -->
      <footer class="site-footer bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-md-4 mt-4 mb-4">
              <img src="https://spada.uns.ac.id/pluginfile.php/2/course/section/1/uns.png" style="width: 40%;" alt="">
              <h3 class="footer-heading text-blue">Fakultas Teknik UNS</h3>
              <p>Jl. Ir. Sutami No.36 A Surakarta 57126 <br>
                Telp (+62)77358350233 <br>
                Fax (+62)77358350233 <br>
                Email : ft@ft-uns.com </p>
            </div>
            <div class="col-md-4 mt-4 mb-4">
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
              <div class="col-md-12 mt-4 mb-4">
                <h3 class="footer-heading text-light">Maps</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.120699070088!2d110.85154081477673!3d-7.5618169945466365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16fdf072a90f%3A0xea50b255b0e6ce3e!2sFakultas%20Teknik%20Uns!5e0!3m2!1sen!2sid!4v1619534477026!5m2!1sen!2sid" style="max-width:300; max-height:200" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </footer>
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>

  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

</body>

</html>