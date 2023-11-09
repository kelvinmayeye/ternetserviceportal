<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;


Route::middleware('auth')->group(function () {

    Route::resources([
        'roles'=> RoleController::class,
    ]);
});