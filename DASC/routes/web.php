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

Route::get('/','WelcomeController@index');
Route::get('/about','WelcomeController@about');
Route::get('/compare','WelcomeController@compare');
Route::get('/contact','WelcomeController@contact');
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-Information','InformationController@addInformation')->name('add-Information');
Route::post('/information/add','InformationController@saveInformation');
Route::get('/manage-Information','InformationController@manageInformation')->name('manage-Information');
Route::get('/information/unpublished/{id}','InformationController@unpublishedInformation');
Route::get('/information/published/{id}','InformationController@publishedInformation');
Route::get('/information/edit/{id}','InformationController@editInformation');
Route::post('/information/update','InformationController@updateInformation');
Route::post('/information/delete','InformationController@deleteInformation');

/*
Route::get('/live_search','SearchController@index');
Route::get('/live_search/action','SearchController')->name('live_search.action');*/
Route::post('/compare/search','SearchController@index');

/*Excel Import work*/


Route::get('/import-excel','ExcelImportController@index')->name('import-excel');
Route::post('/information-import','ExcelImportController@importExcel')->name('information-import');


Route::get('/test-info','TestController@test')->name('test-info');
Route::post('/information/test','TestController@saveTest');



Route::post('/schoolInfo','SearchController@index');
Route::get('/schoolList','SchoollistController@index');
Route::get('/schoolDetails/{id}','SchoollistController@schoolData');
/*Route::get('/schoolDetails/{id}','SchoollistController@schoolList');*/
Route::get('/compareSchool','SchoollistController@compareSchool');
Route::get('/compareSchoolMore','SchoollistController@compareMoreSchool');
Route::get('/compareMoreSchool4','SchoollistController@compareMoreSchool4');
Route::get('/compareMoreSchool5','SchoollistController@compareMoreSchool5');

