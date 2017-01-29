<?php require "/includes/config.php";

    if (!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin']) == false)
    {
        header("Location: login.php");
    }
    else{
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel</title>

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="../css/styles-admin.css" rel="stylesheet" type="text/css"/>
    <link href="media/css/media.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<?php include "/includes/header.php";


$place_id = $_GET['id'];


?>
<div class="main">
    <div class="container" id="list">

        <?php
        $places = mysqli_query($connection, "SELECT `id`,`name`,`description`,`country` FROM `places` ORDER BY `id` DESC ");
        if (mysqli_num_rows($places) != 0){
        ?>


        <div class="row titles">
            <div id="js" class="col-md-3 id">id</div>
            <div class="col-md-3">Name</div>
            <div class="col-md-3">Description</div>
            <div class="col-md-3">Country</div>
        </div>


        <ul class="list_view">

            <?php

            while ($place = mysqli_fetch_assoc($places)) {
                ?>
                <li id="item">
                    <a href="delete_place.php?del=<?php echo($place['id']) ?>" class="close"
                       aria-hidden="true">&times;</a>
                    <a href="edit_place.php?id=<?php echo $place['id']; ?>">
                        <div class="item_card">

                            <div class="row">
                                <div class="col-md-3 item_id" style="color: #0f0f0f"><?php echo($place['id']) ?></div>
                                <div class="col-md-3" style="color: #0f0f0f"><?php echo $place['name'] ?></div>
                                <div class="col-md-3"
                                     style="color: #0f0f0f"><?php echo mb_substr($place['description'], 0, 50, 'utf-8') ?></div>
                                <div class="col-md-3" style="color: #0f0f0f"><?php echo $place['country'] ?></div>
                            </div>
                        </div>
                    </a>

                </li>
                <?php
            }
            } else {

                echo '<h1>Список пуст</h1>';

            }
            ?>

        </ul>

        <!--    data-toggle="modal" data-target="#edit-modal"      --><?php
        //            include "includes/modal-window.php";
        //
        ?>


    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/script.js" type="text/javascript"></script>

</body>
<?php
}

?>
