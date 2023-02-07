<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertController;
use App\Http\Controllers\AdminController;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\UserController;
use Dompdf\Dompdf;
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


Route::get('/findcertificates',[CertController::class, 'findcertificates']);

Route::get('/emailresent',[CertController::class, 'emailresent']);

Route::get('/deleteuser/{id}',[CertController::class, 'deleteuser']);
Route::get('/emailsent/{id}',[CertController::class, 'emailsent']);

Route::get('/index',[CertController::class, 'index_landing']);
Route::get('/qr',[UserController::class, 'scanner']);
Route::get('/',[CertController::class, 'index_landing']);

Route::get('/sample/{id}',[CertController::class, 'sample']);


Route::post('/certvalidate',[CertController::class, 'certvalidate']);


Route::get('/emailsent/{id}',[CertController::class, 'emailsent']);
Route::get('/download/{id}',[CertController::class, 'download']);


Route::get('/deleteseminar/{id}',[CertController::class, 'deleteseminar']);


Route::get('/login',[CertController::class, 'cert_login']);
Route::get('/signup',[UserController::class, 'cert_signup']);
Route::post('/inserts',[UserController::class, 'insertuser_request']);
Route::post('/check',[CertController::class, 'checkLogin']);
Route::get('/logout',[CertController::class, 'logout']);
Route::get('/viewCertificate/{id}',[CertController::class, 'viewCertificate']);
Route::post('/insertseminar',[CertController::class, 'insertseminar']);
Route::post('/insertGeneratedCerts',[CertController::class, 'insertGeneratedCerts']);
Route::post('/updateSeminar/{call?}',[CertController::class, 'updateSeminar']);
Route::post('/insertModules',[CertController::class, 'insertModules']);
Route::get('/forgot',[UserController::class, 'forgotpassword']);
Route::post('/resetlink',[UserController::class, 'sendResetLinkEmail']);
Route::get('/token',[UserController::class, 'tokenreset']);
Route::post('/tokenlink',[UserController::class, 'tokenpass']);

Route::group(['middleware'=>['checkSession']], function(){

Route::get('/generatedcertificates',[CertController::class, 'generatedcerts']);

Route::get('/pro/seminars',[CertController::class, 'pro_editseminar']);

Route::get('/pro/seminars/{id}',[CertController::class, 'pro_editseminar_page']);

Route::get('/pro/seminars/update/{id}',[CertController::class, 'pro_editseminar_page_update']);

Route::get('/pro/editing',[CertController::class, 'pro_edit']);

Route::get('/pro/editing/{id}',[CertController::class, 'pro_edit_page']);

Route::get('/pro',[CertController::class, 'pro_landing']);
Route::get('/users',[UserController::class, 'getuser']);
Route::get('/landing',[UserController::class, 'getlanding']);
Route::get('/editpage/{id}',[UserController::class, 'editpage']);
Route::post('/updatepage',[UserController::class, 'updatepage']);
Route::get('/approve/{id}',[UserController::class, 'approve']);
Route::get('/deletes/{id}',[UserController::class, 'deleteuser_req']);
Route::get('/delete/{id}',[UserController::class, 'deleteuser']);
Route::post('/insert',[UserController::class, 'insertuser']);
Route::get('/create',[UserController::class, 'createuser']);
Route::get('/edit/{id}',[UserController::class, 'edituser']);
Route::post('/update',[UserController::class, 'updateuser']);
Route::get('/certs',[UserController::class, 'certs']);
});