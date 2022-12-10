<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./hostpage.css">
    <title>Host-Page</title>
</head>
<body>

<?php
define('DB_NAME', 'jcambron3');
define('DB_USER', 'jcambron3');
define('DB_PASSWORD', 'jcambron3');
define('DB_HOST', 'localhost');


function ShowNames(){
    $conn = mysqli_connect(DB_HOST,DB_PASSWORD, DB_USER, DB_NAME);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT id, name FROM Users";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]."<br>";
      }
    } else {
    }
    
    mysqli_close($conn);
    }
ShowNames();
$type= $_POST['name'];
print("New User's id: 3 - $type");
?>

</body>
</html>