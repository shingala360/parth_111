
<html>
<head>
    <title>Factorial Calculation</title>
</head>
<body>

<h2>Factorial Calculation</h2>

<form method="post">
    <label for="number">Enter a number:</label><br>
    <input type="number" id="number" name="number" required><br><br>
    <input type="submit" value="Calculate Factorial">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the number from the form
    $number = $_POST["number"];
    
    // Initialize factorial variable
    $factorial = 1;

    // Calculate factorial iteratively
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }

    // Display the result
    echo "<h3>The factorial of $number is: $factorial</h3>";
}
?>

</body>
</html>

