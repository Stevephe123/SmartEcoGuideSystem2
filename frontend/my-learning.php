<?php include 'left-sidebar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Learning</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }

    .page-wrapper {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .container {
    flex: 1;
    padding: 20px 20px 20px 280px;
    margin-top: 120px; /* Add this line to create a gap */
    box-sizing: border-box;
    }

    .header {
      background-color: #4CAF50;
      color: white;
      padding: 20px 30px;
      border-radius: 10px;
      margin-bottom: 40px;
      margin-top: 40px;
    }

    .header h1 {
      margin: 0;
      font-size: 28px;
    }

    .courses {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
    }

    .course-card {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      transition: transform 0.2s;
    }

    .course-card:hover {
      transform: translateY(-5px);
    }

    .progress-bar {
      height: 8px;
      background: #e0e0e0;
      border-radius: 4px;
      overflow: hidden;
      margin-bottom: 10px;
    }

    .progress-fill {
      height: 100%;
      background-color: #4CAF50;
    }

    .btn-start {
      padding: 8px 15px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-start:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="page-wrapper">
    <?php include 'header.php'; ?>

    <div class="container">
      <div class="header">
        <h1>My Learning</h1>
        <p>Track your progress and continue your learning journey.</p>
      </div>

      <div class="courses">
        <!-- Sample Courses -->
        <div class="course-card">
          <h3>Introduction to Wildlife</h3>
          <p>Learn the basics of ecosystems and animal behavior.</p>
          <div class="progress-bar"><div class="progress-fill" style="width: 60%;"></div></div>
          <button class="btn-start">Continue</button>
        </div>

        <div class="course-card">
          <h3>Conservation Practices</h3>
          <p>Understand conservation strategies and community roles.</p>
          <div class="progress-bar"><div class="progress-fill" style="width: 40%;"></div></div>
          <button class="btn-start">Start</button>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
