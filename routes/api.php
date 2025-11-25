<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::post("/products", [ProductController::class, "createProduct"]);
Route::get("/products", [ProductController::class, "getProducts"]);

