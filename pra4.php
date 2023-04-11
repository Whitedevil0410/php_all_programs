<!DOCTYPE html>
<html>
<head>
    <title>Car Company Finder</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
   <!--  <h1 style="color:red">ENROLLMENT NUMBER:216090307029</h1>     -->
    <br><h2 style="color:green"><label>Enter the name of the car:</label></h2>
        <input type="text" name="car"><br><br>
        <button type="submit" style='background-color:green'>Submit</button>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $car = $_POST["car"];
        $company = "";

        switch ($car) {
            case "Safari":
            case "Nexon":
            case "Tigor":
            case "Tiago":
                $company = "Tata";
                break;
            case "XUV700":
            case "XUV300":
            case "Bolero":
                $company = "Mahindra";
                break;
            case "i20":
            case "Verna":
            case "Venue":
            case "Creta":
                $company = "Hyundai";
                break;
            case "Swift":
            case "Alto":
            case "Baleno":
            case "Brezza":
                $company = "Suzuki";
                break;
            default:
                echo "Invalid Car name.";
        }

        if (!empty($company)) {
         echo "<br>The Car $car belongs to $company.";
        }
    }
?>

</body>
</html>
