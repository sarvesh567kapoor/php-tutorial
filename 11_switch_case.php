<?php

//  Yes switch case is similar to the if elseif  else  condition


$age = 67;

switch ($age) {
    case '12':
            echo "You are under 18 ";
                break;

    case '22':
            echo "You are above  18 ";
                break;
    
    case '50':
            echo "You age is 50 years";
                break;

    case '67':
            echo "You age is 67 years \n ";
                break;
    default:
            echo "Invalid age";
                break;
}


// what if we don't  use the break statements ( all  case below a true  case will be run if any case is true  )
$water_tank = 12;

switch ($water_tank) {
    case '12':
            echo "water tank is of 12 liters \n";
                

    case '22':
            echo "water tank is of 22 liters \n";
                
    
    case '50':
            echo " water tank is of 50 liters \n";
                

    case '67':
            echo " water tank is of 67 liters \n";
                
    default:
            echo "Invalid water tank \n";
                
}


