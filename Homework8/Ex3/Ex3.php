<!DOCTYPE html>
<html>
    <body>
        <?php
        
        
       function check($p){ 
        switch ($p){
	case 2: echo "yes"; break;
	case 3: echo "yes"; break;
	case 4: echo "yes"; break;
	case 5: echo "yes"; break;
	case 6: echo "yes"; break;
	case 7: echo "yes"; break;
	case 8: echo "yes"; break;
	case 9: echo "yes"; break;
	case 10: echo "yes"; break;
	case 'J': echo "yes"; break;
	case 'Q': echo "yes"; break;
	case 'K': echo "yes"; break;
	case 'A': echo "yes"; break;
	default: echo "no"; break;
            }
       }
        echo check(5) . '<br>';
        echo check(1) . '<br>';
        echo check('Q') . '<br>';
        echo check('q') . '<br>';
        ?>
        
        
    </body>
</html>