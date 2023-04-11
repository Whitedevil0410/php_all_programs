
<?php
// function to calculate grade based on marks
function getGrade($marks) {
    if($marks >= 85 && $marks <= 100) {
        return "AA";
    } elseif($marks >= 75 && $marks <= 84) {
        return "AB";
    } elseif($marks >= 65 && $marks <= 74) {
        return "BB";
    } elseif($marks >= 55 && $marks <= 64) {
        return "BC";
    } elseif($marks >= 45 && $marks <= 54) {
        return "CC";
    } elseif($marks >= 40 && $marks <= 44) {
        return "CD";
    } elseif($marks >= 35 && $marks <= 39) {
        return "DD";
    } else {
        return "FF (FAIL)";
    }
}

// check if the form has been submitted
if(isset($_POST['submit'])) {
    // read the marks of each subject
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    
    // calculate the total marks and percentage
    $totalMarks = $sub1 + $sub2 + $sub3 + $sub4;
    $percentage = ($totalMarks / 400) * 100;
    
    // check if the student has passed or failed
    if($sub1 < 35 || $sub2 < 35 || $sub3 < 35 || $sub4 < 35) {
        $result = "FAIL";
    } else {
        $result = "PASS";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <style type="text/css">
    	table,th,td{
    		border: 1px solid black;
    	}
    </style>
</head>
<body>
    
    <center><h1 style=color:green>Result</h1></center>
    <form method="post">
        <label for="sub1">Subject 1:</label>
        <input type="number" name="sub1" required><br><br>
        
        <label for="sub2">Subject 2:</label>
        <input type="number" name="sub2" required><br><br>
        
        <label for="sub3">Subject 3:</label>
        <input type="number" name="sub3" required><br><br>
        
        <label for="sub4">Subject 4:</label>
        <input type="number" name="sub4" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php if(isset($_POST['submit'])): ?>
        <h2>Grade</h2>
        <table>
            <tr>
                <th>Subject</th>
                <th>Mark</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td>Subject 1</td>
                <td><?php echo $sub1; ?></td>
                <td><?php echo getGrade($sub1); ?></td>
            </tr>
            <tr>

                <td>Subject 2</td>
                <td><?php echo $sub2; ?></td>
                <td><?php echo getGrade($sub2); ?></td>
            </tr>
            <tr>
                <td>Subject 3</td>
                <td><?php echo " $sub3"; ?></td>
                <td><?php echo getGrade($sub3); ?></td>
			</tr>
			<tr>
				<td>Subject 4</td>
				<td><?php echo $sub4; ?></td>
				<td><?php echo getGrade($sub4); ?></td>
			</tr>
		</table>
		<br>
		<h2>Result</h2>
		<p>Total marks: <?php echo $totalMarks; ?></p>
		<p>Percentage: <?php echo $percentage; ?>%</p>
		<p>Result: <?php echo $result; ?></p>
	<?php endif; ?>

</body>
</html>
