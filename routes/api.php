<?php

use Illuminate\Http\Request;

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

//Download Postman app for this demo
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/contacts','ApiContactController@store'); // Insert Data in Postman(API app)
// Route::get('/contacts','ApiContactController@index'); // Fetch all the record from REST API
// Route::get('/contacts/{id}','ApiContactController@show'); // Show one record in the REST API
// // Route::put('/contacts/{id}','ApiContactController@update'); // Update record in the REST API
// // As an alternative you can update a record using a patch record but it will not return a header
// Route::patch('/contacts/{id}','ApiContactController@update'); // Update record in the REST API
// Route::delete('/contacts/{id}','ApiContactController@destroy'); // Delete reocrd in the REST API

//Equivalent Method to all in the above
Route::resource('contacts','ApiContactController');

