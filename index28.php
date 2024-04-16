<?php
            echo "<table border=1>";
             echo "<tr><th>Function Name</th>
             <th>Output</th></tr>";

               echo "<tr><td>date()</td>
                          <td>". date("Y/m/d"). "</td></tr>"; 

                echo "<tr><td>date()</td>
                          <td>".  date("l"). "</td></tr>"; 
 
                echo "<tr><td>mktime()</td>
                           <td>". mktime(0,0,0,3,14,2024). "</td></tr>"; 

                 echo "<tr><td>checkdate()</td>
                            <td>". (checkdate(2,29,2024)? 'valid':'Invalid'). "</td></tr>"; 

                   echo "</table>";
?> 

           
 
  

