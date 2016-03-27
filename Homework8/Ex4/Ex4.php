<!DOCTYPE html>
<html>
    <body>
        <?php
        
        function multiply($a,$b,$c){
            $r=$a*$b*$c;
            
            if($r>=0){
                echo '+' . '<br>';
            }
            else{
                echo '-' . '<br>';
            }
        }
        
        echo multiply(5,2,2);
        echo multiply(-2,-2,1);
        echo multiply(-2,4,3);
 
        
        ?>
    </body>
</html>