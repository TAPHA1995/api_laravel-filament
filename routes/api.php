<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SondageController;
use App\Http\Controllers\Model_Controller;
/*.
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


//Envoyer le formulaire sondage
Route::post('soumettreSondage', [SondageController::class, 'creatSondage']);


//Envoyer pour creer un formulaire
Route::post('creer_form_sondage', [Model_Controller::class, 'creatSondageform']);


//Affiche module_un
Route::get('affiche_modul', [Model_Controller::class, 'affiche_modul_un']);

//Affiche reponse_module_un
Route::get('affiche_reponse_modul', [SondageController::class, 'affiche_reponse_modul_un']);


Route::middleware('auth:sanctum')->group(function(){

Route::get('/user', function(Request $request){
 return $request->user();
});

});

Route::get('supprime_model_un', [Model_Controller::class, 'destroy']);
