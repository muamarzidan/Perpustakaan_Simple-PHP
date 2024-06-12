<?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_buku = $_POST["id_buku"];
        $judul = $_POST["judul"];
        $pengarang = $_POST["pengarang"];
        $id_kategori = $_POST["id_kategori"];

        $sql = "UPDATE buku SET judul='$judul', pengarang='$pengarang', id_kategori='$id_kategori' WHERE id='$id_buku'";

        if ($conn->query($sql) === TRUE) {
            echo "Data buku berhasil diupdate";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        header("Location: buku.php");
        exit();
    }
?>