<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view("index");
});

Route::get("/index", [HomeController::class, "index"])->name("index");
Route::get("/contact", [HomeController::class, "contact"])->name("contact");
Route::get("/project", [HomeController::class, "project"])->name("project");
Route::get("/blog", [HomeController::class, "blog"])->name("blog");
Route::get("/resume", [HomeController::class, "resume"])->name("resume");


