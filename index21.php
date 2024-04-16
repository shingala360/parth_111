
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<form method="post">
    ENTER FIRST NUMBER:<br>
    <input type="text" name="num1" placeholder="Enter first number" required><br><br>
    ENTER SECOND NUMBER:<br>
    <input type="text" name="num2" placeholder="Enter second number" required><br><br>
    <input type="submit" name="add" value="Addition"><br><br>
    <input type="submit" name="sub" value="Subtraction"><br><br>
    <input type="submit" name="mul" value="Multiplication"><br><br>
    <input type="submit" name="div" value="Divison">
</form>

<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if ($num2 == 0) {
        return "Cannot divide by zero!";
    } else {
        return $num1 / $num2;
    }
}

if (isset($_POST['add'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = add($num1, $num2);
    echo "The result of addition is: " . $result;
} elseif (isset($_POST['sub'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = subtract($num1, $num2);
    echo "The result of subtraction is: " . $result;
} elseif (isset($_POST['mul'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = multiply($num1, $num2);
    echo "The result of multiplication is: " . $result;
} elseif (isset($_POST['div'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = divide($num1, $num2);
    echo "The result of division is: " . $result;
}
?>

</body>
</html>
