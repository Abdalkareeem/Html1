<?php

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY users_id DESC"); 
?>

<html>
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="style2.css">
<head>  
    <title>Homepage</title>
</head>

<body>

    <table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
    <?php  
    while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['email']."</td>";
        echo "<td>".$res['password']."</td>";  
        echo "<td><a href=\"edit.php?name=$res[name]\">Edit</a> | <a href=\"delete.php?name=$res[name]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";       
    }
    ?>
    </table><br><br>
    <a href="add.php" class="btn btn-primary">Add New Data</a>
    <a href="index.php" class="btn btn-primary">Health Center</a>
</body>
</html>