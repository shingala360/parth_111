<html>
<body>
<?php

// Function to swap the values of two variables
function swap(&$num1, &$num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}

// Test the function
$a = 50;
$b= 70;

echo "Before swapping:<br>";
echo "A: $a<br>";
echo "B: $b<br>";

// Call the swap function
swap($a, $b);

echo "After swapping:<br>";
echo "A: $a<br>";
echo "B: $b<br>";
?>
</body>
</html>
