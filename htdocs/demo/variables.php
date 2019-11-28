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

$title= " This is a name variable";
$number = "100.6";
$html = "<h1>HTML h1 in a variable </h1>";

// this concatenates, multiple variables
echo $title . $html. $number;
?>

<h1><?php echo $title ?> </h1>
</body>
</html>