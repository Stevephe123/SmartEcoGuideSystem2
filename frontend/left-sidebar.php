<?php
if($_SESSION['Userole'] == 'ADMINISTRATOR'){

$userId = $_SESSION['user_id'] ?? null;
$profilePic = "../images/profile.jpg"; // fallback

if ($userId) {
    include 'db_connection.php';
    $stmt = $conn->prepare("SELECT profile_image FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($image);
    if ($stmt->fetch() && !empty($image)) {
        $profilePic = "../images/profile.jpg" . $image;
    }
    $stmt->close();
    $conn->close();
}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
  .sidebar-toggle {
    position: fixed;
    top: 15px;
    left: 15px;
    z-index: 1001;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    background-image: url('<?php echo $profilePic; ?>');
    background-size: cover;
    background-position: center;
    cursor: pointer;
    transition: opacity 0.3s ease;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }

  .sidebar-toggle.hidden {
    opacity: 0;
    pointer-events: none;
  }

  .sidebar {
    position: fixed;
    top: 0;
    left: -260px;
    width: 250px;
    height: 100%;
    background-color: #fff;
    border-right: 1px solid #ddd;
    padding: 20px;
    transition: left 0.3s ease;
    z-index: 1000;
  }

  .sidebar.show {
    left: 0;
  }

  .back-btn {
    display: none;
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 20px;
    background: none;
    border: none;
    cursor: pointer;
  }

  .sidebar.show .back-btn {
    display: block;
  }

  .sidebar a,
  .dropdown-btn {
    display: block;
    color: #333;
    text-decoration: none;
    padding: 10px 15px;
    font-size: 15px;
    border-radius: 6px;
    transition: background 0.3s;
    background: none;
    border: none;
    text-align: left;
  }

  .sidebar a:hover,
  .dropdown-btn:hover {
    background-color: #f2f2f2;
  }

  .dropdown-content {
    display: none;
    padding-left: 20px;
  }

  .active-dropdown .dropdown-content {
    display: block;
  }
</style>

<!-- Profile Circle Toggle Button -->
<button class="sidebar-toggle" id="toggleButton" onclick="toggleSidebar()"></button>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <!-- Back/Close Button -->
  <button class="back-btn" onclick="toggleSidebar()"><i class="fas fa-arrow-left"></i></button>

  <h2><i class="fa fa-leaf"></i> Park Guide</h2>
<!--  <a href="admin.php"><i class="fas fa-chart-line"></i> Dashboard</a>-->

  <button class="dropdown-btn" onclick="toggleDropdown(this)">
    <i class="fa fa-user"></i> My Profile ▾
  </button>
  <div class="dropdown-content">
    <a href="my-profile.php">Update My Profile</a>
    <a href="my-learning.php">My Learning</a>
    <a href="my-badges.php">My Badges & Certificates</a>
  </div>

  <a href="learning-space.php"><i class="fa fa-graduation-cap"></i> Learning Space</a>
  <a href="notification.php"><i class="fas fa-bell"></i> Notification</a>
</div>

<script>
  function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('toggleButton');
    sidebar.classList.toggle('show');
    toggleButton.classList.toggle('hidden');
  }

  function toggleDropdown(button) {
    button.parentElement.classList.toggle("active-dropdown");
  }
</script>
<?php 
}
?>