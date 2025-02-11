<?php

namespace Ehystiv\ServRepoMaker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ehystiv\ServRepoMaker\ServRepoMaker
 */
class ServRepoMaker extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ehystiv\ServRepoMaker\ServRepoMaker::class;
    }
}
