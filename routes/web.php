<?php
use App\Http\Controllers\SondageController;
use App\Http\Controllers\Model_Controller;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});
Route::post('/ajouter_sondage',[SondageController::class,'creatSondage'])->name('sondageform.file');
Route::post('/creer_sondage',[Model_Controller::class,'creatSondageform'])->name('sondageform.file');

