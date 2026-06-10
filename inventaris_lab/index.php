<?php
include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris Barang Lab</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">\

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Data Inventaris Barang Lab Komputer</h2>

    <a href="tambah.php" class="btn btn-primary mb-3">
        Tambah Barang
    </a>

    <div class="row mb-3">
        <div class="col-md-6">

            <form method="GET">

                <div class="input-group">

                    <input type="text"
                           name="cari"
                           class="form-control"
                           placeholder="Cari kode atau nama barang..."
                           value="<?= isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">

                    <button type="submit" class="btn btn-primary">
                        Cari
                    </button>

                    <a href="index.php" class="btn btn-secondary">
                        Reset
                    </a>

                </div>

            </form>

        </div>
    </div>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

        <?php

        $no = 1;

        if (isset($_GET['cari']) && $_GET['cari'] != '') {

            $cari = $_GET['cari'];

            $query = mysqli_query($conn,
                "SELECT * FROM barang
                 WHERE kode_barang LIKE '%$cari%'
                 OR nama_barang LIKE '%$cari%'");

        } else {

            $query = mysqli_query($conn,
                "SELECT * FROM barang");
        }

        while ($data = mysqli_fetch_assoc($query)) {

        ?>

            <tr>

                <td><?= $no++; ?></td>
                <td><?= $data['kode_barang']; ?></td>
                <td><?= $data['nama_barang']; ?></td>
                <td><?= $data['jumlah']; ?></td>
                <td><?= $data['kondisi']; ?></td>

                <td>

                    <a href="edit.php?id=<?= $data['id']; ?>"
                       class="btn btn-warning btn-sm">
                       Edit
                    </a>

                    <a href="hapus.php?id=<?= $data['id']; ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus data ini?')">
                       Hapus
                    </a>

                </td>

            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>

</body>
</html>