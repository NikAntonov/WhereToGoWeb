<?php require "includes/config.php";


if (!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin']) == false) {
    header("Location: login.php");
}


$place_id = $_GET['id'];

$place = mysqli_query($connection, "SELECT * FROM `places` WHERE `id` = " . (int)$place_id);
$place_edit = mysqli_fetch_assoc($place);

$name = $_POST['name'];
$name_en = $_POST['name_en'];
$name_pl = $_POST['name_pl'];
$name_de = $_POST['name_de'];
$name_lt = $_POST['name_lt'];

$type = $_POST['type_add'];

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

if (isset($_POST['do_edit'])) {
    mysqli_query($connection, "UPDATE `places` SET `name` = '$name', `name_en` = '$name_en', `name_pl` = '$name_pl', `name_de` = '$name_de', `name_lt` = '$name_lt', `type` = '$type',
                                  `description` = '$description', `description_en` = '$description_en', `description_pl` = '$description_pl', `description_de` = '$description_de', `description_lt` = '$description_lt',
                                  `country` = '$country', `country_en` = '$country_en', `country_pl` = '$country_pl', `country_de` = '$country_de', `country_lt` = '$country_lt', 
                                  `city` = '$city', `city_en` = '$city_en', `city_pl` = '$city_pl', `city_de` = '$city_de', `city_lt` = '$city_lt', 
                                  `region` = '$region',`image_url` = '$image_url', `website_url` = '$website_url', `x_latLng` = '$x_latLng', `y_latLng` = '$y_latLng', `time` = '$time' 
                                  WHERE `id` = '$place_id'");

    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $place_edit['name']; ?></title>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="../css/styles-admin.css" rel="stylesheet" type="text/css"/>
    <link href="media/css/media.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
include "includes/header.php";
?>
<div class="main">
    <div class="container padding">
        <form class="well form-horizontal item_card nohover" action="edit_place.php?id=<?php echo $place_id; ?>"
              method="POST" id="edit_form">
            <fieldset>

                <!-- Form Name -->
                <legend class="form_title">Редактировать место</legend>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="name" placeholder="Name" class="form-control" type="text"
                                   value="<?php echo $place_edit['name']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Name_EN</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="name_en" placeholder="Name" class="form-control" type="text"
                                   value="<?php echo $place_edit['name_en']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Name_PL</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="name_pl" placeholder="Name_PL" class="form-control" type="text"
                                   value="<?php echo $place_edit['name_pl']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Name_DE</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="name_de" placeholder="Name_DE" class="form-control" type="text"
                                   value="<?php echo $place_edit['name_de']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Name_LT</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="name_lt" placeholder="Name_LT" class="form-control" type="text"
                                   value="<?php echo $place_edit['name_lt']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Type</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <!--                                <input name="type_add" placeholder="Type" class="form-control" type="text">-->
                            <select name="type_add" class="form-control" title="Не выбрано...">
                                <?php
                                $types = mysqli_query($connection, "SELECT * FROM `types`");
                                while ($typess = mysqli_fetch_assoc($types)){
                                    ?>
                                    <option <?php if ($place_edit['type'] == $typess['name']) echo ' selected '?> ><?php echo $typess['name']; ?></option>
                                 <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>


                <!-- Text area -->

                <div class="form-group">
                    <label class="col-md-4 control-label">Description</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="description"
                                      placeholder="Description"><?php echo $place_edit['description']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Description_EN</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="description_en"
                                      placeholder="Description_EN"><?php echo $place_edit['description_en']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Description_PL</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="description_pl"
                                      placeholder="Description_PL"><?php echo $place_edit['description_pl']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Description_DE</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="description_de"
                                      placeholder="Description_DE"><?php echo $place_edit['description_de']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Description_LT</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="description_lt"
                                      placeholder="Description_LT"><?php echo $place_edit['description_lt']; ?></textarea>
                        </div>
                    </div>
                </div>
                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Country</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="country" placeholder="Country" class="form-control" type="text"
                                   value="<?php echo $place_edit['country']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Country_EN</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="country_en" placeholder="Country_EN" class="form-control" type="text"
                                   value="<?php echo $place_edit['country_en']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Country_PL</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="country_pl" placeholder="Country_PL" class="form-control" type="text"
                                   value="<?php echo $place_edit['country_pl']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Country_DE</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="country_de" placeholder="Country_DE" class="form-control" type="text"
                                   value="<?php echo $place_edit['country_de']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Country_LT</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="country_lt" placeholder="Country_LT" class="form-control" type="text"
                                   value="<?php echo $place_edit['country_lt']; ?>">
                        </div>
                    </div>
                </div>
                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">City</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="city" placeholder="City" class="form-control" type="text"
                                   value="<?php echo $place_edit['city']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">City_EN</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="city_en" placeholder="City_EN" class="form-control" type="text"
                                   value="<?php echo $place_edit['city_en']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">City_PL</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="city_pl" placeholder="City_PL" class="form-control" type="text"
                                   value="<?php echo $place_edit['city_pl']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">City_DE</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="city_de" placeholder="City_DE" class="form-control" type="text"
                                   value="<?php echo $place_edit['city_de']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">City_LT</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="city_lt" placeholder="City_LT" class="form-control" type="text"
                                   value="<?php echo $place_edit['city_lt']; ?>">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Region</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="region" placeholder="Region" class="form-control" type="text"
                                   value="<?php echo $place_edit['region']; ?>">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Image URL</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="image_url" placeholder="http://www.drodd.com/images14/a18.png"
                                   class="form-control" type="text" value="<?php echo $place_edit['image_url']; ?>">
                        </div>
                    </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Website URL</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <input name="website_url" placeholder="http://routengo.pe.hu/" class="form-control"
                                   type="text" value="<?php echo $place_edit['website_url']; ?>">
                        </div>
                    </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">XLatLng</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="x_latLng" placeholder="3.25" class="form-control" type="text"
                                   value="<?php echo $place_edit['x_latLng']; ?>">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">YLatLng</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <input name="y_latLng" placeholder="3.25" class="form-control" type="text"
                                   value="<?php echo $place_edit['y_latLng']; ?>">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Time</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="time" placeholder="2017-01-09 02:47:00" class="form-control" type="text"
                                   value="<?php echo $place_edit['time']; ?>">
                        </div>
                    </div>
                </div>


                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i
                            class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you
                    shortly.
                </div>

                <!-- Button -->


                <div class="form-group">
                    <label class="col-md-4 control-label"></label>

                    <div class="col-md-4 inputGroupContainer">
                        <button name="do_edit" type="submit" class="btn btn-success btn-lg" data-toggle="modal"
                                data-target="#myModal">Send <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>
            </fieldset>


            <!--        INSERT INTO `place` (`name`, `description`, `country`, `city`, `region`, `image_url`, `website_url`, `x_latLng`, `y_latLng`, `time`)-->
            <!--        VALUES ($name, $description, $country, $city, $region, $image_url, $website_url, $x_latLng, $y_latLng, $time) -->
        </form>
    </div>
</div>
<!--<!-- Modal -->-->
<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
<!--    <div class="modal-dialog" role="document">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
<!--                <h4 class="modal-title" id="myModalLabel">Modal title</h4>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <h1>Cool, dude!</h1>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--                <button type="button" class="btn btn-primary">Save changes</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/script.js" type="text/javascript"></script>
<script type="text/javascript">
    function show_modal() {
        $('#myModal').modal('show');
    }
</script>
</body>