<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[demoController::class, 'index']);
Route::get('/service',[demoController::class, 'servicesection']);
Route::get('/contact',[demoController::class, 'contactsection']);
Route::post('/save-contacts',[demoController::class, 'savecontact']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
