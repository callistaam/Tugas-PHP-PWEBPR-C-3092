<?php 

// $url = $_SERVER['REQUEST_URI'];
// $path = basename(parse_url($url, PHP_URL_PATH));

$routes = [];

// Rute dengan parameter
$routes['GET']['/'] = 'RestoranController@index';
$routes['GET']['/Restoran'] = 'RestoranController@index';
$routes['GET']['/Restorancreate'] = 'RestoranController@formcreate';
$routes['GET']['/Restoranupdate/{id}'] = 'RestoranController@formupdate';
// $routes['GET']['/detailporto/{id}'] = 'RestoranController@detail';
$routes['POST']['/createresto'] = 'RestoranController@create';
$routes['POST']['/updateresto/{id}'] = 'RestoranController@update';
$routes['GET']['/deleteresto/{id}'] = 'RestoranController@delete';
?>