<?php


/* 
Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also.

*/

function evenNumber($startNumber, $endNumber, $step)
{
    echo "===========For Loop Start==========\n\n";
    for ($i = $startNumber; $i <= $endNumber; $i= $i + $step) {

        if ($i % 2 == 0) {

            echo $i;
			if($i<$endNumber){
				echo ", ";
			}elseif($i==$endNumber){
				echo ".";
			}

        }
    }
    
    echo "===========For Loop End==========\n";
}





function evenNumberWhile($startNumber, $endNumber, $step)
{
    
    echo "===========While Loop Start==========\n\n";
    
    $i = $startNumber;
    
    while ($i <= $endNumber) {
        
        if ($i % 2 == 0) {
			
            echo $i+1;
			
            if($i<$endNumber){
				
				echo ", ";
				
			}elseif($i==$endNumber){
				
				echo ".";
				
			}
        }
        
        $i = $i + $step;
        

    }
    
    
    echo "===========While Loop End==========\n";
}



function evenNumberDoWhile($startNumber, $endNumber, $step)
{
	echo "<br/>";
    echo "===========Do While Loop Start==========\n\n";
    
    $i = $startNumber;
    do {
        if ($i % 2 == 0) {
            
            echo $i+1;
            if($i<$endNumber){
				
				echo ", ";
				
			}elseif($i==$endNumber){
				
				echo ".";
				
			}
        }
        $i = $i + $step;
    } while ($i <= $endNumber);

    
    echo "<br/>";
    
    echo "===========Do While Loop End==========\n";
    echo "<br/>";
}

function input($startNumber, $endNumber, $step)
{
    evenNumber($startNumber, $endNumber, $step);
    evenNumberWhile($startNumber, $endNumber, $step);
    evenNumberDoWhile($startNumber, $endNumber, $step);
}

input(1, 20, 2);