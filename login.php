<?php
    $host = "localhost";
    $user="jcambron3";
    $password="jcambron3";
    $db="jcambron3";

    $data=mysqli_connect($host,$user,$password,$db);
    if($data===false){
        die("connection error");
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST["username"];
        $password=$_POST["password"];

        $sql="select * from login where username = '".$username."'AND password='".$password."'";
        
        $result=mysqli_query($data,$sql);

        $row=mysqli_fetch_array($result);
        
        if($row["usertype"]=="user"){
            header("location:homepage.php");
        }
        elseif($row["usertype"]=="admin"){
            header("location:hostpage.php");
        }
        else{
            echo"invalid credentials, try again!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>
<body>
    <img src="./images/Wifid-logo.png">
    
    <form action="#" method="post">
    <div>
        
        <input name="username" type="text" class = "email" placeholder="Username" required><br>
    </div>
    <div>
       
        <input name="password" type="password" class = "password" placeholder="Password" required><br>
    </div>
    
    <input class="submit" type="submit" value="Login">
    
    </form>
</body>
</html>

