<?php

namespace Portable\FilaCms\Tests\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider;
use Orchestra\Testbench\Foundation\Events\ServeCommandEnded;
use Orchestra\Testbench\Foundation\Events\ServeCommandStarted;

class WorkbenchServiceProvider extends EventServiceProvider
{
    protected $listen = [
        ServeCommandStarted::class => [
            'Portable\FilaCms\Tests\Listeners\ServeCommandStartedListener',
        ],
        ServeCommandEnded::class => [
            'Portable\FilaCms\Tests\Listeners\ServeCommandStoppedListener',
        ],
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        parent::register();
        if(class_exists('Workbench\App\Models\User')) {
            config(['auth.providers.users.model' => 'Workbench\App\Models\User']);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    }
}
