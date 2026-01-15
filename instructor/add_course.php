<?php 
    require_once '../config/koneksi.php';
    require_once '../backend/instructor/add_course_logic.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Course</title>
  <style>
    * { box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }
    body { margin: 0; background: #f4f6f8; color: #333; }

    header {
      background: #2c7be5;
      color: #fff;
      padding: 20px 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 { margin: 0; font-size: 20px; }
    header a { color: #fff; text-decoration: none; font-weight: bold; }

    .container {
      max-width: 800px;
      margin: 32px auto;
      padding: 0 16px;
    }

    .card {
      background: #fff;
      border-radius: 10px;
      padding: 24px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    }

    .card h2 { margin-top: 0; margin-bottom: 20px; }

    .form-group {
      margin-bottom: 16px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      font-size: 14px;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    textarea { resize: vertical; min-height: 100px; }

    .form-actions {
      display: flex;
      justify-content: space-between;
      margin-top: 24px;
    }

    .btn {
      background: #2c7be5;
      color: #fff;
      padding: 10px 18px;
      border-radius: 6px;
      border: none;
      cursor: pointer;
      font-size: 14px;
      text-decoration: none;
    }

    .btn.secondary {
      background: #6c757d;
    }

    footer {
      text-align: center;
      padding: 20px;
      font-size: 14px;
      color: #777;
    }
  </style>
</head>
<body>

<header>
  <h1>Add New Course</h1>
  <a href="dashboard_instructor.php">Back</a>
</header>

<div class="container">
  <div class="card">
    <h2>Course Information</h2>

    <form action="" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label>Course Name</label>
        <input type="text" name="course_name" required>
      </div>

      <div class="form-group">
        <label>Short Description</label>
        <input type="text" name="short_description" required>
      </div>

      <div class="form-group">
        <label>Description</label>
        <textarea name="description" required></textarea>
      </div>

      <div class="form-group">
        <label>Thumbnail</label>
        <input type="file" name="thumbnail">
      </div>

      <div class="form-group">
        <label>Difficulty</label>
        <select name="difficulty" required>
          <option value="">-- Select --</option>
          <option value="beginner">Beginner</option>
          <option value="intermediate">Intermediate</option>
          <option value="advanced">Advanced</option>
        </select>
      </div>

      <div class="form-group">
        <label>Total Duration (minutes)</label>
        <input type="number" name="total_duration" min="1" required>
      </div>

      <div class="form-actions">
        <a href="dashboard_instructor.php" class="btn secondary">Cancel</a>
        <button type="submit" class="btn">Save Course</button>
      </div>

    </form>
  </div>
</div>

<footer>
  © 2026 E-Learning Platform
</footer>

</body>
</html>
