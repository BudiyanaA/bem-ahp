<?php
    $project_location = "";
    $me = $project_location;

    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me.'/' :
            require "views/home.php";
            break;
        case $me.'/login' :
            require "views/login.php";
            break;
        case $me.'/alternatif' :
            require "views/alternative.php";
            break;
        case $me.'/kriteria' :
            require "views/criteria.php";
            break;
        case $me.'/bobot' :
            require "views/weight.php";
            break;
        case $me.'/perhitungan' :
            require "views/calculation.php";
            break;
        case $me.'/password' :
            require "views/password.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }