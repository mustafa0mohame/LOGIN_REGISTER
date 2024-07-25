
<?php
session_start();
    echo "<h1>welcome ".$_SESSION['uname']."</h1>";
    // echo "<a href='home.php'>new page</a><br>";
    echo "<a href='logout.php'><input type=button value = logout name = logout></a>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
   
</head>
<body>
    
</body>
</html>
