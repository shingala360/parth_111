
<html>
<head>
    <title>Addition of Two Numbers</title>
</head>
<body>

<h2>Addition of Two Numbers</h2>

<form method="post">
    <label for="num1">Enter first number:</label><br>
    <input type="number" id="num1" name="num1" required><br><br>

    <label for="num2">Enter second number:</label><br>
    <input type="number" id="num2" name="num2" required><br><br>

    <input type="submit" value="Add">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the numbers from the form
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Perform addition
    $result = $num1 + $num2;

    // Display the result
    echo "<h3>The sum of $num1 and $num2 is: $result</h3>";
}
?>

</body>
</html>

