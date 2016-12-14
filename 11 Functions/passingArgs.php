<!--
When an argument is passed to the function as a value, the value of the argument remains unchanged
outside the function. The arguments are prefxed with the dollar ($) sign in the function defnition to
indicate that the argument will be passed by the value.
The argument can be any valid expression, the expression is evaluated, and its value is assigned to the
corresponding variable in the function.
-->

<?php
//Creating a function to calculate the square of a number
function Square($A)
{
//The argument is passed by Value in the function defnition
//using the $ sign.
//Calculating the square of the number
$A=$A*$A;
//Displaying the square of the number
echo $A;
}
//Assigning a value to the variable
$A=5;
//Displaying the text
echo "The square of $A is: ";
//Calling the function
Square($A);
// Creating a function to subtract one variable from another
function subtraction($A,$B)
{//Calculating the difference
$C=$A-$B;
//Displaying the text
echo "<br>The difference of $A and $B is: $C";
}
//Calling the function and assigning values to the argument
subtraction(90,45);
?>