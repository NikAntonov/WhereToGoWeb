<?php require 'Slim/Slim.php';
require "includes/config.php";

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->contentType('text/html; charset=utf-8');

$app->get(
    '/api',
    function () {
//        if (isset($_GET['id'])){
//   $id = $_GET['id'];
//   echo $id;
//            }
    });

$app->get('/api/places', function () use ($app, $connection) {
    $places = mysqli_query($connection, "SELECT * FROM `places` ORDER BY `id` DESC ");
    if (mysqli_num_rows($places) > 0) {
        while ($place = mysqli_fetch_assoc($places)) {
            $data[] = $place;
        }
    } else {
        $data = array('Error' => 'List is empty');
    }
    $app->response['Content-Type'] = 'application/json';
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
});
$app->get('/api/places/:type', function ($type) use ($app, $connection) {
    $places = mysqli_query($connection, "SELECT * FROM `places` WHERE `type` = '$type' ORDER BY `id` DESC ");
    if (mysqli_num_rows($places) > 0) {
        while ($place = mysqli_fetch_assoc($places)) {
            $data[] = $place;
        }
    } else {
        $data = array('Error' => 'List is empty');
    }
    $app->response['Content-Type'] = 'application/json';
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
});

$app->run();
