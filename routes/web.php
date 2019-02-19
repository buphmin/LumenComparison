<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/



$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('league_players/raw/{id}', function($id) use ($router) {
    $sql = "
            select * from 
            league_player lp
            join league l on lp.league_id = l.id
            join player p on lp.player_id = p.id
            where lp.id = :id
        ";

   return $router->app->db->select($sql, ['id' => $id]);
});
