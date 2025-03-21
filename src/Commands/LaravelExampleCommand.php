<?php

namespace Tefabi\LaravelExample\Commands;

use Illuminate\Console\Command;

class LaravelExampleCommand extends Command
{
    public $signature = 'my-command';

    public $description = 'My command';

    public function handle(): int
    {
        $text = config('example.command_output');

        $this->comment($text);

        return self::SUCCESS;
    }
}
