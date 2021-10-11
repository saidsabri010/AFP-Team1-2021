<?php include('server.php') ?>
<?php
if(!isset($_SESSION['success'])){
    $_SESSION['message'] = "you must login first";
    header('location:Registration.php');
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:Registration.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil</title>
</head>
<body>
    <p>Hello World</p>
    <a href="profile.php?logout='1'">logout</a>
    
</body>
</html>