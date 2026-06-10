<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Tambah Data Barang</h2>

    <div class="card">
        <div class="card-body">

            <form action="proses_tambah.php" method="POST">

                <div class="mb-3">
                    <label>Kode Barang</label>
                    <input type="text"
                           name="kode_barang"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label>Nama Barang</label>
                    <input type="text"
                           name="nama_barang"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label>Jumlah</label>
                    <input type="number"
                           name="jumlah"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label>Kondisi</label>

                    <select name="kondisi"
                            class="form-select"
                            required>

                        <option value="">-- Pilih Kondisi --</option>
                        <option value="Baik">Baik</option>
                        <option value="Rusak Ringan">Rusak Ringan</option>
                        <option value="Rusak Berat">Rusak Berat</option>

                    </select>
                </div>

                <button type="submit"
                        class="btn btn-success">
                    Simpan
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