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
$numberList = [12,'<h1>arrayInside</h1>',10,10];
$numberArray = [40,30,24,50,22];

echo 56+45;
echo "<br>";
echo 100+23;
echo "<br>";
echo $numberList[0] + $numberList[2];

print_r($numberArray);
echo "<br>";

// This is how to push an element into an array;
array_push($numberArray, 33);

//print an array
print_r($numberArray);

echo $numberList[1];
?>
</body>
</html>