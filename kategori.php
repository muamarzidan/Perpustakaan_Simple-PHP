<?php
    include 'koneksi.php';

    $sql = "SELECT * FROM kategori";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUDUL</title>

    <link rel="stylesheet" href="kategori.css">
</head>

<body>
    <h1 style="text-align: center;">Data Kategori</h1>
    <nav>
        <a href="index.php">Home</a> |
        <a href="tambahKategori.php">Tambah Kategori</a>
    </nav>
    <br>

    <?php if ($result->num_rows > 0) : ?>
        <table border="1">
            <tr>
                <th>ID Kategori</th>
                <th>Nama Kategori</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row["id_kategori"]; ?></td>
                    <td><?php echo $row["nama_kategori"]; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else : ?>
        <p>Belum ada data kategori</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
</body>

</html>