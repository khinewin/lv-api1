<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
//Create Product
Route::post("/products", [ProductController::class, "createProduct"]);

//get All products
Route::get("/products", [ProductController::class, "getProducts"]);

//get product by id
Route::get("/products/id/{product_id}", [ProductController::class, "getProductById"]);

//delete product by id
Route::delete("/products/id/{product_id}", [ProductController::class, "deleteProduct"]);

