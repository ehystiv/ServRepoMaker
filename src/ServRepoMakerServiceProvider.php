<?php

namespace Ehystiv\ServRepoMaker;

use Ehystiv\ServRepoMaker\Commands\ServRepoMakerCommand;
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
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_servrepomaker_table')
            ->hasCommand(ServRepoMakerCommand::class);
    }
}
