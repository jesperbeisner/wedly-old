<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;
use RuntimeException;

final class ClearBootstrapCacheCommand extends Command
{
    /** @var string */
    protected $signature = 'app:clear-bootstrap-cache';

    /** @var string|null */
    protected $description = 'Clear bootstrap cache';

    public function handle(): void
    {
        $this->components->info('Clearing bootstrap cache!');

        $result = Process::run('rm -f ' . base_path('bootstrap/cache/*.php'));

        if (!$result->successful()) {
            throw new RuntimeException('Clearing bootstrap cache did not work!');
        }
    }
}
