<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\CategoryController;

// FRONTEND
Route::get('/', [HomeController::class, 'Show_Page_Home']);
Route::get('/trang-chu', [HomeController::class, 'Show_Page_Home']);
Route::get('/thong-tin', [HomeController::class, 'Show_About']);

//BACKEND
Route::get('/admin', [AdminControllers::class, 'index']);
Route::get('/dashboard', [AdminControllers::class, 'Show_Dashboard']);
Route::post('/admin-dashboard', [AdminControllers::class, 'Dashboard']);
Route::get('/log-out', [AdminControllers::class, 'Logout']);
Route::get('/profile-admin', [AdminControllers::class, 'Show_profile']);

//CATEGORY PRODUCTS
Route::get('/all-category-product', [CategoryController::class, 'Show_Category']);
Route::get('/add-category-product', [CategoryController::class, 'Add_Category']);
Route::post('/add-category-action', [CategoryController::class, 'Add_Category_Action']);
Route::get('/delete-category-product/{category_id}', [CategoryController::class, 'Delete_Category_product']);

Route::get('/edit-category-product/{caterory_id}', [CategoryController::class, 'Edit_Category_product']);
Route::post('/update-category-action/{caterory_id}', [CategoryController::class, 'Update_Category_product']);

Route::get('/active-category-product/{caterory_id}', [CategoryController::class, 'Set_Active_category_product']);
Route::get('/unactive-category-product/{caterory_id}', [CategoryController::class, 'Set_UnActive_category_product']);
