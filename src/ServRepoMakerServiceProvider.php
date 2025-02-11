<?php

namespace Ehystiv\ServRepoMaker;

use Ehystiv\ServRepoMaker\Commands\RepositoryMakeCommand;
use Ehystiv\ServRepoMaker\Commands\ServiceMakeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ServRepoMakerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('servrepomaker')
            // ->hasConfigFile()
            ->hasCommand(ServiceMakeCommand::class)
            ->hasCommand(RepositoryMakeCommand::class);
    }
}
