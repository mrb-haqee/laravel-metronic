<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\MenuSub;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 2770f57291d64ceeb1210a6dc1953988e94f941f
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
<<<<<<< HEAD
        View::composer('*', function ($view) {
            $menus = Menu::with('menuSub')->get();
=======
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
>>>>>>> 2770f57291d64ceeb1210a6dc1953988e94f941f
            $view->with('menus', $menus);
        });
        // View::composer('layout.partials.sidebar-layout.sidebar._menu', function ($view) {
        //     $menus = MenuSub::all()->groupBy('group')->map->toArray();
        //     $view->with('menus', $menus);
        // });
    }
}
