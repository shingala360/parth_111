<?php

function foo() {
    $num_args = func_num_args();
    
    if ($num_args == 0) {
        echo "No arguments passed to the function\n";
    } else {
        echo "Number of arguments passed to the function: $num_args<br><br>";
        for ($i = 0; $i < $num_args; $i++) {
            echo "Argument $i: " . func_get_arg($i) . "<br><br>";
        }
    }
}

foo(1,2,3,4,5,6,7,8,9,10);
?>
