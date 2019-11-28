<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

function saySomething(){
    echo "Im saying something<br>"; 
}
saySomething();

const testString = 'This is a constant <br> ';


$x="testing" . '<br>';
// 
echo $x . '<br>';

function sumCalculate($number,$number2){
 global $x;  
 $x="global modify";
        echo "The sum of both is " . ($number+$number2);
   
}


echo testString;
sumCalculate(2,3);
echo "<br>";
sumCalculate(6,2);
echo "<br>";

echo $x . "<br>";

function returnAddition($number1,$number2){

$sum = $number1+ $number2;

return $sum;
}

echo "<br>";
echo (returnAddition(3,4)); // Return sum and echo the result

?>

</body>
</html>