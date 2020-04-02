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
Route::post('login', 'API\LoginController@login');
Route::post('register', 'API\RegisterController@register');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
  'prefix' => 'v1', 
  'as' => 'api.', 
  'namespace' => 'API\V1', 
  'middleware' => ['auth:api']
], function () {
    Route::resource('properties', 'PropertyController');
    Route::resource('analytic_types', 'AnalyticTypeController');
    Route::resource('property_analytics', 'PropertyAnalyticsController');
    Route::get('property_analytics/summary/{filter}/{value}', 'PropertyAnalyticsController@showSummary');
});

Route::fallback(function(){
    return response()->json(['message' => 'Not Found.'], 404);
})->name('api.fallback.404');
