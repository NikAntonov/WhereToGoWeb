<?php require "/includes/config.php";

if (!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin']) == false)
{
    header("Location: index.php");
}else
{

    if (isset($_GET['del']))
    {
        $id = $_GET['del'];
        mysqli_query($connection,"DELETE FROM `places` WHERE `id` = '$id'");
        header("Location: index.php");
    }else
    {
        header("Location: index.php");
    }
}
