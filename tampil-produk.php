<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Berita</title>
    <!-- Bagian bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <?php
    include "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM tambah_produk order by id_produk asc");
    ?>

    <div class="container">
        <h1 class="display-4">Daftar Produk</h1>
        <p>Berikut ini merupakan daftar produk yang populer</p>
        <a href="tambah_produk.php" class="btn btn-primary">Tambah Produk</a><br><br>

        <div class="table-responsive-sm">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($res = mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $res['nm_produk'] ?></td>
                            <td><?php echo $res['deskripsi'] ?></td>
                            <td><?php echo $res['harga'] ?></td>
                            <td><?php echo "<img src='foto_produk/{$res['foto']}' width='100' height='100'>" ?></td>
                            <td><div align = "center">
                            <td>
                                <a href="edit-produk.php?kdproduk=<?php echo $res['id_produk']; ?>" class="btn btn-warning">Edit</a>
                                <a href="hapus-produk.php?kdhapus=<?php echo $res['id_produk']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
