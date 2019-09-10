<?php

use \Core\Route;

Route::get('/', 'IndexController@index');

Route::get('/admin', 'AdminController@login');



