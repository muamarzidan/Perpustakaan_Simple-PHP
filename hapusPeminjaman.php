<?php
    include 'koneksi.php';

    $id_peminjaman = $_GET['id'];
    $sql = "DELETE FROM peminjaman WHERE id='$id_peminjaman'";

    if ($conn->query($sql) === TRUE) {
        echo "Data peminjaman berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: peminjaman.php");
    exit();
?>