<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUDUL</title>

    <link rel="stylesheet" href="crudBuku.css">
</head>

<body>
    <h1 style="text-align: center;">Tambah Buku</h1>
    <nav>
        <a href="buku.php">Kembali ke Data Buku</a>
    </nav>
    <br>
    <form action="prosesBuku.php" method="post">
        <label for="judul">Judul Buku:</label>
        <input type="text" id="judul" name="judul" required>
        <br><br>
        <label for="pengarang">Pengarang:</label>
        <input type="text" id="pengarang" name="pengarang" required>
        <br><br>
        <label for="kategori">Kategori:</label>
        <select id="kategori" name="id_kategori">
            <?php
            $sql = "SELECT * FROM kategori";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id_kategori'] . "'>" . $row['nama_kategori'] . "</option>";
                }
            } else {
                echo "<option value=''>Tidak ada kategori</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Tambah Buku">
    </form>
</body>

</html>