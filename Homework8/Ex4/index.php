<!DOCTYPE html>
<html>
    <body>
        
        <h1>Homework exercise 4</h1>
        
        <?php
        function sum($a, $b , $c){
            
            $D=($b*$b)-(4*$a*$c); 
            $X=-($b/(2*$a));
            $X1=((-$b+(sqrt(($b*$b)-(4*$a*$c)))/(2*$a)));
            $X2=((-$b-(sqrt(($b*$b)-(4*$a*$c)))/(2*$a)));
            
            if($D<0){
                echo "No real answers" . "<br>";
            }
            
            if($D === 0){
               echo "$X" . "<br>"; 
            }
            
            if($D > 0){
                echo "x1 = $X1, x2 = $X2" . "<br>";
            }
        
            
            return $D;
            
            }
            
        
        echo "D1 = " . sum(6, -4, 1) . "<br>"  . "<br>";
        echo "D2 = " . sum(3, 4, -10) . "<br>" . "<br>";
        echo "D3 = " . sum(8, -10, 4) . "<br>" . "<br>";
        echo "D4 = " . sum(-7, -8, 14) . "<br>" . "<br>";
       
       
        ?>
        
       

        
        
    </body>
    
</html>