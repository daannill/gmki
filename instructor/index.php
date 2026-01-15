<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Instructor Dashboard</title>
  <link rel="stylesheet" href="../assets/css/instructor/index.css">
</head>
<body>

<header>
  <h1>Instructor Dashboard</h1>
  <a href="../index.php">back</a>
</header>

<div class="container">

  <!-- Statistik -->
  <div class="stats">
    <div class="stat-card">
      <h3>Total Courses</h3>
      <p>5</p>
    </div>
    <div class="stat-card">
      <h3>Active Courses</h3>
      <p>4</p>
    </div>
    <div class="stat-card">
      <h3>Total Students</h3>
      <p>120</p>
    </div>
    <div class="stat-card">
      <h3>Total Duration</h3>
      <p>425 min</p>
    </div>
  </div>

  <!-- Course Section -->
  <div class="section-header">
    <h2>My Courses</h2>
    <a href="add_course.php" class="btn">+ Add Course</a>
  </div>

  <div class="grid">

    <!-- Course Card -->
    <div class="card">
      <img src="images/si.jpg" alt="Course Thumbnail">
      <div class="card-body">
        <h3>Sistem Informasi Dasar</h3>
        <p>Pengenalan konsep dasar sistem informasi.</p>
        <div class="meta">Beginner • 60 menit</div>
      </div>
      <div class="card-footer">
        <a href="course_edit.php?id=1" class="btn">Edit</a>
        <a href="course_detail.php?id=1" class="btn">Detail</a>
      </div>
    </div>

    <div class="card">
      <img src="images/pemdas.jpg" alt="Course Thumbnail">
      <div class="card-body">
        <h3>Pemrograman Dasar</h3>
        <p>Dasar logika dan algoritma pemrograman.</p>
        <div class="meta">Beginner • 90 menit</div>
      </div>
      <div class="card-footer">
        <a href="#" class="btn">Edit</a>
        <a href="#" class="btn">Detail</a>
      </div>
    </div>

  </div>

</div>

<footer>
  © 2026 E-Learning Platform
</footer>

</body>
</html>