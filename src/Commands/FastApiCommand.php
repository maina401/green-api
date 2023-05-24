<?php

namespace Tetra\FastApi\Commands;

use Illuminate\Console\Command;

class FastApiCommand extends Command
{
    public $signature = 'fastapi';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
