<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\agentController;
use App\Http\Controllers\MailController;


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

route::get('/',[HomeController::class,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('/redirect',[HomeController::class,'redirect']);

route::get('/view_property',[agentController::class,'view_property']);

route::post('/add_property',[agentController::class,'add_property']);



route::get('/view_houseunits',[agentController::class,'view_houseunits']);
route::post('/add_houseunits',[agentController::class,'add_houseunits']);

route::get('/delete_property/{id}',[agentController::class,'delete_property']);

route::get('/view_tenants',[agentController::class,'view_tenants']);

route::get('/view_invoices',[agentController::class,'view_invoices']);

route::post('/register_tenant',[agentController::class,'register_tenant']);
route::get('/delete_tenant/{id}',[agentController::class,'delete_tenant']);

route::get('/print_pdf',[agentController::class,'print_pdf']);

route::post('/send-email',[agentController::class,'sendEmail'])->name('send.email');

route::get('/stripe',[agentController::class,'stripe']);
Route::post('stripe',[agentController::class, 'stripePost'])->name('stripe.post');
