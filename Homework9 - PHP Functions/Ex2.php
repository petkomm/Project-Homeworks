<!DOCTYPE html>
<html>
    <body>
        <?php
        
        function maxnumber($a,$b){
            $max=$a;
            if ($b > $a) {
                $max = $b;
            }
            else if ($a === $b) {
                return 'Equals !';
            }

            echo 'Max number is:' . $max;
        }
        
        echo maxnumber(5, 5);
        
        ?>
        
    </body>
</html>
