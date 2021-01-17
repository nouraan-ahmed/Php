<?php

function AddNewUser($name, $email, $password)
{

    $con = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "INSERT INTO `user` (`name`,`email`,`password`) VALUES ('$name','$email','$password') ";
    mysqli_query($con, $query);

    $res = mysqli_affected_rows($con);

    if ($res == 1) {
        return true;
    } else {
        return false;
    }
}


function login($email, $password)
{
    $con = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "SELECT * FROM `user` WHERE `email`='$email'&&`password`='$password'";
    $q = mysqli_query($con, $query);
    $res = mysqli_fetch_assoc($q);
    return $res;
}
