<?php

include 'config/koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn,
    "SELECT * FROM barang WHERE id='$id'");

$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Edit Barang</h2>

    <div class="card">
        <div class="card-body">

            <form action="proses_edit.php" method="POST">

                <input type="hidden"
                       name="id"
                       value="<?= $data['id']; ?>">

                <div class="mb-3">
                    <label>Kode Barang</label>
                    <input type="text"
                           name="kode_barang"
                           class="form-control"
                           value="<?= $data['kode_barang']; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label>Nama Barang</label>
                    <input type="text"
                           name="nama_barang"
                           class="form-control"
                           value="<?= $data['nama_barang']; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label>Jumlah</label>
                    <input type="number"
                           name="jumlah"
                           class="form-control"
                           value="<?= $data['jumlah']; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label>Kondisi</label>

                    <select name="kondisi"
                            class="form-select"
                            required>

                        <option value="Baik" <?= ($data['kondisi'] == 'Baik') ? 'selected' : ''; ?>>
                            Baik
                        </option>

                        <option value="Rusak Ringan" <?= ($data['kondisi'] == 'Rusak Ringan') ? 'selected' : ''; ?>>
                            Rusak Ringan
                        </option>

                        <option value="Rusak Berat" <?= ($data['kondisi'] == 'Rusak Berat') ? 'selected' : ''; ?>>
                            Rusak Berat
                        </option>

                    </select>
                </div>

                <button type="submit"
                        class="btn btn-warning">
                    Update
                </button>

                <a href="index.php"
                   class="btn btn-secondary">
                   Kembali
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>