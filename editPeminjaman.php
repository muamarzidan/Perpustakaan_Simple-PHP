<?php
    include 'koneksi.php';

    $id_peminjaman = $_GET['id'];
    $sql = "SELECT * FROM peminjaman WHERE id = '$id_peminjaman'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
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
    <h1 style="text-align: center;">Edit Peminjaman</h1>
    <nav>
        <a href="peminjaman.php">Kembali ke Data Peminjaman</a>
    </nav>
    <br>
    <form action="prosesEditPeminjaman.php" method="post">
        <input type="hidden" name="id_peminjaman" value="<?php echo $row['id']; ?>">
        <label for="nama_peminjam">Nama Peminjam:</label>
        <input type="text" id="nama_peminjam" name="nama_peminjam" value="<?php echo $row['nama_peminjam']; ?>" required>
        <br><br>
        <label for="buku">Buku:</label>
        <select id="buku" name="id_buku">
            <?php
                $sql = "SELECT * FROM buku";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row_buku = $result->fetch_assoc()) {
                        $selected = $row['id_buku'] == $row_buku['id'] ? "selected" : "";
                        echo "<option value='" . $row_buku['id'] . "' $selected>" . $row_buku['judul'] . "</option>";
                    }
                } else {
                    echo "<option value=''>Tidak ada buku</option>";
                }
            ?>
        </select>
        <br><br>
        <label for="tanggal_peminjaman">Tanggal Peminjaman : </label>
        <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" value="<?php echo $row['tanggal_peminjaman']; ?>" required>
        <br><br>
        <label for="tanggal_pengembalian">Tanggal Pengembalian : </label>
        <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" value="<?php echo $row['tanggal_pengembalian']; ?>" required>
        <br><br>
        <input type="submit" value="Edit Peminjaman">
    </form>
</body>
</html>