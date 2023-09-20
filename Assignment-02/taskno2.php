<?php

/* 

Task 2: Skip Multiples of 5
Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
loop encounters a multiple of 5, it should skip that number using the continue statement and
continue to the next iteration.

*/

function allNumber($startPoint, $endPoint, $condition)
{
    echo "===========For Loop Start==========\n\n";
    
    for ($i = $startPoint; $i <= $endPoint; $i++) {
        
        if($i % $condition != 0){
            
			echo $i;
			
			if($i<$endNumber){
				
				echo ", ";
				
			}elseif($i==$endNumber){
				
				echo ".";
				
			}
        }else{
			continue;
		}

    }
    
	echo "<br/>";
	
    echo "===========For Loop End==========\n";
}

function input($startPoint, $endPoint, $condition)
{
    allNumber($startPoint, $endPoint, $condition);
}

input(1, 50, 5);