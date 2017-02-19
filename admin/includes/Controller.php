<?php require "config.php";
function editPlace($connection,$name,$name_en,$name_pl,$name_de,$name_lt,$type,
                           $description,$description_en,$description_pl,$description_de,$description_lt,
                           $country,$country_en,$country_pl,$country_de,$country_lt,
                           $city,$city_en,$city_pl,$city_de,$city_lt,
                           $region,$image_url,$website_url,$x_latLng,$y_latLng,
                           $time,$place_id)
        {
            mysqli_query($connection, "UPDATE `places` SET `name` = '$name', `name_en` = '$name_en', `name_pl` = '$name_pl', `name_de` = '$name_de', `name_lt` = '$name_lt', `type` = '$type',
                                  `description` = '$description', `description_en` = '$description_en', `description_pl` = '$description_pl', `description_de` = '$description_de', `description_lt` = '$description_lt',
                                  `country` = '$country', `country_en` = '$country_en', `country_pl` = '$country_pl', `country_de` = '$country_de', `country_lt` = '$country_lt', 
                                  `city` = '$city', `city_en` = '$city_en', `city_pl` = '$city_pl', `city_de` = '$city_de', `city_lt` = '$city_lt', 
                                  `region` = '$region',`image_url` = '$image_url', `website_url` = '$website_url', `x_latLng` = '$x_latLng', `y_latLng` = '$y_latLng', `time` = '$time' 
                                  WHERE `id` = '$place_id' ");
        }
        function addPlace($connection,$name_add, $name_add_en, $name_add_pl, $name_add_de, $name_add_lt, $type_add,
                    $description_add, $description_add_en, $description_add_pl, $description_add_de, $description_add_lt,
                    $country_add, $country_add_en, $country_add_pl, $country_add_de, $country_add_lt,
                    $city_add, $city_add_en, $city_add_pl, $city_add_de, $city_add_lt,
                    $region_add, $image_url_add, $website_url_add, $x_latLng_add, $y_latLng_add, $time_add)
        {
            mysqli_query($connection, "INSERT INTO `places` (`id`, `name`, `name_en`, `name_pl`, `name_de`, `name_lt`, `type`,
                                                  `description`, `description_en`, `description_pl`, `description_de`, `description_lt`, 
                                                  `country`, `country_en`, `country_pl`, `country_de`, `country_lt`, 
                                                  `city`, `city_en`, `city_pl`, `city_de`, `city_lt`, 
                                                  `region`, `image_url`, `website_url`, `x_latLng`, `y_latLng`, `time`)
                    VALUES (NULL, '$name_add', '$name_add_en', '$name_add_pl', '$name_add_de', '$name_add_lt', '$type_add',
                    '$description_add', '$description_add_en', '$description_add_pl', '$description_add_de', '$description_add_lt', 
                    '$country_add', '$country_add_en', '$country_add_pl', '$country_add_de', '$country_add_lt', 
                    '$city_add', '$city_add_en', '$city_add_pl', '$city_add_de', '$city_add_lt', 
                    '$region_add', '$image_url_add', '$website_url_add', '$x_latLng_add', '$y_latLng_add', '$time_add')");
        }
        function showPlaces()
        {

        }
        function deletePlace()
        {

        }
        function deleteAllPlaces()
        {

        }

