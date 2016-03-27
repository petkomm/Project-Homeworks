<!DOCTYPE html>
<html>
    <body>
        <?php
        
        function submit($s){
       
        if($s>=0 && $s<=3){
        echo 'Result= ' . $s*10;
        
        }
           else if($s>=4 && $s<=6){
            echo 'Result= ' . $s*15;
            
        }
           else if($s>=7 && $s<=9){
            echo 'Result= ' . $s*20;
                
        }
           else if($s>=10){
            echo 'Result= ' . $s*100;
        }
        else{
                echo 'Invalid score';
            }
        
        }
        echo  submit(2) . '<br>';
        echo  submit(4) . '<br>';
        echo  submit(9) . '<br>';
        echo  submit(-1) . '<br>';
        ?>
        
        
    </body>
</html>