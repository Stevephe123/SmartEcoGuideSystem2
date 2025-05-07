<?php include 'left-sidebar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Badges & Certificates</title>
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

    .after-header-space {
      height: 130px;
    }

    .badges {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .badge {
      background: white;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      width: 200px;
    }

    .badge img {
      width: 80px;
      height: auto;
      margin-bottom: 10px;
    }

    .badge-title {
      font-weight: bold;
      margin-top: 10px;
    }

    .download-link {
      display: block;
      margin-top: 10px;
      color: #4CAF50;
      text-decoration: none;
    }

    .download-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="page-wrapper">
    <?php include 'header.php'; ?>

    <div class="container">
      <div class="header">
        <h1>My Badges & Certificates</h1>
        <p>Celebrate your achievements and download your certificates.</p>
      </div>

      <div class="badges">
        <!-- Sample Badge -->
        <div class="badge">
          <img src="../images/Cert1.jpg" alt="Wildlife Explorer Certificate">
          <div class="badge-title">Wildlife Explorer</div>
          <a href="#" class="download-link">Download Certificate</a>
        </div>

        <div class="badge">
          <img src="../images/Cert2.jpg" alt="Conservation Champion Certificate">
          <div class="badge-title">Conservation Champion</div>
          <a href="#" class="download-link">Download Certificate</a>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
