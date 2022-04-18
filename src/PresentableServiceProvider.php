<?php

namespace Traqza\Presentable;

use Illuminate\Support\ServiceProvider;
use Traqza\Presentable\Console\PresentableCommand;

class PresentableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PresentableCommand::class,
            ]);
        }
    }
}
