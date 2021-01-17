<?php
session_start();
require_once 'lib/portfolio.php';

$id = $_GET['portfolioid'];
$res = DeletePortfolio($id);
if ($res == 1) {
    header("LOCATION:allportfolio.php");
} else {
    header("LOCATION:allportfolio.php");
}
