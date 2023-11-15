<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;


Route::middleware('auth','role:admin')->group(function () {

    Route::get('roles.permission',[RoleController::class,'getRolePermission'])->name('roles.permission');
    Route::post('roles.permission.store',[RoleController::class,'storeRolePermission'])->name('roles.permission.store');
    Route::resources([
        'roles'=> RoleController::class,
        'permissions'=> PermissionController::class
    ]);
});