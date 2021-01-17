<?php

// session_start();
// if (empty($_SESSION['username'])) {
//     header("LOCATION:index.html");
// } else {
//     echo "welcome home user" . "<br>";
//     echo "<a href='logout.php'>LOGOUT</a>";

// }


$c = mysqli_connect("localhost", "root", "", "login");
$username = $_POST['username'];
$pass = $_POST['password'];
$q = "INSERT INTO `users` (`username`,`password`) VALUES ('$username','$pass')";
mysqli_query($c, $q);
