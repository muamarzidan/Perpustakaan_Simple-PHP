<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUDUL</title>

    <link rel="stylesheet" href="crudKategori.css">
</head>

<body>
    <h1 style="text-align: center;">Tambah Kategori</h1>
    <nav>
        <a href="kategori.php">Kembali ke Data Kategori</a>
    </nav>
    <br>
    <form action="prosesKategori.php" method="post">
        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" id="nama_kategori" name="nama_kategori" required>
        <br><br>
        <input type="submit" value="Tambah Kategori">
    </form>
</body>

</html>