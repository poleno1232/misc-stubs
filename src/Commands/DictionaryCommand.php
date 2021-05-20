<?php

namespace Polion1232\MiscStubs\Commands;

use Illuminate\Console\GeneratorCommand;

class DictionaryCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:dictionary';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new empty service';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service';

    public function getStub()
    {
        return __DIR__ . '\\stubs\\concrete_dictionary.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Services';
    }
}
