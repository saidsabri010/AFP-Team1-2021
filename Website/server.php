
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
