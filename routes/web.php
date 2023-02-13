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

Route::get('/','MainController@index')->name('main');


Route::get('contacts', 'ContactsController@index')->name('contacts.index');

Route::get('contacts/create', 'ContactsController@create')->name('contacts.create');

Route::post('contacts', 'ContactsController@store')->name('contacts.store');

Route::get('contacts/{contact_id}', 'ContactsController@show')->name('contacts.show');

Route::get('contacts/{contact_id}/edit', 'ContactsController@edit')->name('contacts.edit');

Route::match(['put', 'patch'], 'contacts/{contact_id}', 'ContactsController@update')->name('contacts.update');

Route::delete('contacts/{contact_id}', 'ContactsController@destroy')->name('contacts.destroy');