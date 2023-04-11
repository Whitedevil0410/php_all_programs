<!DOCTYPE html>
<html>
<head>
  <title>Car Company Lookup</title>
</head>
<body>
 <!--  <h1 style='color:green'>E.No,:-216090307029</h1> -->
  <h1 style='color:green'>Car Company Lookup</h1>
  <form method="POST">
    <label for="car_name" style='color:blue'>Enter the name of the car:</label>
    <input type="text" id="car_name" name="car_name" required>
    <button type="submit" style='background-color:red'>Find Company</button>
  </form>

  <?php
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the value of the car name input
    $car_name = $_POST["car_name"];

    // Define an associative array of car names and company
    $cars = array(
      "Safari" => "Tata",
      "Nexon" => "Tata",
      "Tigor" => "Tata",
      "Tiago" => "Tata",
      "XUV700" => "Mahindra",
      "XUV300" => "Mahindra",
      "Bolero" => "Mahindra",
      "i20" => "Hyundai",
      "Verna" => "Hyundai",
      "Venue" => "Hyundai",
      "Creta" => "Hyundai",
      "Swift" => "Suzuki",
      "Alto" => "Suzuki",
      "Baleno" => "Suzuki",
      "Brezza" => "Suzuki"
    );

    // Look up the company for the given car name
    if (array_key_exists($car_name, $cars)) {
      $company = $cars[$car_name];
      echo "<p>The car '$car_name' belongs to the company '$company'.</p>";
    } else {
      echo "<p>Sorry, we could not find the company for the car '$car_name'.</p>";
    }
  }
  ?>
</body>
</html>
