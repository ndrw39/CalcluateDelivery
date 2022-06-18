<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/delivery/{name}/calculate', 'Api\DeliveryController@calculate')
    ->whereIn('name', \App\Managers\DeliveryManager::DELIVERIES);
