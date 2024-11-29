<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;


/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');    //home page routes
/************************************************************************************************************************************/
$routes->get('/', 'Admin::index');                               //login page
$routes->post('admin/login', 'Admin::login');                      //login action  
$routes->get('admin/logout', 'Admin::logout');                    // Logout action
$routes->get('admin/dashboard', 'Admin::dashboard');                  //dashboard page 
$routes->post('admin/saveDetails', 'Admin::saveDetails');            //form details add here 
$routes->post('admin/deleteDetails', 'Admin::deleteDetails');    //from delete action

