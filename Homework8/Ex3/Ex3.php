<!DOCTYPE html>
<html>
    <body>
        <?php
        
        
       function check($p){ 
        switch ($p){
	case 2:
	case 3: 
	case 4: 
	case 5: 
	case 6: 
	case 7: 
	case 8: 
	case 9: 
	case 10:
	case 'J':
	case 'Q':
	case 'K':
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