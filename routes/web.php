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

Route::get('/', function () {
    return view('welcome');
});



//GOLEK 2
Route::group(['prefix' => 'golek'], function(){
	Route::get('showing','Hazim_Form\Users_Controllers@welcomepage')->name('showing.welcomepage');
	
	Route::resource('tergolek','Hazim_Form\Users_Controllers');

	Route::get('deleting','Hazim_Form\Users_Controllers@deleting');
	Route::post('destroy','Hazim_Form\Users_Controllers@destroy');

	Route::get('editing','Hazim_Form\Users_Controllers@editing');
	Route::post('editor','Hazim_Form\Users_Controllers@editor');

	
	Route::post('update','Hazim_Form\Users_Controllers@update');

});


//CRAW
Route::group(['prefix' => 'craw'], function(){
	Route::get('welcomebitch','Hazim_Form\Craw_Controllers@welcomePage');
	
	Route::resource('crawing','Hazim_Form\Craw_Controllers');

	Route::get('chooseEdit','Hazim_Form\Craw_Controllers@chooseEditCraw');
	Route::post('editOR','Hazim_Form\Craw_Controllers@editOR');
	Route::post('update','Hazim_Form\Craw_Controllers@update');

	Route::get('creating','Hazim_Form\Craw_Controllers@create');

	Route::get('destroying','Hazim_Form\Craw_Controllers@destroying');
	Route::post('destroy','Hazim_Form\Craw_Controllers@destroy');

	Route::get('show','Hazim_Form\Craw_Controllers@show');
	Route::post('edit','Hazim_Form\Craw_Controllers@edit');


});


//Case Management
Route::group(['prefix' => 'casemanagement'], function(){
	Route::resource('casing','Hazim_Form\CaseManagement_Controllers');

	Route::post('showinguser','Hazim_Form\CaseManagement_Controllers@showing');	
	Route::post('showingticket','Hazim_Form\CaseManagement_Controllers@showing2');

	Route::get('ticketlist','Hazim_Form\CaseManagement_Controllers@ticketlist');
	Route::get('myticketlist','Hazim_Form\CaseManagement_Controllers@ownticketlist');

	Route::get('creatingticket','Hazim_Form\CaseManagement_Controllers@createticket');

	Route::get('hometesting','Hazim_Form\CaseManagement_Controllers@TMhome');

	Route::get('deleteticket','Hazim_Form\CaseManagement_Controllers@deleteticket');
	Route::post('destroy','Hazim_Form\CaseManagement_Controllers@destroy');

	Route::post('update','Hazim_Form\CaseManagement_Controllers@update');
	Route::post('update2','Hazim_Form\CaseManagement_Controllers@update2');

	Route::get('editor/{ticket_id}','Hazim_Form\CaseManagement_Controllers@editor');

});



//login & sign up
Auth::routes();
	Route::get('/home', 'HomeController@index')->name('home');


//TM
Route::group(['prefix' => 'tm'], function(){
	Route::resource('tmbase','Hazim_Form\TM_Controllers');

	Route::get('detailed/{ticket_id}','Hazim_Form\TM_Controllers@ticket');

	Route::get('createcase','Hazim_Form\TM_Controllers@createcase');

	Route::get('allmycase','Hazim_Form\TM_Controllers@case');

	Route::post('newcase','Hazim_Form\TM_Controllers@usercase');

	Route::get('allcases','Hazim_Form\TM_Controllers@everyonecase');

});
