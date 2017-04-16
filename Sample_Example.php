<?php
/**
 * Created by PhpStorm.
 * User: MedRist
 * Date: 4/16/2017
 * Time: 4:19 PM
 */
include "GoogleMapsHelper.php";
$params   = array(
    'origin'      => '42.3600825 , -71.0588802',
    'destination' => '42.4085506 , -71.0117107',
    'mode'        => 'bicycling',
    'sensor'      => 'false',
);
$d =new GoogleMapsHelper($params);

$dd=$d->get_Total_Result();


