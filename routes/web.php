<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // If I throw the exception here, I'm redirected to the /other page.
    // throw new App\Exceptions\TestRenderableException;    

    // If I throw the exception inside the view, the Ignition exception page is shown.
    // It's because Ignition wrap all exceptions thrown inside a view with a ViewException. 
    return view('welcome');
});

Route::get('/other', function () {
    return 'Other page';
});
