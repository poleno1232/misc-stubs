<?php

namespace Polion1232\MiscStubs\Commands;

use Illuminate\Console\GeneratorCommand;

class ServiceCommand extends GeneratorCommand
{
    public function getStub()
    {
        return $this->resolveStubPath('/stubs/service.stub');
    }
}