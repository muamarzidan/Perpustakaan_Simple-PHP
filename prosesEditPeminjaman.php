<?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_peminjaman = $_POST["id_peminjaman"];
        $nama_peminjam = $_POST["nama_peminjam"];
        $id_buku = $_POST["id_buku"];
        $tanggal_peminjaman = $_POST["tanggal_peminjaman"];
        $tanggal_pengembalian = $_POST["tanggal_pengembalian"];

        $sql = "UPDATE peminjaman SET nama_peminjam='$nama_peminjam', id_buku='$id_buku', 
                tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian' 
                WHERE id='$id_peminjaman'";

        if ($conn->query($sql) === TRUE) {
            echo "Data peminjaman berhasil diupdate";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        header("Location: peminjaman.php");
        exit();
    }
?>