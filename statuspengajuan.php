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
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
              <h1 class="m-0 text-dark">Status Pengajuan </h1>
              <h2 class="m-0 text-dark">Perizinan Laboratorium</h2>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">Status Pengajuan</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <head>
        <title> Status Pengajuan </title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
      </head>
      <div>
        <div class="container-fluid">
          <table class="table table-hover">
            <thead>
              <tr>
                <td>No</td>
                <td>Laboratorium</td>
                <td>Tanggal Mulai</td>
                <td>Tanggal Selesai</td>
                <td>Kepala Laboratorium</td>
                <td>Tim K3L/Fakultas</td>
                <td>Status</td>
                <td>Pengunduhan Formulir</td>
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
              if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $pencarian = trim(mysqli_real_escape_string($koneksi, $_POST['pencarian']));
                if ($pencarian != '') {
                  $query = "SELECT * FROM tb_form_lab WHERE Pembimbing LIKE '%" . $pencarian . "%' OR Tim_Fakultas LIKE '%" . $pencarian . "%' OR Kalab LIKE '%" . $pencarian . "%' HAVING Nama_mahasiswa='" . $_SESSION['nama'] . "' AND NIM='" . $_SESSION['nim'] . "'";
                  $queryjml = $query;
                  $dewan1 = $koneksi->prepare($queryjml);
                  $dewan1->execute();
                  $res1 = $dewan1->get_result();
                  echo "<div style=\"float:left;\">";
                  $jml = $res1->num_rows;
                  echo "Data hasil pencarian : <b>$jml</b>";
                  echo "</div>";
                } else {
                  $query = "SELECT * FROM tb_form_lab WHERE Nama_mahasiswa='" . $_SESSION['nama'] . "' AND NIM='" . $_SESSION['nim'] . "' ORDER BY id DESC LIMIT $posisi, $batas";
                  $queryjml = "SELECT * FROM tb_form_lab WHERE Nama_mahasiswa='" . $_SESSION['nama'] . "' AND NIM='" . $_SESSION['nim'] . "'";
                  $dewan1 = $koneksi->prepare($queryjml);
                  $dewan1->execute();
                  $res1 = $dewan1->get_result();
                  $no = $posisi + 1;
                  $jml = $res1->num_rows;
                  echo "Jumlah data : <b>$jml</b>";
                }
              } else {
                $query = "SELECT * FROM tb_form_lab WHERE Nama_mahasiswa='" . $_SESSION['nama'] . "' AND NIM='" . $_SESSION['nim'] . "' ORDER BY id DESC LIMIT $posisi, $batas";
                $queryjml = "SELECT * FROM tb_form_lab WHERE Nama_mahasiswa='" . $_SESSION['nama'] . "' AND NIM='" . $_SESSION['nim'] . "'";
                $dewan1 = $koneksi->prepare($queryjml);
                $dewan1->execute();
                $res1 = $dewan1->get_result();
                $no = $posisi + 1;
                $jml = $res1->num_rows;
                echo "Jumlah data : <b>$jml</b>";
              }
              $dewan1 = $koneksi->prepare($query);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              if ($res1->num_rows > 0) {
                while ($row = $res1->fetch_assoc()) {
                  $Laboratorium = $row['Laboratorium'];
                  $tgl_mulai = $row['tgl_mulai'];
                  $tgl_selesai = $row['tgl_selesai'];
                  $Kalab = $row['Kalab'];
                  $fakultas = $row['Tim_Fakultas'];
                  $acc1 = $row['acc_kalab'];
                  $acc2 = $row['acc_fakultas'];
                  echo "<tr>";
                  echo "<td>" . $no++ . "</td>";
                  echo "<td>" . $Laboratorium . "</td>";
                  echo "<td>" . $tgl_mulai . "</td>";
                  echo "<td>" . $tgl_selesai . "</td>";
                  echo "<td>" . $Kalab . "</td>";
                  echo "<td>" . $fakultas . "</td>";
              ?>
                  <td>
                    <?php if ($acc1 == 1) : ?>
                      <i class="fa-2x fas fa-check"></i>
                    <?php else : ?>
                      <i class="fa-2x fas fa-times"></i>
                    <?php endif; ?>
                    <br>
                    <?php if ($acc2 == 1) : ?>
                      <i class="fa-2x fas fa-check"></i>
                    <?php else : ?>
                      <i class="fa-2x fas fa-times"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <a href="eksporpreview.php?id=<?= $row['Id'] ?>">
                      <button class="btn btn-primary">Preview</button>
                    </a>
                    <?php
                    if ($acc1 == 1 && $acc2 == 1) {
                    ?>
                      <a href="eksporadaptif.php?id=<?= $row['Id'] ?>">
                        <button class="btn btn-primary mt-2">Download</button>
                      </a>
                    <?php
                    } else {
                    ?>
                      <button class="btn btn-danger mt-2" disabled>Download</button>
                    <?php
                    }
                    ?>
                  </td>
              <?php
                  echo "</tr>";
                }
              } else {
                echo "<tr>";
                echo "<td colspan='8'>Tidak ada data ditemukan</td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
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
      </br>
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