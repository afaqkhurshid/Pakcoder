<?php

namespace App\Providers;

use App\Models\Stacks;
use App\Models\Technology;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LayoutServiceProvider extends ServiceProvider
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
        // Share technologies and stacks with all views
        View::composer('*', function ($view) {
            $technologies = Technology::select('name', 'slug')->get();
            $stacks = Stacks::select('name', 'slug')->get();
            
            $view->with([
                'technologies' => $technologies,
                'stacks' => $stacks
            ]);
        });
    }
}