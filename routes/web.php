<?php

use App\Http\Controllers\Boutiques;
use App\Http\Controllers\Equipementcontrolleur;
use App\Http\Controllers\GesController;
use App\Http\Controllers\GesimaController;
use App\Http\Controllers\MarchandControlleur;
use App\Http\Controllers\MarchéControlleur;
use App\Http\Controllers\ParkingControlleur;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('Accueil');

Route::get('/NosServices',[ GesimaController::class, "serviceaccess"])->name("NosServices");
Route::get('/GestiondesBoutiques',[ Boutiques::class, "access"])->name("accesBoutique");
Route::get( "/GestiondesBoutiques/create",[Boutiques::class ,"create"])->name("boutique.create");
Route::post("/GestiondesBoutiques/create",[Boutiques::class ,"store"])->name("boutique.ajouter");
Route::delete("/GestiondesBoutiques/{boutique}",[Boutiques::class ,"delete"])->name("boutique.supprimer");
Route::put("/GestiondesBoutiques/{boutique}",[Boutiques::class ,"editer"])->name("boutique.editer");
Route::get( "/GestiondesBoutiques/{boutique}",[Boutiques::class ,"edit"])->name("boutique.edit");



Route::get('/GestiondesParkings',[ ParkingControlleur::class, "access"])->name("accesParking");
Route::get( "/GestiondesParkings/create",[ParkingControlleur::class ,"create"])->name("parking.create");

Route::post("/GestiondesParkings/create",[ParkingControlleur::class ,"store"])->name("parking.ajouter");

Route::delete("/GestiondesParkings/{parking}",[ParkingControlleur::class ,"delete"])->name("parking.supprimer");

Route::put("/GestiondesParkings/{parking}",[ParkingControlleur::class ,"editer"])->name("parking.editer");

Route::get( "/GestiondesParkings/{parking}",[ParkingControlleur::class ,"edit"])->name("parking.edit");



Route::get('/GestiondesMarchés',[ MarchéControlleur::class, "access"])->name("accesMarché");
Route::get( "/GestiondesMarchés/create",[MarchéControlleur::class ,"create"])->name("marché.create");
Route::post("/GestiondesMarchés/create",[MarchéControlleur::class ,"store"])->name("marché.ajouter");
Route::delete("/GestiondesMarchés/{marché}",[MarchéControlleur::class ,"delete"])->name("marché.supprimer");
Route::put("/GestiondesMarchés/{marché}",[MarchéControlleur::class ,"editer"])->name("marché.editer");
Route::get("/GestiondesMarchés/edit/{marché}",[MarchéControlleur::class ,"edit"])->name("marché.edit");


Route::get('/GestiondesMarchands/{marché}',[ MarchandControlleur::class, "access"])->name("accesMarchand");
Route::get( "/GestiondesMarchands/create/creation",[MarchandControlleur::class ,"create"])->name("marchand.create");
Route::post("/GestiondesMarchands/create",[MarchandControlleur::class ,"store"])->name("marchand.ajouter");
Route::delete("/GestiondesMarchands/{marchand}",[MarchandControlleur::class ,"delete"])->name("marchand.supprimer");
Route::put("/GestiondesMarchands/edition/{marchand}",[MarchandControlleur::class ,"editer"])->name("marchand.editer");
Route::get( "/GestiondesMarchands/edit/{marchand}",[MarchandControlleur::class ,"edit"])->name("marchand.edit");
Route::get('/GestiondesMarchands',[ MarchandControlleur::class, "return"])->name("retourMarchand");


Route::get('/GestiondesEquipements',[ Equipementcontrolleur::class, "access"])->name("accesEquipement");
Route::get( "/GestiondesEquipements/create",[Equipementcontrolleur::class ,"create"])->name("equipement.create");
Route::post("/GestiondesEquipements/create",[Equipementcontrolleur::class ,"store"])->name("equipement.ajouter");
Route::delete("/GestiondesEquipements/{equipement}",[Equipementcontrolleur::class ,"delete"])->name("equipement.supprimer");
Route::put("/GestiondesEquipements/{equipement}",[Equipementcontrolleur::class ,"editer"])->name("equipement.editer");
Route::get( "/GestiondesEquipements/edit/{equipement}",[Equipementcontrolleur::class ,"edit"])->name("equipement.edit");



Route::get('/ListedesParkings',[ ParkingControlleur::class, "acces"])->name("ListeParkings");

Route::get('/ListedesMarchés',[ MarchéControlleur::class, "acces"])->name("ListeMarchés");
Route::get('/ListedesBoutiques',[ Boutiques::class, "acces"])->name("ListeBoutiques");

Route::get('/ListedesEquipements',[ Equipementcontrolleur::class, "acces"])->name("ListeEquipements");

Route::get('/Apropos',[ GesimaController::class, "apropos"])->name("Apropos");
