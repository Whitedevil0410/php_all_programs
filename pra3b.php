<!DOCTYPE html>
<html>
<head>
	<title>Salary Calculator</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!-- <h1 style="color:green">ENROLLMENT NUMBER:216090307029</h1> -->
		 <h2 style='color:blue'><label for="salary">Enter Basic Salary:</label></h2>
		<input type="number" id="salary" name="salary" required><br><br>
		<input type="submit" style='background-color:red' value="Calculate Net Salary" >
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// get the basic salary from user input
		$basic_salary = $_POST['salary'];

		// calculate the gross salary components
		$da = 0.5 * $basic_salary;
		$hra = 0.1 * $basic_salary;
		$medical = 0.04 * $basic_salary;
		$gross_salary = $basic_salary + $da + $hra + $medical;

		// calculate the deduction components
		$insurance = 0.07 * $gross_salary;
		$pf = 0.05 * $gross_salary;
		$deduction = $insurance + $pf;

		// calculate the net salary
		$net_salary = $gross_salary - $deduction;

		// display the results
		echo "<br>Basic Salary: " . $basic_salary . "<br>";
		echo "Dearness Allowance (DA): " . $da . "<br>";
		echo "House Rent Allowance (HRA): " . $hra . "<br>";
		echo "Medical: " . $medical . "<br>";
		echo "Gross Salary: " . $gross_salary . "<br>";
		echo "Insurance: " . $insurance . "<br>";
		echo "Provident Fund (PF): " . $pf . "<br>";
		echo "Deduction: " . $deduction . "<br>";
		echo "<b>Net Salary: " . $net_salary . "</b>";
	}
	?>
</body>
</html>
