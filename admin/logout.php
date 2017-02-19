<?php require "includes/config.php";


unset($_SESSION['loggedin']);
header("Location: ../index.php");