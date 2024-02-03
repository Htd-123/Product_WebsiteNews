<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/login_view.php', 'LoginController::index');
 $routes->get('/home', 'HomeController::index');
 $routes->get('/content/(:num)', 'HomeController::view/$1');
 $routes->get('/tieu_de_bai_bao/(:num)', 'ArticleClassController::index/$1');
 $routes->get('/tieu_de_bai_bao/login_view.php', 'LoginController::index');
 $routes->get('/content/login_view.php', 'LoginController::index');
 $routes->get('/admin', 'AdminController::index');
 $routes->get('/process_login.php?', 'AdminController::index');
 $routes->get('/home_view.php', 'HomeController::index');
 $routes->get('/tieu_de_bai_bao/home_view.php', 'HomeController::index');
 $routes->get('/content/home_view.php', 'HomeController::index');
 $routes->get('/tieu_de_bai_bao/process_login.php?', 'AdminController::index');
 $routes->get('/content/process_login.php?', 'AdminController::index');
 
 
 $routes->get('add-article', 'AdminController::index');
 $routes->post('add-savearticle', 'AdminController::saveArticle');
 
 $routes->post('delete-savearticle', 'AdminController::deleteArticle');
 
 $routes->post('editArticle', 'AdminController::editArticle');
 $routes->post('update', 'AdminController::update');

$routes->post('/login_view.php', 'LoginController::processLogin'); 



