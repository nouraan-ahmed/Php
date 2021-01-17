<?php

session_start();

$username = "ahmed";
$password = "1234";

if ($username == $_POST['username'] && $password == $_POST['password']) {
    $_SESSION['username'] = $_POST['username'];
    header("LOCATION:home.php");
} else {
    header("LOCATION:index.html");
}
