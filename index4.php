<html>
<body>
<?php

function Armstrong($number) {
    $a= $number;
    $sum = 0;
    $b = strlen((string)$number);
    
    while ($number > 0) {
        $c = $number % 10;
        $sum += pow($c, $b);
        $number = (int)($number / 10);
    }
    
    return $sum === $a;
}

// Test the function
$number = 407; // Change this number to test different values
if (Armstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}

?>
</body>
</html>