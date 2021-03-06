<?php
// Load file koneksi.php
    include "koneksi.php";

    // Ambil Data yang Dikirim dari Form
    $author_name = $_POST['author_name'];

    // Proses simpan ke Database
    $sql = $pdo->prepare("INSERT INTO author(name) VALUES (:name_author)");
    $sql->bindParam(':name_author', $author_name);
    $sql->execute();

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
        header("location: index.php"); // Redirect ke halaman index.php
    } else {
    // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='form_tambah_buku.php'>Kembali Ke Form</a>";
    }
?>
