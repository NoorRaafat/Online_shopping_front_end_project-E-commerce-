<?php

// get requests
$router->get('/', 'PagesController@home');
$router->get('/login', 'PagesController@login');
$router->get('/register', 'PagesController@register');
$router->get('/men-clothing', 'PagesController@menClothing');
$router->get('/women-clothing', 'PagesController@womenClothing');
$router->get('/children-clothing', 'PagesController@childrenClothing');
$router->get('/accessories', 'PagesController@accessories');
$router->get('/makeup', 'PagesController@makeup');
$router->get('/glasses', 'PagesController@glasses');
$router->get('/services', 'PagesController@services');
$router->get('/about-us', 'PagesController@aboutUs');
$router->get('/contact-us', 'PagesController@contactUs');
$router->get('/buttons', 'PagesController@buttons');
$router->get('/forms', 'PagesController@forms');
$router->get('/charts', 'PagesController@charts');


// post requests
$router->post('/message', 'MessagesController@store');
$router->post('/users', 'UsersController@index');
$router->post('/login', 'UsersController@find');
$router->post('/register', 'UsersController@store');
$router->post('/subscribe', 'SubscriptionController@store');
#بيحدد الانتري بوينت بتاعه الموقع 
# mvc model view controler 
