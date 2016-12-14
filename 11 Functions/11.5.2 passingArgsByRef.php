<!--
11.5.2 Passing Argument by Reference

Values can be passed to the argument by reference. When a value is passed by reference to the argument,
the value of the argument changes outside the function. While defning a function, prefx the arguments
with the ampersand (&) sign to indicate that the value is passed by reference.
When you pass an argument to a function by reference, the argument must be a variable. When you
modify the value of the variable within a function, the instance of the variable outside the function is also
modifed. You must pass arguments to a function by reference in order to enable the function to modify
the argument. The ampersand (&) symbol is prefxed to the argument name in the function defnition in
order to pass an argument to the function by reference.
-->

<?php
//Defning a function and passing value to the arguments by reference
function Square(&$A)
{
//Calculating the square of the number and storing it in a variable
$A=$A*$A;
//Displaying the result
echo $A;
}
//Assigning value outside the function
$A=5;
//Displaying text
echo "The square of $A is: ";
//Executing the function by passing value to argument by reference
Square($A);
//Defning a function and passing value to the arguments by reference
function multiplication(&$A,&$B)
{
//Calculating the multiplication of two numbers and storing it in a
//variable
$C=$A*$B;
//Displaying text
echo "<br><br>The multiplication of $A and $B is: $C";
}
//Assigning value outside the function
$A=25;
$B=30;
//Executing the function by passing value to argument by reference
multiplication($A,$B);
?>

<!--
In the code, the value has been passed to the argument by reference. When the variable $A is passed
to the Square() function, it multiplies $A with $A and stores the resultant value in the same variable.
Hence, the output displayed is 25. In addition, when the value of $A is displayed outside the function,
the output will be 25. This is because the execution of function changes the value of the variable even
outside the function.
Two arguments are passed to the function multiplication(). The multiplication() function
calculates the product of two variable $A and $B and stores the value in $C.

-->