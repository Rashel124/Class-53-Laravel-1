<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RouteCompilerInterface;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// function testName (){
//     return view('Welcome')
// }



Route::get('/',[FrontendController::class, 'index']);
Route::get('/contact-us', [FrontendController::class, 'contactUs']);