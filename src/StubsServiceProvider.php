<?php

namespace Polion1232\MiscStubs;

use Illuminate\Support\ServiceProvider;
use Polion1232\MiscStubs\Commands\ServiceCommand;
use Polion1232\MiscStubs\Commands\DictionaryCommand;

class StubsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ServiceCommand::class,
                DictionaryCommand::class,
            ]);
        }
    }
}
