
<?php
define('DB_NAME', 'jcambron3');
define('DB_USER', 'jcambron3');
define('DB_PASSWORD', 'jcambron3');
define('DB_HOST', 'localhost');


function InsertName($name){
    $conn = mysqli_connect(DB_HOST,DB_PASSWORD, DB_USER, DB_NAME);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
    $insert="INSERT INTO Users SET name = '$name'";
    $result = $conn->query($insert);

    mysqli_close($conn);
}
if($_POST['name'] != ''){
InsertName($_POST['name']);
}
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

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./timer.css">
    <title>Host-1</title>
</head>
<body>

    </script>
    <a href="./login.php">Logout</a>
    <h1>Address of Wi-Fi: 126 Julia St, Oakhurst</h1>
    <h1>Interent Speed: 600 mbps</h1>

    <div class="timer"></div>
    <script src="./timer.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <br>

<form method="post" action="./hostpage.php">
    <input type="text" name="name" placeholder="Confirm your name"><br>
    <input type ="submit" value="Submit">
</form>


    <p id=here>&nbsp;</p>


</body>
</html>