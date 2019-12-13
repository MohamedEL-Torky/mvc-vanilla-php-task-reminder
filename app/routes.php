<?php

use App\Core\Router;

Router::GET('', 'PagesController@home');
Router::GET('about', 'PagesController@about');
Router::GET('about/culture', 'PagesController@aboutCulture');
Router::GET('contact', 'PagesController@contact');
Router::GET('tasks', 'TaskController@index');
Router::POST('task', 'TaskController@store');
Router::POST('name', 'controllers/add-user.php');

