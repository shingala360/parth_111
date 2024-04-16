<?php
             $array=array(10,20,30,40,50);
             echo "<table border=1>";
             echo "<tr><th>Function Name</th>
             <th>Output</th></tr>";
                
               echo "<tr><td>current()</td>  
                         <td>". current($array). "</td></tr>";

                echo "<tr><td>next()</td> 
                         <td>". next($array). "</td></tr>";

                 echo "<tr><td>prev()</td>
                           <td>". prev($array). "</td></tr>"; 

                 echo "<tr><td>count()</td>
                          <td>". count($array). "</td></tr>";

                 echo "</table>";  
?>        
  
           