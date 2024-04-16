
<html>
<head>
    <title>Palindrome Number Checker</title>
</head>
<body>

<h2>Palindrome Number Checker</h2>

<form method="post">
    <label for="number">Enter a number:</label><br>
    <input type="number" id="number" name="number" required><br><br>
    <input type="submit" value="Check">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the number from the form
    $number = $_POST["number"];
    
    // Convert number to string to easily reverse it
    $number_str = (string)$number;
    
    // Get the length of the number
    $length = strlen($number_str);

    // Initialize variables to store the original and reversed numbers
    $original_number = $number_str;
    $reversed_number = '';

    // Reverse the number string
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed_number .= $number_str[$i];
    }

    // Check if the original number and reversed number are equal
    if ($original_number === $reversed_number) {
        echo "<h3>$number is a palindrome number.</h3>";
    } else {
        echo "<h3>$number is not a palindrome number.</h3>";
    }
}
?>

</body>
</html>

