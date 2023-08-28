<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;
use RuntimeException;

final class ClearLogsCommand extends Command
{
    /** @var string */
    protected $signature = 'app:clear-logs';

    /** @var string|null */
    protected $description = 'Clear log files';

    public function handle(): void
    {
        $this->components->info('Clearing logs!');

        $result = Process::run('rm -f ' . storage_path('logs/*.log'));

        if (!$result->successful()) {
            throw new RuntimeException('Clearing logs did not work!');
        }
    }
}
