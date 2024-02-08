<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bagian bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tambah Produk</title>
</head>
<body>
    <div class="container">
    <h1 class="display-4">Form Tambah Produk</h1>
    <form method="post" action="simpan-produk.php" enctype="multipart/form-data">
<form>
  <div class="form-group">
    <label for="judul berita">Nama Produk</label>
    <input type="text" class="form-control" name="judul">
  </div>
  
  <div class="form-group">
    <label for="isi berita">Deskripsi</label>
    <textarea class="form-control" name="isi" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="penulis">Harga</label>
    <input type="text" class="form-control" name="penulis">
  </div>
  <div class="form-group">
    <label for="gambar">Upload File Gambar</label>
    <input type="file" class="form-control-file"name="fupload">
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
  <button type="reset" class="btn btn-primary">Batal</button>
</form>
</div>
</body>
</html>