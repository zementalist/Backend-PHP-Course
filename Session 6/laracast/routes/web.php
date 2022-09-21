<?php

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
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

Route::get("/", [PostsController::class, 'index']);

Route::post("posts/", [PostsController::class, "store"]);

Route::get("/posts/create", [PostsController::class, "create"]);




Route::get("/page1", function() {
    return view("page1")->with("message", "Welcome to Larave");
});
Route::get("/page2", function() {
    return view("page2");
});

Route::get('/profile/{id}', function (int $id) {
    echo "Profile $id";
});
Route::get('/posts/{id}', function (int $id) {
    echo "Posts $id";
});

