 <?php
                  echo "<table border=1>
                  <tr>
                  <th>Function Name</th>
                   <th>Output</th>
                    </tr>
                    <tr>
                       <td>define()</td>
                        <td>";
                        define("PI",3.14159);
                        echo "value of PI:". PI;
                        echo "</td></tr>

                     <tr>
                        <td>constant()</td> 
                        <td>";
                        echo "value of PI:". constant("PI");
                        echo "</td>
                     </tr>
                     </table>";
?>                     