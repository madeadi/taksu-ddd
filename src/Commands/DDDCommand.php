<?php

namespace Taksu\DDD\Commands;

use Illuminate\Console\Command;

class DDDCommand extends Command
{
    public $signature = 'ddd';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
