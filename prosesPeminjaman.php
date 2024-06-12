<?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_peminjam = $_POST["nama_peminjam"];
        $id_buku = $_POST["id_buku"];
        $tanggal_peminjaman = $_POST["tanggal_peminjaman"];
        $tanggal_pengembalian = $_POST["tanggal_pengembalian"];

        $sql = "INSERT INTO peminjaman (nama_peminjam, id_buku, tanggal_peminjaman, tanggal_pengembalian) 
                VALUES ('$nama_peminjam', '$id_buku', '$tanggal_peminjaman', '$tanggal_pengembalian')";

        if ($conn->query($sql) === TRUE) {
            echo "Data peminjaman baru berhasil ditambahkan";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        header("Location: peminjaman.php");
        exit();
    }
?>