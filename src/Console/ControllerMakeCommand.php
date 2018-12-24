<?php

namespace Toanna\SAFLaravelToolkit\Console;

class ControllerMakeCommand extends \Toanna\Laravel5Layer\Console\ControllerMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Controller Class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf controller';
}
