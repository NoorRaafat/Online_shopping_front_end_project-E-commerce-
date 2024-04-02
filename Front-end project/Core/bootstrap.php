<?php

use App\Core\App;
use App\Database\QueryBuilder;
use App\Database\Connection;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($view, $data = [])
{
    extract($data);
    return require "app/Views/$view.view.php";
}

function redirect($path)
{
    header("location: /{$path}");
}
