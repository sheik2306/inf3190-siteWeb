<?php
 // This will pickup the data , in a post format, et la method "post" cest comme ca
// This is a super GLOBAL, it will receive all the form submits ( becomes an array)

// is the post global is set ? if the type submit is sent , it means formWasSubmitted is sent.

$name = array("Jader","George","Michael");
if (isset($_POST['formWasSubmitted'])){ // if the submit was clicked 
   
$username = $_POST['username'];
$password = $_POST['password'];
    
  
    if(strlen($username) < 5 || strlen($username) > 10 ){ // This is strlen (Length of username)
        echo "<h6> username has to be longer than 5 and shorter than 10 <h6>";

    }

    // echo "your username is " . $username;
    // echo '<br>';
    // echo "your password is " .$password;
    if(!in_array($username,$name)){
        echo "you cannot log in";
    
    }else {
        echo "you can log in";
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post"> 
    <!-- Il faut mettre des noms a a chaque ty[e]  -->
    <input type =" text" placeholder="Enter Username" name="username"> <br>
    <input type ="password" placeholder= " Password" name="password"> <br>
    <!-- we put the name of the submit to verify -->
    <input type ="submit" name="formWasSubmitted"> 


</form>


</body>
</html>