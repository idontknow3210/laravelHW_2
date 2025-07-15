<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController as GroupController;
use App\Http\Controllers\StudentController as StudentController;

Route::get('/', function () {
    return redirect("groups");
});

Route::resource('/groups', GroupController::class)
    ->except("edit", "update", "destroy");
Route::resource('/groups.students', StudentController::class)
    ->except("edit", "update", "destroy");
