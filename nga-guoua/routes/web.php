<?php

use App\Http\Controllers\EtudiantController;
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
});
// Route::get('/contact', function (){
//     return view('Contact');
// });

Route::get("/etudiant", [EtudiantController:: class, "index"]);
    // quelle vue sur la liste ?
    // $test = "haoua" . "Coulibaly";
    // return view("etudiant");
    // return view("etudiant", compact("test"));
    // il y a différentes manières pour la déclaration des variables autant qu'on veut
    // return view("etudiant", [
    // "test"=>$test
    // "Dakono"=>$Dakono 
// ]);

