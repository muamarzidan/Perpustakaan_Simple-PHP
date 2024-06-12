<?php
    include 'koneksi.php';

    $sql = "SELECT buku.id, buku.judul, buku.pengarang, kategori.nama_kategori 
            FROM buku 
            JOIN kategori 
            ON buku.id_kategori = kategori.id_kategori";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUDUL</title>

    <link rel="stylesheet" href="buku.css">
</head>

<body>
    <h1 style="text-align: center" ;>Data Buku</h1>
    <nav>
        <a href="index.php">Home</a> |
        <a href="tambahBuku.php">Tambah Buku</a>
    </nav>
    <br>

    <?php if ($result->num_rows > 0) : ?>
        <table border="1">
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["judul"]; ?></td>
                    <td><?php echo $row["pengarang"]; ?></td>
                    <td><?php echo $row["nama_kategori"]; ?></td>
                    <td>
                        <a href="editBuku.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="hapusBuku.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else : ?>
        <p>Belum ada data buku</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
</body>

</html>