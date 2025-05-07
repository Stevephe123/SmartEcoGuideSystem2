<?php include 'left-sidebar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Learning Space</title>
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

    /* This ensures spacing between header and main content */
    .after-header-space {
      height: 30px;
    }

    .container {
      flex: 1;
      padding: 20px 20px 20px 280px;
      box-sizing: border-box;
    }

    .header {
      background-color: #4CAF50;
      color: white;
      padding: 20px 30px;
      border-radius: 10px;
      margin-bottom: 40px;
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

    .course-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .course-desc {
      font-size: 14px;
      color: #555;
      margin-bottom: 15px;
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
      width: 70%;
    }

    .btn-start {
      padding: 8px 15px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    .btn-start:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="page-wrapper">
    <?php include 'header.php'; ?>

    <!-- Spacer between header and container -->
    <div class="after-header-space"></div>

    <div class="container">
      <div class="header">
        <h1>Welcome to Your Learning Space</h1>
        <p>Continue your journey, explore new topics, and track your achievements.</p>
      </div>

      <div class="courses">
        <div class="course-card">
          <div class="course-title">Introduction to Wildlife</div>
          <div class="course-desc">Learn the basics of ecosystems and animal behavior.</div>
          <div class="progress-bar"><div class="progress-fill" style="width: 50%;"></div></div>
          <button class="btn-start">Continue</button>
        </div>

        <div class="course-card">
          <div class="course-title">Conservation Practices</div>
          <div class="course-desc">Understand conservation strategies and community roles.</div>
          <div class="progress-bar"><div class="progress-fill" style="width: 30%;"></div></div>
          <button class="btn-start">Start</button>
        </div>

        <div class="course-card">
          <div class="course-title">Park Safety and Guidelines</div>
          <div class="course-desc">Know the safety rules and emergency procedures.</div>
          <div class="progress-bar"><div class="progress-fill" style="width: 90%;"></div></div>
          <button class="btn-start">Review</button>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
