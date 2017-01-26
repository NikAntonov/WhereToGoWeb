<?php require "/includes/config.php";

    if (!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin']) == false)
    {
        header("Location: index.php");
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
    <link href="media/css/styles.css" rel="stylesheet" type="text/css"/>
    <link href="media/css/media.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<?php include "/includes/header.php";


$place_id = $_GET['id'];

$name = $_POST['name'];
$name_en = $_POST['name_en'];
$name_pl = $_POST['name_pl'];
$name_de = $_POST['name_de'];
$name_lt = $_POST['name_lt'];

$description = $_POST['description'];
$description_en = $_POST['description_en'];
$description_pl = $_POST['description_pl'];
$description_de = $_POST['description_de'];
$description_lt = $_POST['description_lt'];

$country = $_POST['country'];
$country_en = $_POST['country_en'];
$country_pl = $_POST['country_pl'];
$country_de = $_POST['country_de'];
$country_lt = $_POST['country_lt'];

$city = $_POST['city'];
$city_en = $_POST['city_en'];
$city_pl = $_POST['city_pl'];
$city_de = $_POST['city_de'];
$city_lt = $_POST['city_lt'];

$region = $_POST['region'];
$image_url = $_POST['image_url'];
$website_url = $_POST['website_url'];
$x_latLng = $_POST['x_latLng'];
$y_latLng = $_POST['y_latLng'];
$time = $_POST['time'];

    if (isset($_POST['do_edit']))
    {
        mysqli_query($connection, "UPDATE `places` SET `name` = '$name', `name_en` = '$name_en', `name_pl` = '$name_pl', `name_de` = '$name_de', `name_lt` = '$name_lt',`description` = '$description', `description_en` = '$description_en', `description_pl` = '$description_pl', `description_de` = '$description_de', `description_lt` = '$description_lt',`country` = '$country', `country_en` = '$country_en', `country_pl` = '$country_pl', `country_de` = '$country_de', `country_lt` = '$country_lt', `city` = '$city', `city_en` = '$city_en', `city_pl` = '$city_pl', `city_de` = '$city_de', `city_lt` = '$city_lt', `region` = '$region',`image_url` = '$image_url', `website_url` = '$website_url', `x_latLng` = '$x_latLng', `y_latLng` = '$y_latLng', `time` = '$time' WHERE `id` = '$place_id'");
    }
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
<script src="media/js/script.js" type="text/javascript"></script>
</body>
<?php
}

?>
