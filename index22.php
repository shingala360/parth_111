<?php

function foo() {
    $numArgs = func_num_args(); 
    
    echo "Number of arguments passed to foo(): $numArgs<br><br><br>"; 
    
    
    for ($i = 0; $i < $numArgs; $i++) {
        $arg = func_get_arg($i); 
        echo "Argument $i: $arg<br><br><br>"; 
    }
}


foo(1,2,3,4,5,6,7,8,9,10);
?> 
             
