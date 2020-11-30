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
use App\Http\Controllers\RegistrationController;
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

<<<<<<< Updated upstream
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
Route::resource('certificationTypes',CertificationTypesController::class);
Route::resource('super_users',SuperUsersController::class);
Route::resource('specialities',SpecialitiesController::class);
Route::resource('students',StudentsController::class);
Route::resource('certifications',CertificationsController::class);
Route::resource('request_certifications',RequestCertificationsController::class);
Route::get('/register', [RegistrationController::class,'create']);
Route::post('register', [RegistrationController::class,'store']);

Route::get('/login', [SessionsController::class,'create']);
Route::post('/login', [SessionsController::class,'store']);
Route::get('/logout',[SessionsController::class,'destroy']);

// REDIRECT IT TO USER PAGE
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::middleware(['auth:sanctum', 'verified'])->get('/',[PagesController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/faqs',[PagesController::class,'faq']);

Route::middleware(['auth:sanctum', 'verified'])->get('/formspravki',[PagesController::class,'formsprav']);

Route::middleware(['auth:sanctum', 'verified'])->get('/formzaev',[PagesController::class,'formzaev']);

//Route::get('/login',[PagesController::class,'login']);
Route::middleware(['auth:sanctum', 'verified'])->get('/myspravki',[PagesController::class,'mysprav']);

Route::middleware(['auth:sanctum', 'verified'])->get('/myzaev',[PagesController::class,'myzaev']);

Route::middleware(['auth:sanctum', 'verified'])->get('/sendspravka',[PagesController::class,'sendspravka']);
Route::middleware(['auth:sanctum', 'verified'])->get('/sendzaev',[PagesController::class,'sendzaev']);
Route::middleware(['auth:sanctum', 'verified'])->get('/indexAdmin',[AdminController::class,'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/add',[AdminController::class,'addPages']);
Route::middleware(['auth:sanctum', 'verified'])->get('/detail',[AdminController::class,'detail']);
Route::middleware(['auth:sanctum', 'verified'])->get('/request',[AdminController::class,'request']);
Route::middleware(['auth:sanctum', 'verified'])->resource('faq',FaqController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/cerfType', [CerfTypeController::class, 'index'] );
Route::middleware(['auth:sanctum', 'verified'])->get('/cerfType/create', [CerfTypeController::class, 'create'] );
Route::middleware(['auth:sanctum', 'verified'])->post('/cerfType', [CerfTypeController::class, 'store'] );
Route::middleware(['auth:sanctum', 'verified'])->get('/cerfTypes/{id}', [CerfTypeController::class, 'show'] );
Route::middleware(['auth:sanctum', 'verified'])->get('/cerfType/{id}', [CerfTypeController::class, 'edit'] );
Route::middleware(['auth:sanctum', 'verified'])->post('/cerfType/update', [CerfTypeController::class, 'update'] );
Route::middleware(['auth:sanctum', 'verified'])->delete('/cerfTyped/{id}', [CerfTypeController::class, 'destroy'] );

Route::middleware(['auth:sanctum', 'verified'])->get('/login', [SessionsController::class,'create']);
Route::middleware(['auth:sanctum', 'verified'])->post('/login', [SessionsController::class,'store']);
Route::middleware(['auth:sanctum', 'verified'])->get('/logout',[SessionsController::class,'destroy']);


Route::middleware(['auth:sanctum', 'verified'])->get('/index',[PagesController::class,'index'])->name('index');

//Route::middleware('auth:sanctum')->get('/index', function (Request $request) {
//    return $request->user();
//});


Route::middleware(['auth:sanctum', 'verified'])->get('/',[PagesController::class,'index']);

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/home', [PagesController::class, 'index']);
>>>>>>> Stashed changes
