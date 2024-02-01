<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\RegisterServices;
use App\Interface\RegisterServiceInterface;

use App\Interface\RegisterInterface;
use App\Repository\RegisterRepository;

class RegisterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(RegisterServiceInterface::Class, RegisterServices::Class);
        $this->app->bind(RegisterInterface::Class, RegisterRepository::Class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
