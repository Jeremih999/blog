<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\catController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// show index page
Route::get('/', [blogController::class, 'index'] );

//show admin page
Route::get('/admin', [blogController::class, 'admin'])->middleware('auth');

//show about page
Route::get('/about', [blogController::class, 'about']);

//show blog page
Route::get('/blog', [blogController::class, 'blog']);

//show contact page
Route::get('/contact', [blogController::class, 'contact']);

//show services page
Route::get('/service', [blogController::class, 'services']);

 //show add post page
 Route::get('/admin/add-post', [blogController::class, "addPost"])->middleware('auth');

 //store post
Route::post('/admin', [blogController::class, "storePost"])->middleware('auth');

//show edit post page
 Route::get('/admin/edit-post/{id}', [blogController::class, "editPost"])->middleware('auth');

 
//update post page
Route::put('/admin/{id}', [blogController::class, "updatePost"])->middleware('auth');

//delete post page
Route::delete('/admin/{id}', [blogController::class, "destroy"])->middleware('auth');


/*
CATEGORY PART
*/
 //show add category page
 Route::get('/admin/add-category', [catController::class, "addCategory"])->middleware('auth');

 //store category
Route::post('/admin/manage-category', [catController::class, "storeCategory"])->middleware('auth');

//show edit category page
 Route::get('/admin/edit-category/{id}', [catController::class, "editCategory"])->middleware('auth');

 //show manage category page
Route::get('/admin/manage-category', [catController::class, "manageCategory"])->middleware('auth');

 
//update post page
Route::put('/admin/manage-category/{id}', [catController::class, "updateCat"])->middleware('auth');

//delete post page
Route::delete('/admin/manage-category/{id}', [catController::class, "destroy"])->middleware('auth');




//show sign in page
Route::get('/signin', [UserController::class, "signin"])->name("login")->middleware('guest');
//show sign up page
Route::get('/signup', [UserController::class, "signup"])->middleware('guest');

//store user
Route::post('/users', [UserController::class, 'store']);

//logout User
Route::post('/logout', [UserController::class, 'logout']);

//login user
Route::post("/user/authenticate", [UserController::class, "authenticate"]);

//show single post page
Route::get('/{id}', [blogController::class, "singlePost"]);