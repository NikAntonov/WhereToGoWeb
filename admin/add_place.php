<?php require "/includes/config.php";
    if (!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin']) == false)
{
    header("Location: /login.php");
}else {
        if (isset($_POST['do_post']))
        {
            header("Location: add_place.php");
        }
        ?>


        <!DOCTYPE html>
        <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Добавить место</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

        <!-- Bootstrap core CSS -->

        <link rel="stylesheet" type="text/css" media="screen"
              href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Custom styles for this template -->
        <link href="../css/styles-admin.css" rel="stylesheet" type="text/css"/>
        <link href="media/css/media.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <?php
    include "/includes/header.php";
    ?>
    <div class="main">
        <div class="container padding">
            <form class="well form-horizontal item_card nohover" action="add_place.php" method="POST" id="add_form">
                <fieldset>

                    <!-- Form Name -->
                    <legend class="form_title">Добавить место</legend>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="name_add" placeholder="Name" class="form-control" type="text"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name_EN</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="name_add_en" placeholder="Name" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name_PL</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="name_add_pl" placeholder="Name_PL" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name_DE</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="name_add_de" placeholder="Name_DE" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name_LT</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="name_add_lt" placeholder="Name_LT" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Type</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="type_add" placeholder="Type" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text area -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Description</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea class="form-control" name="description_add" placeholder="Description"
                                          required="required"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Description_EN</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea class="form-control" name="description_add_en" placeholder="Description_EN"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Description_PL</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea class="form-control" name="description_add_pl" placeholder="Description_PL"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Description_DE</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea class="form-control" name="description_add_de" placeholder="Description_DE"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Description_LT</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea class="form-control" name="description_add_lt" placeholder="Description_LT"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Country</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="country_add" placeholder="Country" class="form-control" type="text"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Country_EN</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="country_add_en" placeholder="Country_EN" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Country_PL</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="country_add_pl" placeholder="Country_PL" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Country_DE</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="country_add_de" placeholder="Country_DE" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Country_LT</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="country_add_lt" placeholder="Country_LT" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">City</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="city_add" placeholder="City" class="form-control" type="text"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">City_EN</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="city_add_en" placeholder="City_EN" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">City_PL</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="city_add_pl" placeholder="City_PL" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">City_DE</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="city_add_de" placeholder="City_DE" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">City_LT</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="city_add_lt" placeholder="City_LT" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Region</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="region_add" placeholder="Region" class="form-control" type="text"
                                       required="required">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Image URL</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="image_url_add" placeholder="http://www.drodd.com/images14/a18.png"
                                       class="form-control" type="text" required="required">
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Website URL</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                <input name="website_url_add" placeholder="http://routengo.pe.hu/" class="form-control"
                                       type="text">
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">XLatLng</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="x_latLng_add" placeholder="3.25" class="form-control" type="text"
                                       required="required">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">YLatLng</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                <input name="y_latLng_add" placeholder="3.25" class="form-control" type="text"
                                       required="required">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Time</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div id="datetimepicker1" class="input-group input-append date">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input data-format="yyyy-MM-dd hh:mm:ss" name="time_add"
                                       placeholder="2017-01-09 02:47:00" class="form-control" type="text">
                                <span class="add-on">
                                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>


<!--                    <!-- Success message -->
<!--                    <div class="alert alert-success" role="alert" id="success_message">Success <i-->
<!--                                class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to-->
<!--                        you shortly.-->
<!--                    </div>-->

                    <!-- Button -->


                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>

                        <div class="col-md-4 inputGroupContainer">
                            <button name="do_post" type="submit" class="btn btn-success btn-lg" data-toggle="modal"
                                    data-target="#myModal">Send <span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>
                    <?php
                    $name_add = $_POST['name_add'];
                    $name_add_en = $_POST['name_add_en'];
                    $name_add_pl = $_POST['name_add_pl'];
                    $name_add_de = $_POST['name_add'];
                    $name_add_lt = $_POST['name_add_lt'];

                    $type_add = $_POST['type_add'];

                    $description_add = $_POST['description_add'];
                    $description_add_en = $_POST['description_add_en'];
                    $description_add_pl = $_POST['description_add_pl'];
                    $description_add_de = $_POST['description_add_de'];
                    $description_add_lt = $_POST['description_add_lt'];

                    $country_add = $_POST['country_add'];
                    $country_add_en = $_POST['country_add_en'];
                    $country_add_pl = $_POST['country_add_pl'];
                    $country_add_de = $_POST['country_add_de'];
                    $country_add_lt = $_POST['country_add_lt'];

                    $city_add = $_POST['city_add'];
                    $city_add_en = $_POST['city_add_en'];
                    $city_add_pl = $_POST['city_add_pl'];
                    $city_add_de = $_POST['city_add_de'];
                    $city_add_lt = $_POST['city_add_lt'];

                    $region_add = $_POST['region_add'];
                    $image_url_add = $_POST['image_url_add'];
                    $website_url_add = $_POST['website_url_add'];
                    $x_latLng_add = $_POST['x_latLng_add'];
                    $y_latLng_add = $_POST['y_latLng_add'];
                    $time_add = $_POST['time_add'];

                                        if ($time_add="0000-00-00 00:00:00")
                                        {
                                            $time_add = null;
                                        }


                    if (isset($_POST['do_post'])) {
                        mysqli_query($connection, "INSERT INTO `places` (`id`, `name`, `name_en`, `name_pl`, `name_de`, `name_lt`, `type`
                                                  `description`, `description_en`, `description_pl`, `description_de`, `description_lt`, 
                                                  `country`, `country_en`, `country_pl`, `country_de`, `country_lt`, 
                                                  `city`, `city_en`, `city_pl`, `city_de`, `city_lt`, 
                                                  `region`, `image_url`, `website_url`, `x_latLng`, `y_latLng`, `time`)
                    VALUES (NULL, '$name_add', '$name_add_en', '$name_add_pl', '$name_add_de', '$name_add_lt', '$type_add'
                    '$description_add', '$description_add_en', '$description_add_pl', '$description_add_de', '$description_add_lt', 
                    '$country_add', '$country_add_en', '$country_add_pl', '$country_add_de', '$country_add_lt', 
                    '$city_add', '$city_add_en', '$city_add_pl', '$city_add_de', '$city_add_lt', 
                    '$region_add', '$image_url_add', '$website_url_add', '$x_latLng_add', '$y_latLng_add', '$time_add')");

                    }
                    ?>
                    <p id="success_message"></p>
                </fieldset>


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
    <script type="text/javascript"
            src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/script.js" type="text/javascript"></script>
    <script type="text/javascript">
    </script>
    </body>
    <?php
        }
    ?>