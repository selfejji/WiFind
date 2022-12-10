<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Wi-Find</title>
</head>

<body>
    <img class= "logo"src="./images/Wifid-logo.png">
    <input class = "search" placeholder="Search For Another Location">
    <a href="./login.php">Logout</a>

    <div class="row">
    <div class="column">
        <div class="Map">
            <p class="current">Current Location</p>
            <img src="./images/Wi-Find_Map.png" class="img-responsive">
        </div>
    </div>
    
    <div class="column">
        <div class="host-buttons">
            <p class="info">Host Info</p><br>
            <p class="info2">&emsp;Address&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Speed</p>
            <button class="host" onclick="window.location.href = './Host-1.php'">126 Julia St, Oakhurst &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;600 mbps</button> 
            <button class="host" onclick="window.location.href = './Host-2.php'">321 Frost Dr, Oakhurst&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;350 mbps</button> 
            <button class="host" onclick="window.location.href = './Host-3.php'">111 Circle St, Oakhurst&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;400 mbps</button>    
            <button class="host" onclick="window.location.href = './Host-4.php'">123 Streed Rd, Oakhurst&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;450 mbps</button>
            <button class="host" onclick="window.location.href = './Host-5.php'">321 Road St, Oakhurst&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;300 mbps</button>
            <button class="host" onclick="window.location.href = './Host-6.php'">213 Cricle Dr, Oakhurst&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1 Gbps</button>
        </div>
    </div>

</body>
</html>