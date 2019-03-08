<?php
$x = 5;// global scope

function myTest(){
	//using x inside this function will generate an error
	echo "Variable inside the function is: $x";
}

myTest();
echo "<br>";

echo "Variable inside the function is: $x";
?>