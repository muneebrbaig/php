<!--
11.5.4 Returning Values from Functions

A function can also return values. The return statement in a function returns the value from the
function.
The value returned can be an array or an object. The return keyword causes the function to stop
execution and pass the control to the line from which it was invoked.
It is essential to use the reference operator & while declaring a function as well as when assigning the
returned value to the variable. This is required in order to return a reference from a function.

-->

<?php
//Creating a function
function HRA($Basic_Sal)
{
//Calculating the HRA and storing it in a variable
$HRA=0.25*$Basic_Sal;
//Returning the value stored in the variable
return $HRA;
}
//Storing the output of the function in a variable after setting a
//default value
$B=HRA(20000);
//Displaying the text
echo "The HRA is: ";
//Displaying the output
echo $B;
?>
<!--
In the code, the HRA() function returns the house rent allowance, calculated at the rate of 25% of basic
salary. The return $HRA statement returns the HRA calculated in the HRA() function.
--?