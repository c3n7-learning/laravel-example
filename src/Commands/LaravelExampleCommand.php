<?php

namespace Tefabi\LaravelExample\Commands;

use Illuminate\Console\Command;

class LaravelExampleCommand extends Command
{
    public $signature = 'my-command';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done in my command');

        return self::SUCCESS;
    }
}
