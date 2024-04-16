<?php
             echo "<table border=1>
             <tr>
             <th>Function name</th>
             <th>Output</th>
             </tr>
             <tr>
                 <td>fgets()</td>
                 </td>";
                 $file_handle=fopen("samir.txt", "r");
                 $line=fgets ($file_handle);
                 fclose($file_handle);
                 echo"Line read: $line";
                 echo"</td>
             </tr>

           <tr>
            <td>fread()</td>
            </td>";
             $file_handle=fopen("samir.txt", "r");
             $data=fread ($file_handle,10);
             fclose ($file_handle);
             echo"Data read: $line";
             echo"</td>
          </tr>

         <tr>
            <td>fwrite()</td>
            <td>";
            $file_handle=fopen("samir.txt", "w");
            fwrite ($file_handle, "New data appended");
            fclose($file_handle);
            echo "Data written successfully.";
            echo "</td>
            </tr>

        <tr>
           <td>fclose()</td>
           <td>";
           $file_handle=fopen("samir.txt", "r");
           fclose($file_handle);
           echo "file handle closed successfully.";
           echo "</td>
           </tr>
           </table>";
?>  
             
             
                  
       
 
     

    
                   
                  
                   
                                   
                    