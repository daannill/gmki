<?php 
  require_once "./config/koneksi.php";
  require_once "./backend/learning_logic.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E-Learning</title>
  <link rel="stylesheet" href="assets/css/learning.css">
</head>
<body>
    <?php
      include "includes/navbar.php";
    ?>

  <header>
    <h1>Selamat Datang di E-Learning</h1>
    <p>Silakan pilih materi pembelajaran yang ingin Anda pelajari</p>
  </header>

  <div class="container">

    <div class="grid">

      <?php while($course = $courses_query->fetch_assoc()) { ?>
        <div class="card">
          <h2><?= $course['course_name'] ?></h2>
          <p><?= $course['short_description'] ?></p>
          <div class="info">⏱ <?= $course['total_duration'] ?> Menit • 📘 <?= $course['difficulty'] ?></div>
          <a href="materi.html" class="btn">Mulai Belajar</a>
        </div>
      <?php } ?>

    </div>

  </div>

  <footer>
    
  </footer>

</body>
</html>
