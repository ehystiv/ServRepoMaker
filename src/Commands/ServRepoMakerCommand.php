<?php

namespace Ehystiv\ServRepoMaker\Commands;

use Illuminate\Console\Command;

class ServRepoMakerCommand extends Command
{
    public $signature = 'servrepomaker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
