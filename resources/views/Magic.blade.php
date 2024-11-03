<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Point Magic Wheel Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column; /* Change to column layout for h2 and p */
      justify-content: center; /* Center content vertically */
      align-items: center; /* Center items horizontally */
      height: 100vh; /* Set height to fill viewport */
      background-color: #f9f9f9;
      margin: 0; /* Remove default margin */
      padding: 20px; /* Add padding to the body */
    }
    
    .container {
      background-color: rgba(128, 128, 128, 0.5);
      border-radius: 8px;
      box-shadow: 0 0 10px black;
      padding: 30px;
      width: 600px; /* Container width */
      margin: 50px auto 0; /* Center horizontally and add space above */
      text-align: left; /* Align text to the left */
    }
    
    .form-group {
      width: 100%; /* Full width */
      margin: 10px 0; /* Space between form groups */
      display: flex; /* Use flexbox */
      align-items: center; /* Align label and input vertically */
      border: 1px solid #ddd; /* Add border to form group */
      border-radius: 4px; /* Match input border radius */
      padding: 10px; /* Padding to match input */
      background-color: white;
    }
    
    label {
      margin-right: 10px; /* Space between label and input */
      white-space: nowrap; /* Prevent label wrapping */
      background-color: white;
      color: black;
    }
    
    input {
      flex-grow: 1; /* Make input fill available space */
      padding: 10px; /* Padding for consistency */
      border: none; /* Remove border from input */
      outline: none; /* Remove outline when focused */
      height: 20px; /* Set height to match label */
      font-size: 20px; /* Match font size of label */
      background-color: white;
      color: black;
    }
    
    #button1 { /* Use ID selector for button */
      width: 100%; /* Make button full width */
      background-color: rgba(128, 128, 128, 0.1); /* Semi-transparent gray */
      color: white; /* Change text color to black */
      border: none;
      padding: 10px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 10px; /* Space above button */
      transition: background-color 0.3s; /* Transition for hover */
    }
    
    #button1:hover {
      background-color: rgba(128, 128, 128, 0.2); /* Slightly darker on hover */
      color: white;
    }

    .result-card {
      margin-top: 20px;
      background-color: white;
      border-radius: 4px; /* Match input border radius */
      padding: 10px; /* Padding to match input */
      text-align: left; /* Align result text left */
      border: 1px solid #ddd; /* Add border to result card */
      width: 100%; /* Full width */
      color: black;
    }
    
    .result {
      font-size: 18px; /* Font size for results */
    }
    
    h2 {
      color: white; /* Set h2 color to white */
      margin: 0; /* Remove margin */
    }
    
    h3 {
      color: white; /* Set h3 color to white */
      margin: 0; /* Remove margin */
    }
    
    p {
      color: white; /* Set p color to white */
      margin: 10px; /* Remove margin */
      margin-top: 20px; /* Add margin top to push text down */
    }
  </style>
</head>
<body>

<h2>Kalkulator Magic Wheel</h2>
<p>Kalkulator Magic Wheel berfungsi untuk mengetahui total </p>
<p>maksimal diamond yang kamu butuhkan untuk mendapatkan skin LEGEND yang  </p>
<p>sangat keren dan menarik.</p>

<div class="container">
    <h3>Masukan Point Magic Wheel Anda</h3>

    <div class="form-group">
      <label for="totalPoints">Point Magic Wheel Anda :</label>
      <input type="number" id="totalPoints" placeholder="100" min="0" required oninput="calculateMagicWheel()">
    </div>
    
    <div class="result-card" id="result-card">
      <div class="result" id="result">Membutuhkan Maksimal: 0 Poin</div>
    </div>

    <button id="button1" onclick="goToMobileLegends()">Klik untuk Membeli Diamond</button>
  </div>

  <script>
    function calculateMagicWheel() {
      const totalPoints = parseFloat(document.getElementById('totalPoints').value);

      if (!isNaN(totalPoints)) {
        let maxRequired;

        if (totalPoints >= 200) {
          maxRequired = 0; // If total points are 200 or more
        } else {
          maxRequired = (200 - totalPoints) * 54; // New calculation
        }

        // Display result
        document.getElementById('result').innerText = `Membutuhkan Maksimal: ${maxRequired} Poin`;
      } else {
        // Keep the result the same if the input is invalid
        document.getElementById('result').innerText = `Membutuhkan Maksimal: 0 Poin`;
      }
    }

    function goToMobileLegends() {
      const button1 = document.getElementById('button1');
      button1.style.backgroundColor = 'navy'; // Change button background to navy
      // Simulate navigation to another page
      window.location.href = 'mobile_legends'; // Replace with appropriate path if needed
    }
  </script>

</body>
</html>
