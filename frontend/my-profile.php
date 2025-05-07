<?php include 'left-sidebar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Profile</title>
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
    display: flex;
    justify-content: center;  
    align-items: center;      
    padding-left: 280px;      
    box-sizing: border-box;
    }

    .profile-card {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      max-width: 600px;
      margin: auto;
    }

    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .profile-name {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .profile-info {
      font-size: 16px;
      color: #555;
    }

    .edit-btn {
      margin-top: 20px;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .edit-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="page-wrapper">
    <?php include 'header.php'; ?>

    <div class="container">
      <div class="profile-card text-center">
        <img src="../images/profile.jpg" alt="Profile Picture" class="profile-img">
        <div class="profile-name">SL</div>
        <div class="profile-info">Username: SL</div>
        <div class="profile-info">Email: SL@gmail.com</div>
        <div class="profile-info">Role: Eco Guide</div>
        <button class="edit-btn">Edit Profile</button>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
