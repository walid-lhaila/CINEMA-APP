<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeRepositoryCommand extends Command
{
    protected $signature = 'make:repository {name}';

    protected $description = 'Create a new repository class';

    public function handle()
    {
        $name = $this->argument('name');

        $repositoryClassName = Str::studly($name) . 'Repository';

        $repositoryPath = app_path('Repositories/' . $repositoryClassName . '.php');

        if (file_exists($repositoryPath)) {
            $this->error('Repository already exists!');
            return;
        }

        $stub = file_get_contents(__DIR__ . '/stubs/repository.stub');
        $stub = str_replace('{{RepositoryClass}}', $repositoryClassName, $stub);

        file_put_contents($repositoryPath, $stub);

        $this->info('Repository created successfully: ' . $repositoryPath);
    }
}
