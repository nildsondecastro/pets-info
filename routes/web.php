<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PermissionProfileController;
use App\Http\Controllers\ProfilePlanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', [App\Http\Controllers\web\HomeController::class, 'home'])->name('home');


Auth::routes();

Route::get('/plan/{plans_id}', [App\Http\Controllers\HomeController::class, 'plan'])->name('plan.subscription');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contato', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::middleware(['auth'])->group(function () {
        
    Route::get('plano/ativar_desativar/{id}', [PlanController::class, 'ativar_desativar'])->name('plano.ativar_desativar');
    Route::resource('planos', PlanController::class);

    Route::resource('detalhes_do_plano', DetailController::class);

    Route::post('profiles/permissions/store', [PermissionProfileController::class, 'store'])->name('profiles.permissions.store');
    Route::get('profiles/{id}/permissions', [PermissionProfileController::class, 'permissions'])->name('profiles.permissions');
    Route::delete('profiles/permissions/delete', [PermissionProfileController::class, 'destroy'])->name('profiles.permissions.destroy');

    Route::get('perfil/ativar_desativar/{id}', [ProfileController::class, 'ativar_desativar'])->name('perfil.ativar_desativar');
    Route::resource('perfis', ProfileController::class);

    Route::get('permission/ativar_desativar/{id}', [PermissionController::class, 'ativar_desativar'])->name('permission.ativar_desativar');
    Route::resource('permissions', PermissionController::class);

    Route::resource('planos_perfis', ProfilePlanController::class);

    Route::resource('contacts', ContactController::class);
    Route::resource('shops', ShopController::class);
    Route::resource('users', UserController::class);

});


