<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeandOfficeController;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\TypeStudiesController;
use App\Http\Controllers\StreamsController;
use App\Http\Controllers\NationalitiesController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\CertificationTypesController;
use App\Http\Controllers\SuperUsersController;
use App\Http\Controllers\SpecialitiesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\CertificationsController;
use App\Http\Controllers\RequestCertificationsController;
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

Route::get('/',[PagesController::class,'index']);
Route::get('/faqs',[PagesController::class,'faq']);
Route::get('/formspravki',[PagesController::class,'formsprav']);
Route::get('/formzaev',[PagesController::class,'formzaev']);

Route::get('/login',[PagesController::class,'login']);
Route::get('/myspravki',[PagesController::class,'mysprav']);
Route::get('/myzaev',[PagesController::class,'myzaev']);

Route::get('/sendspravka',[PagesController::class,'sendspravka']);
Route::get('/sendzaev',[PagesController::class,'sendzaev']);
Route::get('/indexAdmin',[AdminController::class,'index']);
Route::get('/add',[AdminController::class,'addPages']);
Route::get('/detail',[AdminController::class,'detail']);
Route::get('/request',[AdminController::class,'request']);
Route::resource('dean_offices',DeandOfficeController::class);
Route::resource('addresses',AddressesController::class);
Route::resource('type_studies',TypeStudiesController::class);
Route::resource('streams',StreamsController::class);
Route::resource('nationalities',NationalitiesController::class);
Route::resource('faqs',FaqsController::class);
Route::resource('certification_types',CertificationTypesController::class);
Route::resource('super_users',SuperUsersController::class);
Route::resource('specialities',SpecialitiesController::class);
Route::resource('students',StudentsController::class);
Route::resource('certifications',CertificationsController::class);
Route::resource('request_certifications',RequestCertificationsController::class);