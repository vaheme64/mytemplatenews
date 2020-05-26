<?php
/**
 * Created by PhpStorm.
 * User: mehrpour
 * Date: 5/17/2020
 * Time: 10:31 PM
 */
Route::get('/','Panel\DashboardController@index');
Route::resource('/permissions','Panel\PermissionController');
Route::resource('/roles','Panel\RoleController');
Route::resource('/users','Panel\UsersController');
