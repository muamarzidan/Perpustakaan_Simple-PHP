<?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $judul = $_POST["judul"];
        $pengarang = $_POST["pengarang"];
        $id_kategori = $_POST["id_kategori"];

        $sql = "INSERT INTO buku (judul, pengarang, id_kategori) VALUES ('$judul', '$pengarang', '$id_kategori')";

        if ($conn->query($sql) === TRUE) {
            echo "Buku baru berhasil ditambahkan";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        header("Location: buku.php");
        exit();
    }
?>