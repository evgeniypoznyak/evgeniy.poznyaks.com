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
Auth::routes();

Route::get('/', 'PagesController@index')->name('home');;
Route::get('project/{project}', 'PagesController@singleProject')->name('singleProject');

Route::get('/home', 'HomeController@index')->name('admin');

Route::get('/contact', 'PagesController@contact')->name('contact.index');
Route::post('/contact', 'PagesController@send')->name('contact.send');



Route::group(['middleware' => 'auth'], function()
{
    Route::resource('projects', 'ProjectsController');
    Route::resource('pictures', 'PicturesController');
    Route::resource('skills', 'SkillsController');

    Route::get('resume', 'SkillsController@resumeshow')->name('resumeshow');
    Route::post('resume', 'SkillsController@resumestore')->name('resumestore');



});


/*
|        | GET|HEAD  | pages                  | pages.index     | App\Http\Controllers\SkillsController@index                            | web,auth     |
|        | POST      | pages                  | pages.store     | App\Http\Controllers\SkillsController@store                            | web,auth     |
|        | GET|HEAD  | pages/create           | pages.create    | App\Http\Controllers\SkillsController@create                           | web,auth     |
|        | GET|HEAD  | pages/{skill}          | pages.show      | App\Http\Controllers\SkillsController@show                             | web,auth     |
|        | PUT|PATCH | pages/{skill}          | pages.update    | App\Http\Controllers\SkillsController@update                           | web,auth     |
|        | DELETE    | pages/{skill}          | pages.destroy   | App\Http\Controllers\SkillsController@destroy                          | web,auth     |
|        | GET|HEAD  | pages/{skill}/edit     | pages.edit      | App\Http\Controllers\SkillsController@edit                             | web,auth     |

| GET|HEAD  | pictures                | pictures.index   | App\Http\Controllers\PicturesController@index    | web,auth     |
| POST      | pictures                | pictures.store   | App\Http\Controllers\PicturesController@store    | web,auth     |
| GET|HEAD  | pictures/create         | pictures.create  | App\Http\Controllers\PicturesController@create   | web,auth     |
| PUT|PATCH | pictures/{picture}      | pictures.update  | App\Http\Controllers\PicturesController@update   | web,auth     |
| GET|HEAD  | pictures/{picture}      | pictures.show    | App\Http\Controllers\PicturesController@show     | web,auth     |
| DELETE    | pictures/{picture}      | pictures.destroy | App\Http\Controllers\PicturesController@destroy  | web,auth     |
| GET|HEAD  | pictures/{picture}/edit | pictures.edit    | App\Http\Controllers\PicturesController@edit     | web,auth     |


| GET|HEAD  | projects                | projects.index   | App\Http\Controllers\ProjectsController@index    | web          |
| POST      | projects                | projects.store   | App\Http\Controllers\ProjectsController@store    | web,auth     |
| GET|HEAD  | projects/create         | projects.create  | App\Http\Controllers\ProjectsController@create   | web,auth     |
| GET|HEAD  | projects/{project}      | projects.show    | App\Http\Controllers\ProjectsController@show     | web          |
| PUT|PATCH | projects/{project}      | projects.update  | App\Http\Controllers\ProjectsController@update   | web,auth     |
| DELETE    | projects/{project}      | projects.destroy | App\Http\Controllers\ProjectsController@destroy  | web,auth     |
| GET|HEAD  | projects/{project}/edit | projects.edit    | App\Http\Controllers\ProjectsController@edit     | web,auth     |
 */