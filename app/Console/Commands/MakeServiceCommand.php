<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeServiceCommand extends Command
{
    protected $signature = 'make:service {name}';

    protected $description = 'Create a new service class';

    public function handle()
    {
        $name = $this->argument('name');

        $serviceClassName = Str::studly($name) . 'Service';

        $servicePath = app_path('Services/' . $serviceClassName . '.php');

        if (file_exists($servicePath)) {
            $this->error('Service already exists!');
            return;
        }

        $stub = file_get_contents(__DIR__ . '/stubs/service.stub');
        $stub = str_replace('{{ServiceClass}}', $serviceClassName, $stub);

        file_put_contents($servicePath, $stub);

        $this->info('Service created successfully: ' . $servicePath);
    }
}
