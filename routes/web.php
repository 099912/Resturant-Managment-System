<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
// Route::view('/', 'welcome');

Route::get("/",[HomeController::class,"home"]);
//route for admin page

Route::get("admin",[HomeController::class,"admin"]);

Route::get("users",[AdminController::class,"user"]);

Route::get("delete/{id}",[AdminController::class,"delete"]);

Route::get("foodmenu",[AdminController::class,"foodmenu"]);

Route::post("uploadmenu",[AdminController::class,"menu"]);

Route::get("deletemenu/{id}",[AdminController::class,"deletemenu"]);

Route::get("updatemenu/{id}",[AdminController::class,"updatemenu"]);

Route::post("saveupdate/{id}",[AdminController::class,"saveupdate"]);

Route::post("reservation",[AdminController::class,"reservation"]);

Route::get("viewreservation",[AdminController::class,"viewreservation"]);

Route::get("adminchef",[AdminController::class,"viewchef"]);

Route::post("uploadchef",[AdminController::class,"uploadchef"]);

Route::get("deletechef/{id}",[AdminController::class,"deletechef"]);

Route::get("updatechef/{id}",[AdminController::class,"updatechef"]);

Route::post("saveupdchef/{id}",[AdminController::class,"saveupdchef"]);

Route::post("addcart/{id}",[HomeController::class,"addcart"]);

Route::get("showcart/{id}",[HomeController::class,"showcart"]);

Route::get("removecart/{id}",[HomeController::class,"removecart"]);

Route::post("orderconfirm",[HomeController::class,"orderconfirm"]);

Route::get("orders",[AdminController::class,"orders"]);

Route::get("searchorder",[AdminController::class,"searchorder"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
