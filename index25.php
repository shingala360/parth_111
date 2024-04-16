<?php

$var1 = 10;
$var2 = "Hello";
$var3 = 3.14;
$var4 = null;
$var5 = array(1, 2, 3);

echo "Type of \$var1: " . gettype($var1) . "<br>";
echo "Type of \$var2: " . gettype($var2) . "<br>";
echo "Type of \$var3: " . gettype($var3) . "<br>";
echo "Type of \$var4: " . gettype($var4) . "<br>";
echo "Type of \$var5: " . gettype($var5) . "<br>";

echo "Is \$var1 set? " . (isset($var1) ? 'Yes' : 'No') . "<br>";
echo "Is \$var4 set? " . (isset($var4) ? 'Yes' : 'No') . "<br>";

unset($var1);
echo "Is \$var1 set after unset()? " . (isset($var1) ? 'Yes' : 'No') . "<br>";

$strValue = "10";
$floatValue = 3.14;
$intValue = 5;

echo "String to integer conversion: " . intval($strValue) . "<br>";
echo "Float to integer conversion: " . intval($floatValue) . "<br>";
echo "String to float conversion: " . floatval($strValue) . "<br>";
echo "Integer to float conversion: " . floatval($intValue) . "<br>";
echo "Integer to string conversion: " . strval($intValue) . "<br>";
echo "Float to string conversion: " . strval($floatValue) . "<br>";

echo "Printing array \$var5 using print_r():";
print_r($var5);
?>