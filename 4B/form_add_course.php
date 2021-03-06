<html>
<head>
  <title>Course Online</title>
</head>
<body>
  <h1>Tambah Data Course</h1>
  <form method="post" action="proses_save_course.php">
    <table cellpadding="8">
      <tr>
        <td>Course Name</td>
        <td><input type="text" name="course_name"></td>
      </tr>
      <tr>
        <td>Image thumbnail URL</td>
        <td><input type="text" name="thumbnail"></td>
      </tr>
      <tr>
        <td>Nama Author</td>
        <td><select name="author">
        <!-- <td><input type="text" name="category_id"></td> -->
        <?php
            include "koneksi.php";

            // Buat query untuk menampilkan semua data siswa
            $sql = $pdo->prepare("SELECT * FROM author");
            $sql->execute(); // Eksekusi querynya

            while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
                echo "<option value=".$data['id'].">".$data['name']."</option>";
            }
        ?>
        </td>
      </tr>
      <tr>
        <td>Duration</td>
        <td><input type="text" name="duration"></td>
      </tr>
      <tr>
        <td>Description</td>
        <td><textarea name="description" style="width:200px; height:80px;"></textarea></td>
      </tr>
    </table>

    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>