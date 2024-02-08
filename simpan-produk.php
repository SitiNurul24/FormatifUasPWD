<?php
include "koneksi.php";

$nm_produk = $_POST['nm_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$vfoto_name = $_FILES['fupload']['name'];
$vfoto_tmp = $_FILES['fupload']['tmp_name'];
$dir1 = "foto_produk/";

$simpan = mysqli_query($koneksi, "INSERT INTO tambah_produk (nm_produk, deskripsi, harga, foto) VALUES ('$nm_produk', '$deskripsi','$harga', '$vfoto_name')");

if ($simpan) {
    $upload_path = $dir1 . $vfoto_name;
    move_uploaded_file($vfoto_tmp, $upload_path);
    echo "Produk berhasil disimpan dan gambar berhasil diupload.";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
<script>
    document.location="tampil-produk.php"
    </script>