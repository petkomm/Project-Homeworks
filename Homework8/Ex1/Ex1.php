<!DOCTYPE html>
<html>
    <body>
        <?php
       
        function compare($a,$b){
            if($a>=$b){
                echo "Result is: $a,$b";
            }
            else {
                echo "Result is: $b,$a";
            }
        }
        
        echo compare(5,2) . "<br>";
        echo compare(3,4) . "<br>";
        echo compare(5.5,4.5) . "<br>";
        
        
        ?>
        
        
    </body>
</html>
    
    
    
   
