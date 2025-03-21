<?php

use Illuminate\Console\Command;
use Tefabi\Example\Commands\ExampleCommand;

use function Pest\Laravel\artisan;

it('can output the configured value', function () {
    artisan(ExampleCommand::class)
        ->expectsOutput(config('example.command_output'))
        ->assertExitCode(Command::SUCCESS);
});

it('can output another value', function () {
    config()->set('example.command_output', 'something else');

    artisan(ExampleCommand::class)
        ->expectsOutput('something else')
        ->assertExitCode(Command::SUCCESS);
});
