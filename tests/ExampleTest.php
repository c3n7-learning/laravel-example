<?php

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(\Tefabi\LaravelExample\Commands\LaravelExampleCommand::class)->assertExitCode(\illuminate\Console\Command::SUCCESS);
});
