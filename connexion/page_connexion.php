<?php
require('../includes/database.inc.php');

require('login_exec.php');

require('../inscription.php');

//require('../inscription.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profil de <?php echo $_SESSION['username']; ?>
    <p>Pseudo: <?php echo $_SESSION['username']; ?>
    <p> Mail : </p>
</body>
</html>