<!--
11.5.3 Setting Default Values

You can also assign default values to the arguments. The default values for the argument must be
assigned in the function defnition. The function would process only the default value, when a default
value is defned for the argument in the function defnition.
PHP enables to assign default values to an argument in a function. The default values enable the developer
to initialize the function parameters when the function is invoked without any value being passed. The
default value assigned can be any one of the following:
*- Constant
*- Scalar
*- Array with scalar values or constant
-->

<?php	
function increment(&$num, $increment = 1)
{
$num += $increment;
}
$num = 4;
increment($num);
increment($num, 3);
?>

<!--

In the code, $num is incremented by 8. Initially $num is incremented by 1 because the default increment
is defned as 1. The variable $num is then incremented by 4

-->