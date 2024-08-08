<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('contact-us', [App\Http\Controllers\HomeController::class, 'store'])->name('contact.us.store');
Route::get('send-email-pdf', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('/contact', [App\Http\Controllers\HomeController::class, 'sendEmail'])->name('send.email');
Route::get('/became-an-agent', function () {
    return view('became-an-agent');
});
Route::get('/became-an-agent/create-step1', [App\Http\Controllers\AgentsController::class, 'createStep1']);
Route::post('/became-an-agent/create-step1', [App\Http\Controllers\AgentsController::class, 'postCreateStep1']);
Route::get('/became-an-agent/create-step2', [App\Http\Controllers\AgentsController::class, 'createStep2']);
Route::post('/became-an-agent/create-step2', [App\Http\Controllers\AgentsController::class, 'postCreateStep2']);
Route::get('/became-an-agent/create-step3', [App\Http\Controllers\AgentsController::class, 'createStep3']);
Route::post('/became-an-agent/create-step3', [App\Http\Controllers\AgentsController::class, 'postCreateStep3']);
Route::get('/became-an-agent/create-step4', [App\Http\Controllers\AgentsController::class, 'createStep4']);
Route::post('/became-an-agent/create-step4', [App\Http\Controllers\AgentsController::class, 'postCreateStep4']);
Route::get('/became-an-agent/previewPage', [App\Http\Controllers\AgentsController::class, 'createPreview']);
Route::post('/became-an-agent/store', [App\Http\Controllers\AgentsController::class, 'store']);

Route::get('/agent/profile', [App\Http\Controllers\AgentsController::class, 'accountProfile']);
Route::post('api/fetch-states', [App\Http\Controllers\AgentsController::class, 'fetchState']);
Route::post('api/fetch-cities', [App\Http\Controllers\AgentsController::class, 'fetchCity']);

Route::get('/services', function () {
    return view('services');
});

Route::get('/agent_network_accelerator', function () {
    return view('services.ana');
});
Route::get('/agent_network_management', function () {
    return view('services.anm');
});
Route::get('/community_agent_network', function () {
    return view('services.can');
});
Route::get('/Distribution_to_the_last_Mile', function () {
    return view('services.dlm');
});
Route::get('/Liquidity_Float_Management', function () {
    return view('services.lfm');
});
Route::get('/Below_Line_Market_Activation', function () {
    return view('services.blm');
});
Auth::routes();

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/admin/agents', [App\Http\Controllers\HomeController::class, 'agentPage'])->name('agent');
Route::get('/admin/agent/{id}',[App\Http\Controllers\HomeController::class, 'agentDetail'])->name('agent.detail');

Route::get('/admin/partners', [App\Http\Controllers\HomeController::class, 'partnerPage'])->name('partner');
Route::get('/admin/partner/{id}',[App\Http\Controllers\HomeController::class, 'partnerDetail'])->name('partner.detail');
Route::post('/partner/store', [App\Http\Controllers\HomeController::class, 'partnerStore']);