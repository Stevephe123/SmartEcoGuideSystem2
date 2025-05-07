<?php include 'header.php'; ?>
<?php include 'left-sidebar.php'; ?>
<style>
  .survey-container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 30px;
    background: #f2f2f2;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

  .survey-container h2 {
    text-align: center;
    margin-bottom: 30px;
  }

  .survey-container h3 {
    margin-top: 40px;
    margin-bottom: 20px;
    border-bottom: 2px solid #ccc;
    padding-bottom: 6px;
  }

  .form-row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  .form-col {
    flex: 1;
    min-width: 300px;
  }

  .form-col label {
    font-weight: bold;
    display: block;
    margin-top: 10px;
  }

  .form-col input,
  .form-col select,
  .form-col textarea {
    width: 100%;
    padding: 10px;
    margin-top: 6px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 6px;
  }

  .survey-container input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    font-weight: bold;
    border: none;
    padding: 12px 20px;
    cursor: pointer;
    margin-top: 20px;
  }

  .survey-container input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>

<div class="survey-container">
  <h2>Visitor Feedback Survey</h2>
  <form action="submit_survey.php" method="post">

    <!-- Visitor Info -->
    <h3>Visitor Information</h3>
    <div class="form-row">
      <div class="form-col">
        <label>First Name:</label>
        <input type="text" name="first_name" required>
      </div>
      <div class="form-col">
        <label>Last Name:</label>
        <input type="text" name="last_name" required>
      </div>
      <div class="form-col">
        <label>Email:</label>
        <input type="email" name="email" required>
      </div>
      <div class="form-col">
        <label>Phone Number:</label>
        <input type="tel" name="phone">
      </div>
      <div class="form-col">
        <label>Which park or location did you visit?</label>
        <input type="text" name="location" required>
      </div>
      <div class="form-col">
        <label>Date of Visit:</label>
        <input type="date" name="visit_date" required>
      </div>
      <div class="form-col">
        <label>Duration of Visit:</label>
        <select name="visit_duration" required>
          <option value="">--Select--</option>
          <option value="Half-day">Half-day</option>
          <option value="Full-day">Full-day</option>
          <option value="Multiple days">Multiple days</option>
        </select>
      </div>
    </div>

    <!-- Park Guide Section -->
    <h3>Park Guide Rating</h3>
    <div class="form-row">
      <div class="form-col">
        <label>Did you use a certified guide?</label>
        <select name="used_guide" required>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
      </div>
      <div class="form-col">
        <label>Guide's Name:</label>
        <input type="text" name="guide_name">
      </div>
      <div class="form-col">
      <label>Guide Rating:</label>
      <select name="guide_rating">
        <option value="">--Select--</option>
        <option value="Not Satisfied">Not Satisfied</option>
        <option value="Neutral">Neutral</option>
        <option value="Satisfied">Satisfied</option>
        <option value="Very Satisfied">Very Satisfied</option>
        <option value="Excellent">Excellent</option>
      </select>

      </div>
      <div class="form-col">
        <label>Was the guide informative and friendly?</label>
        <select name="guide_friendliness">
          <option value="Yes">Yes</option>
          <option value="Neutral">Neutral</option>
          <option value="No">No</option>
        </select>
      </div>
      <div class="form-col" style="flex-basis: 100%;">
        <label>Comments about the guide:</label>
        <textarea name="guide_comments" rows="3"></textarea>
      </div>
    </div>

    <!-- Visitor Experience -->
    <h3>Visitor Experience</h3>
    <div class="form-row">
      <div class="form-col">
        <label>Cleanliness of the park:</label>
        <select name="cleanliness_rating">
          <option value="">--Select--</option>
          <option value="1">Poor</option>
          <option value="2">Fair</option>
          <option value="3">Good</option>
          <option value="4">Very Good</option>
          <option value="5">Excellent</option>
        </select>
      </div>
      <div class="form-col">
        <label>Was the park easy to navigate?</label>
        <select name="navigation">
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
      </div>
      <div class="form-col">
        <label>Signage boards quality:</label>
        <select name="signage_rating">
          <option value="">--Select--</option>
          <option value="Poor">Poor</option>
          <option value="Fair">Fair</option>
          <option value="Good">Good</option>
          <option value="Excellent">Excellent</option>
        </select>
      </div>
      <div class="form-col" style="flex-basis: 100%;">
        <label>Suggestions for improving park facilities:</label>
        <textarea name="facility_suggestions" rows="3"></textarea>
      </div>
    </div>

    <!-- Website -->
    <h3>Website</h3>
    <div class="form-row">
      <div class="form-col">
        <label>Did you use this website to plan your visit?</label>
        <select name="used_website">
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
      </div>
      <div class="form-col">
        <label>Was it helpful?</label>
        <select name="website_helpful">
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
      </div>
      <div class="form-col" style="flex-basis: 100%;">
        <label>Technical issues or feedback:</label>
        <textarea name="website_feedback" rows="3"></textarea>
      </div>
    </div>

    <!-- Overall -->
    <h3>Overall</h3>
    <div class="form-row">
      <div class="form-col">
        <label>Overall Experience Rating:</label>
        <select name="overall_rating" required>
        <option value="">--Select--</option>
        <option value="Not Satisfied">Not Satisfied</option>
        <option value="Neutral">Neutral</option>
        <option value="Satisfied">Satisfied</option>
        <option value="Very Satisfied">Very Satisfied</option>
        <option value="Excellent">Excellent</option>
        </select>
      </div>
      <div class="form-col">
        <label>Would you recommend us to others?</label>
        <select name="recommend">
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
      </div>
      <div class="form-col" style="flex-basis: 100%;">
        <label>Final comments or suggestions:</label>
        <textarea name="final_comments" rows="3"></textarea>
      </div>
    </div>

  <div class="form-group" style="margin-top: 15px; width: 100%;">
    <div style="display: flex; align-items: flex-start; width: fit-content;">
    <input type="checkbox" id="consent" name="consent" value="Yes" required style="margin-right: 8px; margin-top: 7px;">
        <label for="consent" style="font-weight: bold; white-space: nowrap; margin: 0;">
        I agree my feedback to be used for improvement and reporting purposes.
        </label>
        </div>
    </div>

  <input type="submit" value="Submit Survey">
</form>

</div>

<?php include 'footer.php'; ?>
