<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $name = $_POST["name"];
            $enrollment = $_POST["enrollment"];
            $age= $_POST["age"];
            $email = $_POST["email"];            
            $phone = $_POST["phone"];
            echo "<h1>Submitted Information</h1>";
            echo "<h2><p><strong>Name:</strong> $name</p></h2>";
            echo "<h2><p><strong>en.no:</strong> $enrollment </p></2>";
            echo "<h2><p><strong>age:</strong> $age</p></h2>";
            echo "<h2><p><strong>Phone Number:</strong> $phone</p></h2>";
            echo "<h2><p><strong>Email:</strong> $email</p></h2>";
        } else {
    ?>
    <!-- <h1 style="color:red"> <center>ENROLLMENT NUMBER:216090307029</center> </h1> -->
    <h1>User Information Form</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="name" style="color:blue">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="name" style="color:blue">enrollment:</label>
        <input type="text" id="enrollment" name="enrollment" required><br><br>
        <label for="name" style="color:blue">age:</label>
        <input type="text" id="age" name="age" required><br><br>    
        <label for="email" style="color:blue">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="phone" style="color:blue">Phone Number:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        <input type="submit" name="submit" value="Submit" style='background-color:green' >
    </form>
    <?php } ?>
</body>
</html>
