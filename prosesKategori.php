<?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_kategori = $_POST["nama_kategori"];

        $sql = "INSERT INTO kategori (nama_kategori) VALUES ('$nama_kategori')";

        if ($conn->query($sql) === TRUE) {
            echo "Kategori baru berhasil ditambahkan";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        header("Location: kategori.php");
        exit();
    }
?>