<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use App\Models\Category;

trait Init
{
    /**
     * Refresh the in-memory database.
     *
     * @return void
     */
    protected function refreshInMemoryDatabase()
    {
        $this->artisan('migrate');

        $this->artisan('db:seed');

        view ()->share ('categories', Category::all ()); 

        $this->app[Kernel::class]->setArtisan(null);
    }
}