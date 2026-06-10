<?php

include 'config/koneksi.php';

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$kondisi = $_POST['kondisi'];

$query = mysqli_query($conn,
    "INSERT INTO barang
    (kode_barang, nama_barang, jumlah, kondisi)

    VALUES

    ('$kode_barang',
     '$nama_barang',
     '$jumlah',
     '$kondisi')");

if ($query) {

    echo "<script>
            alert('Data berhasil ditambahkan!');
            window.location='index.php';
          </script>";

} else {

    echo "<script>
            alert('Data gagal ditambahkan!');
            window.history.back();
          </script>";
}

?>