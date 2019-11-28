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

$numbers = [30,40,35,34,24];

echo "this is a for loop <br>";
// We can use each value as $number from the array $numbers
foreach ($numbers as $number){

    echo $number . "<br>" ;
}
echo "End of ForLoop <br>";
$pointer = 0;
for($counter = 0 ; $counter < 10; $counter++){

    echo $counter. "<br>";
}

while ( $pointer < 4) {
echo "this will come out 4 times, 0,1,2,3 <br>";
$pointer++;
}


?>
</body>
</html>