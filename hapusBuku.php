<?php
    include 'koneksi.php';

    $id_buku = $_GET['id'];
    $sql = "DELETE FROM buku WHERE id='$id_buku'";

    if ($conn->query($sql) === TRUE) {
        echo "Data buku berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: buku.php");
    exit();
?>