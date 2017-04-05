<?php
require_once ("../models/Database.php");
require_once ("../models/Users.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebTop Chat</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="header">
    <div class="right">
        <label><a href="../">Logout</a></label>
    </div>
    <div class="content">
        Welcome : <?php echo($_POST['username']); ?>
    </div>
</div>
</body>
</html>
