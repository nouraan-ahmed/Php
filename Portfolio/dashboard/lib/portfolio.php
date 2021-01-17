<?php

function AddNewPortfolio($img, $desc, $user_id)
{
    $con = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "INSERT INTO `portfolio` (`img`,`desc`,`user_id`) VALUES ('$img','$desc','$user_id')";
    mysqli_query($con, $query);

    $res = mysqli_affected_rows($con);

    if ($res == 1) {
        return true;
    } else {
        return false;
    }
}


function GetPortfolios()
{
    $arr = [];
    $con = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "SELECT * FROM `userportfolio` ";
    $q = mysqli_query($con, $query);
    while ($res = mysqli_fetch_assoc($q)) {
        $arr[] = $res;
    }
    return $arr;
}


function DeletePortfolio($portfolioid)
{

    $con = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "DELETE FROM `portfolio` WHERE id=$portfolioid";
    mysqli_query($con, $query);

    $res = mysqli_affected_rows($con);

    if ($res == 1) {
        return true;
    } else {
        return false;
    }
}


function GetPortfolioById($id)
{

    $con = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "SELECT * FROM `userportfolio` WHERE `id`=$id ";
    $q = mysqli_query($con, $query);
    $res = mysqli_fetch_assoc($q);
    return $res;
}

function updateportfolio($id, $desc, $img)
{
    $con = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "UPDATE `portfolio` SET `desc`='$desc'";
    if (!empty($img)) {
        $query .= " , `img`='$img'";
    }
    $query .= " WHERE `id`=$id";
    // echo $query;
    // die;
    mysqli_query($con, $query);

    $res = mysqli_affected_rows($con);

    if ($res == 1) {
        return true;
    } else {
        return false;
    }
}
