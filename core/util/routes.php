<?php


Router::GET('', 'controllers/index.php');
Router::GET('about', 'controllers/about.php');
Router::GET('about/culture', 'controllers/about-culture.php');
Router::GET('contact', 'controllers/contact.php');
Router::POST('task', 'controllers/add-task.php');
Router::POST('name', 'controllers/add-user.php');

