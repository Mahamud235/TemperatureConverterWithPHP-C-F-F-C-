<?php
//$c = ($f - 32)*5/9 ;
//$f = $c*(9/5)+32 ;
define("OPERATOR1", 5/9);
define("OPERATOR2", 32);

echo " Convert the Value into
                              1. Celcius into Farenhiet 
                              2. Farenhiet into Celcius
";
$choice = (float) readline() ;

switch($choice){
    case 1:
        echo "Enter The Celcius Value to convert: " ;
        $value = (float) readline();
        echo "The Farenhiet Value is ". $value/OPERATOR1+OPERATOR2 ;
break;
    case 2:
        echo "Enter The Farenhiet Value to convert: " ;
        $value = (float) readline();
        echo "The Celcius Value is ". ($value-OPERATOR2)*OPERATOR1 ;
break;
        default:
        echo "Invalid option selected.\n";
        break;
}