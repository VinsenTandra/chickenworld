<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;

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

Route::get("/", [AuthController::class, 'index'])->name('login');
Route::post("/login", [AuthController::class, 'login'])->name("login-auth");
Route::get("/logout", [AuthController::class, 'logout'])->name("logout");

Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");

Route::get("/produk", [ProductController::class, "index"])->name("product");
Route::get("/produk/tambah", [ProductController::class, "tambah"])->name("product-tambah");
Route::post("/produk/tambah", [ProductController::class, "save"])->name("product-save");

Route::get("/penjualan", [PenjualanController::class, "index"])->name("penjualan");
Route::get("/penjualan/tambah", [PenjualanController::class, "tambah"])->name("penjualan-tambah");
