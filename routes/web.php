<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/DY.ID/login', [UserController::class, 'login'])->name('users.login');
    Route::get('/DY.ID/register', [ProjectController::class, 'register'])->name('users.create');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/viewProduct', [ProjectController::class, 'viewProduct'])->name('admin.viewProduct');
    Route::get('/admin/editProduct{product}', [ProjectController::class, 'editProduct'])->name('admin.editProduct');
    Route::put('/admin/updateProduct{product}', [ProjectController::class, 'updateProduct'])->name('admin.updateProduct');
    Route::get('/admin/addProduct', [ProjectController::class, 'addProduct'])->name('admin.addProduct');
    Route::post('/admin/storeProduct', [ProjectController::class, 'storeProduct'])->name('admin.storeProduct');
    Route::delete('/admin/deleteProduct{product}', [ProjectController::class, 'deleteProduct'])->name('admin.deleteProduct');
    Route::get('/admin/viewCategory', [ProjectController::class, 'viewCategory'])->name('admin.viewCategory');
    Route::get('/admin/addCategory', [ProjectController::class, 'addCategory'])->name('admin.addCategory');
    Route::post('/admin/storeCategory', [ProjectController::class, 'storeCategory'])->name('admin.storeCategory');
    Route::delete('/admin/deleteCategory{category}', [ProjectController::class, 'deleteCategory'])->name('admin.deleteCategory');
    Route::get('/admin/editCategory{category}', [ProjectController::class, 'editCategory'])->name('admin.editCategory');
    Route::put('/admin/updateCategory{category}', [ProjectController::class, 'updateCategory'])->name('admin.updateCategory');
});

Route::get('/DY.ID/logout', [UserController::class, 'logout'])->name('users.logout');
Route::get('/DY.ID/home', [ProjectController::class, 'home'])->name('home');
Route::post('/DY.ID/loginProcess', [UserController::class, 'loginProcess'])->name('users.loginProcess');

Route::post('/DY.ID/registerProcess', [ProjectController::class, 'store'])->name('users.store');
Route::get('/DY.ID/details{id}', [ProjectController::class, 'details']);
Route::get('/DY.ID/search', [ProjectController::class, 'search'])->name('users.search');

Route::get('/DY.ID/cart', [ProjectController::class, 'cart'])->name('users.cart');
Route::post('/DY.ID/storeCartItem{product}', [ProjectController::class, 'storeCartItem'])->name('users.storeCartItem');
Route::delete('/DY.ID/deleteCartItem{cart_item}', [ProjectController::class, 'deleteCartItem'])->name('users.deleteCartItem');
Route::get('/DY.ID/editCartItem{cart_item}', [ProjectController::class, 'editCartItem'])->name('users.editCartItem');
Route::put('/DY.ID/updateCartItem{cart_item}', [ProjectController::class, 'updateCartItem'])->name('users.updateCartItem');
Route::post('/DY.ID/storeCart{cart}', [ProjectController::class, 'storeCart'])->name('users.storeCart');
Route::post('/DY.ID/checkout', [ProjectController::class, 'checkout'])->name('users.checkout');
Route::get('/DY.ID/historyTransaction', [ProjectController::class, 'historyTransaction'])->name('users.historyTransaction');

Auth::routes();