<?php
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\adminController;
use App\Http\Controller\PatientController;
use App\Http\Controllers\MedecinController; 
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


Route::get('/medecin',[MedecinController::class, 'index']);

Route::get('/',[homecontroller::class, 'accueil'])
->name('app_accueil');



Route::get('/medecin/rendez-vous', 'MedecinController@listeRendezVous')->name('medecin.listeRendezVous');
Route::get('/medecin/rendez-vous/{id}/modifier', 'MedecinController@modifierRendezVous')->name('medecin.modifierRendezVous');
Route::put('/medecin/rendez-vous/{id}', 'MedecinController@updateRendezVous')->name('medecin.updateRendezVous');

Route::get('/medecin/dossiers-medicaux', 'MedecinController@listeDossiersMedicaux')->name('medecin.listeDossiersMedicaux');
Route::get('/medecin/dossiers-medicaux/{id}/modifier', 'MedecinController@modifierDossierMedical')->name('medecin.modifierDossierMedical');
Route::put('/medecin/dossiers-medicaux/{id}', 'MedecinController@updateDossierMedical')->name('medecin.updateDossierMedical');



Route::get('/orien',[LoginController::class, 'orien'])
->name('orien_login');

Route::get('/patient', [PatientController::class,'patient'])
->name('patient.index');

Route::get('/admin',[admincontroller::class, 'home'])
->name('admin_dashboard');


Route::get('/logout', [LoginController::class, 'logout'] )
    ->name('admin_logout');

Route::get('/connexion', [LoginController::class, 'connexion'] )
->name('admin_connexion');




Route::match(['get', 'post'], '/login', [LoginController::class, 'login']
)->name('login');

Route::match(['get', 'post'], '/register', [LoginController::class, 'register']
)->name('register');
