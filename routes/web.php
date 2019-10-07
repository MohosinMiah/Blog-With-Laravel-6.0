<?php

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


/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| ********************************     END ABOUT **************************
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| AboutController Routes
|--------------------------------------------------------------------------
*/
Route::get('/about','AboutController@index')->name('about');


/*
|--------------------------------------------------------------------------
| ********************************     END ABOUT **************************
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| BlogController Routes
|--------------------------------------------------------------------------
*/
Route::get('/blog','BlogController@index')->name('blog');


/*
|--------------------------------------------------------------------------
| ********************************     END ABOUT **************************
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| ContactController Routes
|--------------------------------------------------------------------------
*/
Route::get('/contact','ContactController@index')->name('contact');


/*
|--------------------------------------------------------------------------
| ********************************     END ABOUT **************************
|--------------------------------------------------------------------------
*/
