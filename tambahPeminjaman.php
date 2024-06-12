<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUDUL</title>

    <link rel="stylesheet" href="crudPeminjaman.css">
</head>
<body>
    <h1 style="text-align: center;">Tambah Peminjaman</h1>
    <nav>
        <a href="peminjaman.php">Kembali ke Data Peminjaman</a>
    </nav>
    <br>
    <form action="prosesPeminjaman.php" method="post">
        <label for="nama_peminjam">Nama Peminjam:</label>
        <input type="text" id="nama_peminjam" name="nama_peminjam" required>
        <br><br>
        <label for="buku">Buku:</label>
        <select id="buku" name="id_buku">
            <?php
                $sql = "SELECT * FROM buku";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . $row['judul'] . "</option>";
                    }
                } else {
                    echo "<option value=''>Tidak ada buku</option>";
                }
            ?>
        </select>
        <br><br>
        <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
        <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" required>
        <br><br>
        <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
        <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" required>
        <br><br>
        <input type="submit" value="Tambah Peminjaman">
    </form>
</body>
</html>
