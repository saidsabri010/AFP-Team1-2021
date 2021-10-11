
<?php

// start the session
session_start();

// initialize the db's infos
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="website";
$errors = array();

// connect to db
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// if the user clicks on the register button
if(isset($_POST['register'])){
    // get the user input
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

    // check whether the passwords match of not
    if($password != $confirm_password){
       array_push($errors, "password must match !");
      
    }


    //check if both of the username and password are unique or not
    $query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($db, $query); // mysqli_query method to execute the query 
    $user = mysqli_fetch_assoc($result); // get an assocciative array of the query

    if($user) 
    {
        if($user['username'] === $username){
            array_push($errors, "username already exist !");
        }
        if($user['email'] === $email){
            array_push($errors, "email already exist !");
        }
    }
    //if there are no errors we insert the user to db
    if(count($errors) == 0) {
        // $encrypted_passsword = md5($password);
        $insert = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $insert);
        $_SESSION["username"] = $username;
        $_SESSION['success'] = 'success';
        header("Location: Registration.php");
    }
}
if(isset($_POST['login'])){

    $email=mysqli_real_escape_string($db, $_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);

    $query="SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result=mysqli_query($db,$query);
    if(count($errors)==0)
     {
        if(mysqli_num_rows($result)==1){
            $_SESSION["username"] = $username;
            $_SESSION['success'] = 'success';
            header("Location: profile.php");
        }else{
                array_push($errors, "login failed. wrong password or username");
            }
          
    }
}
?>