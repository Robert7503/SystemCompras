<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // SE CREO ESTA LINEA JUNTO CON SCHEMA DE LOGIN JETSTREAM

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
        Schema::defaultStringLength(191); // SE CREO ESTA LINEA AL INSTALAR LOGIN JETSTREAM
    }
}