<?php 

$routes = [];

$routes['GET']['/'] = 'RestoranController@index';
$routes['GET']['/Restoran'] = 'RestoranController@index';
$routes['GET']['/Restorancreate'] = 'RestoranController@formcreate';
$routes['GET']['/Restoranupdate/{id}'] = 'RestoranController@formupdate';

$routes['POST']['/createresto'] = 'RestoranController@create';
$routes['POST']['/updateresto/{id}'] = 'RestoranController@update';
$routes['GET']['/deleteresto/{id}'] = 'RestoranController@delete';
?>