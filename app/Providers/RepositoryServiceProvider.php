<?php

namespace App\Providers;

use App\Interfaces\ContractorRepositoryInterface;
use App\Repositories\ContractorRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ContractorRepositoryInterface::class, ContractorRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
