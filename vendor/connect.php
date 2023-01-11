<?php

    $connect = mysqli_connect('localhost', 'root', '1111', 'test','80');

    if (!$connect) {
        die('Error connect to DataBase');
    }