<?php

namespace oe800\Special\Listeners;

use Flarum\Event\ConfigureWebApp;
use Illuminate\Contracts\Events\Dispatcher;

class AddClientAssets
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureWebApp::class, [$this, 'addAssets']);
    }

    public function addAssets(ConfigureWebApp $event)
    {
        if ($event->isForum()) {
            $event->addAssets([
                __DIR__.'/../../less/extension.less',
            ]);
        }
    }
}
