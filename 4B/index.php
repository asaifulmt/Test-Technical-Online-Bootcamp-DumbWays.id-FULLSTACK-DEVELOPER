<html>
<head>
  <title>Course Online</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Course online</a>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="form_add_course.php">Add Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form_add_author.php">Add Author</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form_add_content.php">Add Content</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row g-4">
      <?php
        include "koneksi.php";

        $sql = $pdo->prepare("SELECT course.id, course.name AS course_name, course.thumbnail, course.description, author.name AS author_name FROM course INNER JOIN author ON course.id_author=author.id;");
        $sql->execute();
        while($data = $sql->fetch()) {
          echo '
            <div class="col-3">
              <div class="card">
                <img src="'.$data['thumbnail'].'" class="card-img-top" style="height:150px;" alt="'.$data['course_name'].'">
                <div class="card-body" style="height: 160px;">
                  <div class="d-flex justify-content-between">
                    <h5 class="card-title">'.$data['course_name'].'</h5>
                    <p>Author: '.$data['author_name'].'</p>
                  </div>
                  <p class="card-text">'.$data['description'].'</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <a href="detail_course.php?id='.$data['id'].'" class="btn btn-primary d-flex justify-content-center">Detail</a>
                  </li>
                </ul>
              </div>
            </div>
          ';
        }
      ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
