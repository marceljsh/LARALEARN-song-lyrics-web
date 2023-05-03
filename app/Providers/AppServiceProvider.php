<?php

// Copyright (C) 2023 Marcel "kojo" Joshua
// Github   : https://www.github.com/marceljsh
// Linkedin : https://www.linkedin.com/in/marceljsh

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        Gate::define('admin', function (User $user) {
            $admins = ['veaueed', 'coleworld', 'chaewon'];
            return in_array($user->username, $admins);
        });
        
    }
}
