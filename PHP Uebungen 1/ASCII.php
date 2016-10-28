<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        for($x = 32; $x <= 255; $x++){
            
            for ($i = 1; $i <= 15; $x++){
                echo "&#$x; <br/>";
                $i++;
            }
             echo "--------------- <br/>";
            
        }
        
        
        ?>
    </body>
</html>
