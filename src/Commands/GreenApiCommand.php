<?php

namespace Maina401\green-api\Commands;

use Illuminate\Console\Command;

class green-apiCommand extends Command
{
    public $signature = 'green-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
