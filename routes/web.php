<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
// Your changes
=======
// Changes from the remote branch
>>>>>>> commit-hash

Route::get('/', function () {
    return view('welcome');
});
=======
use App\Http\Controllers\CourseController;


Route::get('/', [CourseController::class, 'index']);
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');

>>>>>>> e2ca47d (updated course page)
