<?php include 'header.php'; ?>
<style>
  .submitted-container {
    max-width: 900px;
    margin: 50px auto;
    padding: 30px;
    background-color: #eafaf1;
    border-radius: 10px;
    border: 1px solid #c8e6c9;
    box-shadow: 0 0 10px rgba(0,0,0,0.08);
  }

  .submitted-container h2 {
    text-align: center;
    color: #2e7d32;
    margin-bottom: 30px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  table td {
    padding: 12px 10px;
    vertical-align: top;
  }

  table td.label {
    font-weight: bold;
    width: 35%;
    background-color: #f0f9f3;
    border-right: 1px solid #ccc;
  }

  table td.value {
    background-color: #fff;
  }
</style>

<div class="submitted-container">
  <h2>Thank You for Your Feedback!</h2>
  <p>Your submission has been recorded as follows:</p>

  <table>
    <?php
    // Helper function to safely get POST data
    function get_value($key) {
        return isset($_POST[$key]) ? htmlspecialchars($_POST[$key]) : '<i>Not provided</i>';
    }

    $fields = [
      "First Name" => "first_name",
      "Last Name" => "last_name",
      "Email" => "email",
      "Phone Number" => "phone",
      "Park or Location" => "location",
      "Date of Visit" => "visit_date",
      "Duration of Visit" => "visit_duration",
      "Used a Certified Guide" => "used_guide",
      "Guide's Name" => "guide_name",
      "Guide Rating" => "guide_rating",
      "Guide Friendliness" => "guide_friendliness",
      "Guide Comments" => "guide_comments",
      "Cleanliness Rating" => "cleanliness_rating",
      "Park Navigation" => "navigation",
      "Signage Quality" => "signage_rating",
      "Facility Suggestions" => "facility_suggestions",
      "Used Website" => "used_website",
      "Website Helpful" => "website_helpful",
      "Website Feedback" => "website_feedback",
      "Overall Experience" => "overall_rating",
      "Would Recommend" => "recommend",
      "Final Comments" => "final_comments",
      "Consent Given" => "consent"
    ];

    foreach ($fields as $label => $key) {
      echo "<tr>";
      echo "<td class='label'>{$label}</td>";
      echo "<td class='value'>" . get_value($key) . "</td>";
      echo "</tr>";
    }
    ?>
  </table>
</div>

<?php include 'footer.php'; ?>
