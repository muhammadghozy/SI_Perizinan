<?php
$conn = mysqli_connect("localhost", "root", "", "si_perizinan");
$lab = $_GET['lab'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-4 mb-4 p-3 border border-dark rounded shadow">
        <h2>Daftar Reservasi <?= $lab ?></h2>
        <?php
        $result  = mysqli_query($conn, "SELECT * FROM tb_form_lab WHERE Laboratorium = '$lab' AND CURRENT_DATE() < tgl_selesai");
        $nomer = 1;
        $jml = $result->num_rows;
        ?>
        <h6>Jumlah Reservasi <?= $jml ?></h2>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) :
                    ?>
                        <tr>
                            <th scope="row"><?= $nomer++ ?></th>
                            <td><?= $row["Nama_mahasiswa"]; ?></td>
                            <td><?php if ($row["tgl_mulai"] == $row["tgl_selesai"]) {
                                    echo $row["tgl_mulai"];
                                } else {
                                    echo $row["tgl_mulai"];
                                    echo " sampai ";
                                    echo $row["tgl_selesai"];
                                } ?>
                            </td>
                            <td><?= $row["jam_mulai"]; ?> - <?= $row["jam_selesai"]; ?></td>
                        </tr>
                    <?php
                    endwhile; ?>
                </tbody>
            </table>
    </div>
</body>

</html>