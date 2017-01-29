<?php session_start();

    $config = array(
        'title' =>'Route\'N\'Go',
        'db' => array(
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',
            'name' => 'routengo_db'
        )
    );

require "db.php";