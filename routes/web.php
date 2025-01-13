<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Apps\Masterdata\MenuController;
use App\Http\Controllers\Apps\Masterdata\MenuSubController;
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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });

    Route::group(['prefix' => 'masterdata', 'as' => 'masterdata.'], function () {

        Route::group(['prefix' => 'menu', 'as' => 'menu.'], function () {
            Route::resource('/', MenuController::class);
            Route::resource('/detail', MenuSubController::class);
        });
        // // Resource lainnya
        // Route::resource('user', UserManagementController::class, ['as' => '']);
        // Route::resource('role', RoleManagementController::class, ['as' => '']);
        // Route::resource('permission', PermissionManagementController::class, ['as' => '']);
    });

    // $menuSubs = MenuSub::all()->map(fn($item)=>$item->only((new MenuSub())->getFillable()));


    // foreach (Menu::all() as $r) {
    //     // var_dump(App\Http\Controllers\MenuController::class);
    //     // Route::name($r->name)->get($r->uri, $r->controller);
    // }
});

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
