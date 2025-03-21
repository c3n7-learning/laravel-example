<?php

use Illuminate\Console\Command;
use Tefabi\LaravelExample\Commands\LaravelExampleCommand;

use function Pest\Laravel\artisan;

it('can output the configured value', function () {
    artisan(LaravelExampleCommand::class)
        ->expectsOutput(config('example.command_output'))
        ->assertExitCode(Command::SUCCESS);
});

it('can output another value', function () {
    config()->set('example.command_output', 'something else');

    artisan(LaravelExampleCommand::class)
        ->expectsOutput('something else')
        ->assertExitCode(Command::SUCCESS);
});
