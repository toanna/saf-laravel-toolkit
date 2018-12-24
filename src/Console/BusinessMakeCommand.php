<?php

namespace Toanna\SAFLaravelToolkit\Console;

class BusinessMakeCommand extends \Toanna\Laravel5Layer\Console\BusinessMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:business';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Business Logic Class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf business';
}
