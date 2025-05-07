<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications - Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
        }

        .page-container {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        }   

        .main-content {
        flex-grow: 1; /* This makes the content area grow and fill the available space */
        padding: 30px;
        background-color: #fff;
        }

        footer {
        /* You can add additional styles for your footer if necessary */
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px;
        width: 100%;
        position: relative;
        bottom: 0;
        }

        .notification-page {
            padding: 30px;
            background-color: #fff;
        }

        .notification-page h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .notification-item {
            background-color: #f9f9f9;
            border-left: 5px solid #3c91e6;
            padding: 15px 20px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .notification-item p {
            margin: 0;
            font-size: 16px;
            color: #333;
        }

        .notification-item time {
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="page-container">
        <!-- Header -->
        <?php include 'header.php'; ?>
        <?php include 'left-sidebar.php'; ?>

            <!-- Main Content -->
            <div class="main-content">
                <div class="notification-page">
                    <h1><i class="fas fa-bell"></i> Notifications</h1>

                    <div class="notification-item">
                        <p>New training session available for Park Guides next week.</p>
                        <time>May 6, 2025 - 10:00 AM</time>
                    </div>

                    <div class="notification-item">
                        <p>5 certifications will expire within the next 30 days.</p>
                        <time>May 5, 2025 - 2:15 PM</time>
                    </div>

                    <div class="notification-item">
                        <p>IoT Monitoring reported unusual activity in Semmengoh Wildlife Park.</p>
                        <time>May 3, 2025 - 8:45 PM</time>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
