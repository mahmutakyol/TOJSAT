<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function(){

    Route::get('dashboard', 'DashboardController@index');

    // HOME PAGE EDIT
    Route::get('homePage', 'DashboardHomeController@index');
    Route::post('homePage', 'DashboardHomeController@store');
    // GUIDELINES EDIT
    Route::get('guidelines', 'DashboardGuidelineController@index');
    Route::post('guidelines', 'DashboardGuidelineController@store');
    // ETHICS EDIT
    Route::get('ethics', 'DashboardEthicController@index');
    Route::post('ethics', 'DashboardEthicController@store');

    // ABO0UT US EDIT
    Route::get('aboutUs', 'DashboardAboutUsController@index');
    Route::post('aboutUs', 'DashboardAboutUsController@store');

    // CONTACT US EDIT
    Route::get('contactUs', 'DashboardContactUsController@index');
    Route::post('contactUs', 'DashboardContactUsController@store');

    // JOURNAL SETTINGS
    Route::get('journalList', 'DashboardJournalController@journalList');
    Route::get('issueList/{site_id}', 'DashboardIssueController@index');
    Route::get('createIssue', 'DashboardIssueController@create');
    Route::post('createIssue', 'DashboardIssueController@store');

});

Route::group(['prefix' => 'settings', 'middleware' => 'auth', 'namespace' => 'Settings'], function(){

    Route::get('{id}', 'UserSettingsController@index');

});

Route::group(['middleware' => 'auth'], function(){

    Route::get('paperSubmit', 'paperSubmitController@index');
    Route::post('paperSubmit', 'paperSubmitController@store');

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/home', 'PagesController@home');
Route::get('auth/login', 'PagesController@login');
Route::get('auth/register', 'Auth/AuthController');
Route::get('/', 'PagesController@home');
Route::get('contactus', 'PagesController@contactUs');
Route::get('editorialBoard', 'PagesController@editorialBoard');
Route::get('ethics', 'PagesController@ethics');
Route::get('guidelines', 'PagesController@guideline');
Route::get('publications', 'PagesController@publications');
Route::get('announcements', 'PagesController@announcements');
Route::get('aboutus', 'PagesController@aboutUs');
Route::get('joinus', 'PagesController@joinUs');
Route::get('authors', 'PagesController@authors');




