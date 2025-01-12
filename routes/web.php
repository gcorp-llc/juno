<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'firewall.all'],function (){
    Route::group(['middleware' => 'localisation:ar', 'prefix' => 'ar'], function () {
        include 'route.php';
    });
    Route::group(['middleware' => 'localisation:fa', 'prefix' => 'fa'], function () {
        include 'route.php';
    });
    Route::group(['middleware' => 'localisation:en', 'prefix' => 'en'], function () {
        include 'route.php';
    });
    Route::group(['middleware' => 'localisation'], function () {
        include 'route.php';
    });

});



