<?php
    include 'koneksi.php';

    $id_buku = $_GET['id'];
    $sql = "SELECT * FROM buku WHERE id = '$id_buku'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
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
    <h1 style="text-align: center;">Edit Buku</h1>
    <nav>
        <a href="buku.php">Kembali ke Data Buku</a>
    </nav>
    <br>
    <form action="prosesEditBuku.php" method="post">
        <input type="hidden" name="id_buku" value="<?php echo $row['id']; ?>">
        <label for="judul">Judul Buku : </label>
        <input type="text" id="judul" name="judul" value="<?php echo $row['judul']; ?>" required>
        <br><br>
        <label for="pengarang">Pengarang : </label>
        <input type="text" id="pengarang" name="pengarang" value="<?php echo $row['pengarang']; ?>" required>
        <br><br>
        <label for="kategori">Kategori : </label>
        <select id="kategori" name="id_kategori">
            <?php
                $sql = "SELECT * FROM kategori";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row_kategori = $result->fetch_assoc()) {
                        $selected = $row['id_kategori'] == $row_kategori['id_kategori'] ? "selected" : "";
                        echo "<option value='" . $row_kategori['id_kategori'] . "' $selected>" . $row_kategori['nama_kategori'] . "</option>";
                    }
                } else {
                    echo "<option value=''>Tidak ada kategori</option>";
                }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Edit Buku">
    </form>
</body>
</html>