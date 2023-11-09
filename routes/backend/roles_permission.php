<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;


Route::middleware('auth')->group(function () {

    Route::resources([
        'roles'=> RoleController::class,
        'permissions'=> PermissionController::class
    ]);
});