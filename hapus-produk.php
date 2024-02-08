<?php
include "koneksi.php";

mysqli_query($koneksi,"DELETE from tambah_produk where id_produk='$_GET[kdhapus]'");
?>
<script>
    document.location='tampil-produk.php'
    </script>