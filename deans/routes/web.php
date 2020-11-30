<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeandOfficeController;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\TypeStudiesController;
use App\Http\Controllers\StreamsController;
use App\Http\Controllers\NationalitiesController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CerfTypeController;
use App\Http\Controllers\SuperUsersController;
use App\Http\Controllers\SpecialitiesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\RequestCertController;

use App\Http\Controllers\SessionsController;
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
// Route::get('/request',[AdminController::class,'request']);
Route::resource('faq',FaqController::class);

Route::get('/cerfType', [CerfTypeController::class, 'index'] );
Route::get('/cerfType/create', [CerfTypeController::class, 'create'] );
Route::post('/cerfType', [CerfTypeController::class, 'store'] );
Route::get('/cerfTypes/{id}', [CerfTypeController::class, 'show'] );
Route::get('/cerfType/{id}', [CerfTypeController::class, 'edit'] );
Route::post('/cerfType/update', [CerfTypeController::class, 'update'] );
Route::delete('/cerfTyped/{id}', [CerfTypeController::class, 'destroy'] );

Route::get('/cerf', [CertificationController::class, 'index'] );
Route::get('/cerf/create', [CertificationController::class, 'create'] );
Route::post('/cerf', [CertificationController::class, 'store'] );
Route::get('/cerfs/{id}', [CertificationController::class, 'show'] );
Route::get('/cerf/{id}', [CertificationController::class, 'edit'] );
Route::post('/cerf/update', [CertificationController::class, 'update'] );
Route::delete('/cerfd/{id}', [CertificationController::class, 'destroy'] );


Route::get('/student', [StudentController::class, 'index'] );
Route::get('/student/cert', [RequestCertController::class, 'indexStudent'] );
Route::get('/requestCert/create/{id}', [RequestCertController::class, 'create'] );
Route::post('/requestCert', [RequestCertController::class, 'store'] );

Route::get('/requestCert', [RequestCertController::class, 'index'] );
Route::get('/requestCerte/{id}', [RequestCertController::class, 'edit'] );
Route::post('/requestCert/update', [RequestCertController::class, 'update'] );
Route::delete('/requestCert/{id}', [RequestCertController::class, 'destroy'] );
Route::get('/listRequest', [RequestCertController::class, 'listRequest'] );


Route::get('/login', [SessionsController::class,'create']);
Route::post('/login', [SessionsController::class,'store']);
Route::get('/logout',[SessionsController::class,'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
