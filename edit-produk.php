<?php
include "koneksi.php";

// Periksa apakah parameter kdberita telah diterima
if (isset($_GET['kdproduk'])) {
    $kdproduk = $_GET['kdproduk'];

    // Ambil data berita dari database
    $query = mysqli_query($koneksi, "SELECT * FROM tambah_produk WHERE id_produk = '$kdproduk'");
    $data = mysqli_fetch_array($query);

    if (!$data) {
        echo "Produk tidak ditemukan.";
        exit;
    }
} else {
    echo "Parameter kdproduk tidak diterima.";
    exit;
}

// Proses form jika data dikirim melalui POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nm_produk = $_POST['nm_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    // Perbarui data berita di database
    $update = mysqli_query($koneksi, "UPDATE tambah_produk SET nm_produk='$nm_produk', deskripsi='$deskripsi', harga='$harga' WHERE id_produk='$kdproduk'");

    if ($update) {
        echo "Data berhasil diperbarui.";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bagian bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Edit Berita</title>
</head>
<body>
    <div class="container">
        <h1 class="display-4">Form Edit Produk</h1>
        <form method="post" action="edit-produk.php?kdproduk=<?php echo $kdproduk; ?>">
            <div class="form-group">
                <label for="namaProduk">Nama Produk</label>
                <input type="text" class="form-control" name="nm_produk" value="<?php echo $data['nm_produk']; ?>" id="nm_produk">
            </div>
            <div class="form-group">
                <label for="isiBerita">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"><?php echo $data['deskripsi']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" name="harga" value="<?php echo $data['harga']; ?>" id="harga">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="tampil-berita.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
