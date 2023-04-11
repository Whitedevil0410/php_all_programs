<html>
<head>
    <title>Net Payment Calculator</title>
</head>
<body>
    <form method="POST">
        <label for="basic_pay">Basic Pay:</label>
        <input type="number" id="basic_pay" name="basic_pay" required><br><br>
        <input type="submit" name="submit" value="Calculate Net Payment">
        <input type="reset" name="reset" value="reset">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $basic_pay = $_POST['basic_pay'];

        $da = 0.5 * $basic_pay;
        $hra = 0.1 * $basic_pay;
        $medical = 0.04 * $basic_pay;

        $gross_salary = $basic_pay + $da + $hra + $medical;

        $insurance = 0.07 * $gross_salary;
        $pf = 0.05 * $gross_salary;

        $deduction = $insurance + $pf;

        $net_salary = $gross_salary - $deduction;

        echo "<br>Net Salary: $net_salary";
    }
    ?>
</body>
</html>
