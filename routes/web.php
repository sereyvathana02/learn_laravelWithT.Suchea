<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;
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
    return redirect()->route("dashboard");
});

Route::get("/dashboard", [PublicController::class, "index"])->name("dashboard");
Route::get("/category", [CategoryController::class, "index"])->name("category.index");
Route::get("/category/insert", [CategoryController::class, "insert"])->name("category.insert");
Route::post("/category/create", [CategoryController::class, "create"])->name("category.create");
Route::get("/category/{id}/edit", [CategoryController::class, 'edit'])->name("category.edit");
Route::put("/category/{id}/update", [CategoryController::class, "update"])->name("category.update");
Route::delete("/category/{id}/delete", [CategoryController::class, "delete"])->name("category.delete");

Route::get("/student", [StudentController::class, 'index'])->name("student.index");
Route::get("/student/insert", [StudentController::class, 'insert'])->name("student.insert");
Route::post("/student/create", [StudentController::class, 'create'])->name("student.create");
Route::get("/student/{id}/edit", [StudentController::class, 'edit'])->name("category.edit");
Route::put("/student/{id}/update", [StudentController::class])->name("student.update");
Route::delete("/student/delete", [StudentController::class])->name("student.delete");
