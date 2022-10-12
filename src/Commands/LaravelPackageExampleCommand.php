<?php

namespace Iamopk\LaravelPackageExample\Commands;

use Illuminate\Console\Command;

class LaravelPackageExampleCommand extends Command
{
    public $signature = 'laravel-package-example';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done' . config('package-example.aaa'));

        return self::SUCCESS;
    }
}
