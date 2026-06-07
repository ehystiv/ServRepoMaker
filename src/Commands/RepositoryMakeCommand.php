<?php

declare(strict_types=1);

namespace Ehystiv\ServRepoMaker\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Contracts\Console\PromptsForMissingInput;

final class RepositoryMakeCommand extends GeneratorCommand implements PromptsForMissingInput
{
    protected $signature = 'make:repository {name : The repository name}';

    protected $description = 'Create a new Repository';

    protected $type = 'class';

    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/repository.stub';
    }

    /** @param string $rootNamespace */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return config('servrepomaker.repository_namespace', 'App\\Http\\Repositories');
    }

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array<string, string>
     */
    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'name' => 'What should it be called?',
        ];
    }
}
