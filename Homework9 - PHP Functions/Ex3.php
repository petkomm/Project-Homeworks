<!DOCTYPE html>
<html>
    <body>
        <?php
        
    function fact($n){
            $return = 0 . "\n";
        for ($i=1; $i <= $n; $i++) {
            $return = $return . $i . "\n";
        }
        return $return;
    }

    echo fact(1000) . "\n";
        
        ?>
    </body>
</html>

