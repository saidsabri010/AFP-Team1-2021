<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="images.png">
    <title>Registration Page</title>
</head>
<body>
    <div class="main">
        <div class="navbar">
              <div class="icon">
                 <h2 class="logo">EkkE</h2>   
              </div>
        </div>

        <div class="menu">
             <ul>
                <li><a href="index.php">HOME</a></li> 
                <li><a href="service.php">SERVICE</a></li>  
                <li><a href="contact.php">CONTACT</a></li>
             </ul> 
        </div>

        <div class="form">
            <h2>Sign Up Here</h2>
            <form action="">
                <input type ="text" name="username" placeholder="Username">
                <input type ="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirm_password" placeholder="Confirm Password">
                <button name=register class="btnn" ><a href="#"></a>Register</button>
            </form>
            <p class="link" >you already have an account<br>
            <a href="Registration.php">Sign in</a> here</a></p>
        </div>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>