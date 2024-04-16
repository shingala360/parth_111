<html>
<body>
<?php

// Function to reverse the digits of a number
function reverse($num) {
    // Convert number to string
    $numStr = (string)$num;
    
    // Reverse the string
    $Str = strrev($numStr);
    
    // Convert the reversed string back to an integer
    $reverse= (int)$Str;
    
    return $reverse;
}

// Test the function
$number =12345;
$a= reverse($number);
echo "Original Number: $number.<br>";
echo "Reversed Number: $a.<br>";
?>
</body>
</html>