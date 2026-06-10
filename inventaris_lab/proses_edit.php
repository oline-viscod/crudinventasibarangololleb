<?php

include 'config/koneksi.php';

$id = $_POST['id'];
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$kondisi = $_POST['kondisi'];

$query = mysqli_query($conn,
    "UPDATE barang SET

    kode_barang = '$kode_barang',
    nama_barang = '$nama_barang',
    jumlah = '$jumlah',
    kondisi = '$kondisi'

    WHERE id = '$id'");

if ($query) {

    echo "<script>
            alert('Data berhasil diupdate!');
            window.location='index.php';
          </script>";

} else {

    echo "<script>
            alert('Data gagal diupdate!');
            window.history.back();
          </script>";
}

?>