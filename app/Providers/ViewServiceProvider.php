<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\MenuSub;
use Illuminate\Support\Facades\Log;
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
        View::composer('layout.partials.sidebar-layout.sidebar._menu', function ($view) {
            $menus = MenuSub::all()->reduce(
                function ($carry, $item) {
                    $carry[$item->group][] = $item->toArray();
                    return $carry;
                }
            );

            $view->with('menus', $menus);
        });

        View::composer('layout.partials.header-layout.header._menu._menu', function ($view) {
            $menus = Menu::all(); // Ambil data menu dari database
            $view->with('menus', $menus);
        });
    }
}
