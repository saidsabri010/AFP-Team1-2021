<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
      <title>contact</title>
      <link rel="stylesheet" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      <link rel="shortcut icon" type="image/x-icon" href="images.png">
</head>
<body>
    <div class="main">
        <a href="index.php" class="nav">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
        </a>
        <div class="form2">
          <h2>contact Us</h2>
          <form class="f1" action="contact.php" method="POST">  
          <input type="email" name="email" placeholder="Email" required />
            <input type="text" name="subject" placeholder="subject" required />
            <textarea placeholder="Message" name="message" onkeyup="adjust_textarea(this)" reuired></textarea>
            <button name="contact" style="margin-bottom: 13px;" class="btnn"><a href="#"></a>send message</button>
          </form>
        </div>





      </div>

</body>