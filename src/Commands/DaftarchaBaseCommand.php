<?php

namespace Daftarcha\DaftarchaBase\Commands;

use Illuminate\Console\Command;

class DaftarchaBaseCommand extends Command
{
    public $signature = 'laravel-projects-base';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
