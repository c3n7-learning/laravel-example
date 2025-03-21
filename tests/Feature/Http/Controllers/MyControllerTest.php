<?php

use Tefabi\Example\Http\Controllers\MyController;

use function Pest\Laravel\get;

it('has a route', function () {
    get(action([MyController::class, 'index']))
        ->assertOk()
        ->assertSee('ok');
});
