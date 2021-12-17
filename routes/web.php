<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController ;
use App\Http\Controllers\PostController ;

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

Route :: get('/student', [StudentController::class , 'fetchstudent']) ;


// Route::get('/', function () {
//     return view('welcome');
// });

/// Eloquent ORM
Route :: get('/add-post', [PostController::class , 'addpost']);
Route :: post('/create-post', [PostController::class,'createPost'])->name('create.post');
Route :: get('/get-post', [PostController::class, 'getPost'])->name('get.post');
