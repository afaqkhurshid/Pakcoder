<?php

namespace App\Providers;

use App\Models\ProjectStack;
use App\Models\ProjectTechnology;
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
            $technologies = ProjectTechnology::select('name', 'slug')->get();
            $stacks = ProjectStack::select('name')->get();
            
            $view->with([
                'technologies' => $technologies,
                'stacks' => $stacks
            ]);
        });
    }
}