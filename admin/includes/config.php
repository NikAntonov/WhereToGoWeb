<?php session_start();

    $config = array(
        'title' =>'Route\'N\'Go',
        'db' => array(
            'server' => '127.0.0.1',
            'username' => 'root',
            'password' => '',
            'name' => 'routengo_db'
        )
    );

require "db.php";