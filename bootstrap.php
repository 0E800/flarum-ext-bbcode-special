<?php

namespace oe800\Special;

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->subscribe(Listeners\AddBBCode::class);
    $events->subscribe(Listeners\AddClientAssets::class);
};
