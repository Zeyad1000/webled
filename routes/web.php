<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContectController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TeamController;

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

//team
Route::get('/', TeamController::class . '@index')->name('team.index');
Route::post('/team', TeamController::class . '@store')->name('team.store');
Route::get('/team/{post}', TeamController::class . '@show')->name('team.show');
//invoices
Route::post('/invoices', InvoicesController::class . '@store')->name('invoices.store');
//library
Route::get('/projects', ProjectsController::class . '@index')->name('projects.index');
Route::post('/projects', ProjectsController::class . '@store')->name('projects.store');
Route::get('/projects/{id}', ProjectsController::class . '@show')->name('projects.show');
//contact
Route::get('/contect', ContectController::class . '@create')->name('contect.index');
Route::post('/contect', ContectController::class . '@store')->name('contect.store');




//admins
Route::get('/admins', TeamController::class . '@admin')->name('admin.index');
Route::get('/projects/add', ProjectsController::class . '@create')->name('projects.create');
Route::get('/contect/admin', ContectController::class . '@index')->name('contect.index');
Route::get('/team/create', TeamController::class . '@create')->name('team.create');
Route::get('/invoices', InvoicesController::class . '@index')->name('invoices.index');
Route::get('/invoices/{post}', InvoicesController::class . '@show')->name('invoices.show');
Route::get('/invoice/create', InvoicesController::class . '@create')->name('invoices.create');
