<?php

namespace Toanna\SAFLaravelToolkit\Console;

class ExceptionMakeCommand extends \Toanna\Laravel5Layer\Console\ExceptionMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:exception';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new custom Exception Class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf exception';
}
