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

// === IDENTICAL ( same dataType)
// !==
// == same value ()

if ( 4 !== "4"){

    echo "This is NOT identical because of the datatype String vs Int";
    echo "<br>";
} 
if ( 4 == "4"){
    echo "it is even since the value in the string is considered";
}

$number = 34;

switch($number){

case 34:
echo "<br>";
echo "it's 34";
break;

case 32:
echo "it's 32";
break;

case 33:
echo "it's 33";
break;

case 20:
echo "it's 20";
break;

case 25:
echo "it's 25";
break;

default:
    echo "we didnt find anything ";
}
?>
</body>
</html>