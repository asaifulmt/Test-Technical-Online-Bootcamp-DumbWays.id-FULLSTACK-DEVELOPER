<?php
// Load file koneksi.php
    include "koneksi.php";

    // Ambil Data yang Dikirim dari Form
    $course_name = $_POST['course_name'];
    $thumbnail = $_POST['thumbnail'];
    $author = $_POST['author'];
    $duration = $_POST['duration'];
    $description = $_POST['description'];

    // Proses simpan ke Database
    $sql = $pdo->prepare("INSERT INTO course(name, thumbnail, id_author, duration, description)
        VALUES(:name,:thumbnail,:id_author,:duration, :description)");
    $sql->bindParam(':name', $course_name);
    $sql->bindParam(':thumbnail', $thumbnail);
    $sql->bindParam(':id_author', $author);
    $sql->bindParam(':duration', $duration);
    $sql->bindParam(':description', $description);
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