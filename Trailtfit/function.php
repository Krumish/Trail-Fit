<?php

function connect() {


    $host = 'localhost';
    $dbname = 'lcfliqvf_shop_db';
    $username = 'lcfliqvf_shop_db';
    $password = 'SFLcqRs8uM8P5B6qgXwd';

    try {


        $pdo = new PDO("mysql:host=$host;dbname=$dbname",
        $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);

        echo "Connection Succesfully!";

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();

    }

}

connect(); 