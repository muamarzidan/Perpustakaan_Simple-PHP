<?php
include 'koneksi.php';

$sql = "SELECT peminjaman.id, peminjaman.nama_peminjam, buku.judul, peminjaman.tanggal_peminjaman, peminjaman.tanggal_pengembalian 
            FROM peminjaman 
            JOIN buku ON peminjaman.id_buku = buku.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUDUL</title>

    <link rel="stylesheet" href="peminjaman.css">
</head>

<body>
    <h1 style="text-align: center;">Data Peminjaman</h1>
    <nav>
        <a href="index.php">Home</a> |
        <a href="tambahPeminjaman.php">Tambah Peminjaman</a>
    </nav>
    <br>

    <?php if ($result->num_rows > 0) : ?>
        <table border="1">
            <tr>
                <th>ID Peminjaman</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["nama_peminjam"]; ?></td>
                    <td><?php echo $row["judul"]; ?></td>
                    <td><?php echo $row["tanggal_peminjaman"]; ?></td>
                    <td><?php echo $row["tanggal_pengembalian"]; ?></td>
                    <td>
                        <a href="editPeminjaman.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="hapusPeminjaman.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus peminjaman ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else : ?>
        <p>Belum ada data peminjaman</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
</body>

</html>