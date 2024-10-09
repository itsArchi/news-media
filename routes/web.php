<?php

use App\Http\Controllers\adminCategoryController;
use App\Http\Controllers\adminNewsController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\frontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend
Route::get('/', [frontendController::class, 'index']);
Route::get('/category/{id}', [frontendController::class, 'category']);
Route::get('/newsIndex', [frontendController::class, 'newsIndex']);
Route::get('/detail/{id}', [frontendController::class, 'detail']);

// Category
Route::get('/admin', [adminController::class, 'index']);
Route::get('/admin/category', [adminCategoryController:: class, 'index']);
Route::get('/admin/category/input', [adminCategoryController:: class, 'input']);
Route::post('/admin/category/save', [adminCategoryController:: class, 'save']);
Route::get('/admin/category/edit/{id}', [adminCategoryController:: class, 'edit']);
Route::post('/admin/category/update/{id}', [adminCategoryController:: class, 'update']);
Route::get('/admin/category/delete/{id}', [adminCategoryController:: class, 'delete']);

// News
Route::get('/admin/news', [adminNewsController:: class, 'index']);
Route::get('/admin/news/input', [adminNewsController:: class, 'input']);
Route::post('/admin/news/save', [adminNewsController:: class, 'save']);
Route::get('/admin/news/edit/{id}', [adminNewsController:: class, 'edit']);
Route::post('/admin/news/update/{id}', [adminNewsController:: class, 'update']);
Route::get('/admin/news/delete/{id}', [adminNewsController:: class, 'delete']);
Route::get('/admin/news/set-headline/{status}/{id}', [adminNewsController:: class, 'set_headline']);
Route::get('/admin/news/set-featured-news/{status}/{id}', [adminNewsController:: class, 'set_featured_news']);
