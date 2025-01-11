<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\MenuSub;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $menus = Menu::with('menuSub')->get();
            $view->with('menus', $menus);
        });
        // View::composer('layout.partials.sidebar-layout.sidebar._menu', function ($view) {
        //     $menus = MenuSub::all()->groupBy('group')->map->toArray();
        //     $view->with('menus', $menus);
        // });
    }
}
