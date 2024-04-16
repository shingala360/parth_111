<?php

function foo() {
    $num_args = func_num_args();
    
    echo "Number of arguments passed to the function: $num_args<br><br>";
}

foo(1,2,3,4,5,6,7,8,9,10);
?>
