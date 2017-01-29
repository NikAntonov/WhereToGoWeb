<?php require "/includes/config.php";

if (!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin']) == false)
{
    header("Location: login.php");
}else
{
    mysqli_query($connection,"DELETE FROM `places`");
    header("Location: login.php");
}



