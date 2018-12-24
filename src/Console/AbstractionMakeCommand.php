<?php

namespace Toanna\SAFLaravelToolkit\Console;

class AbstractionMakeCommand extends \Toanna\Laravel5Layer\Console\AbstractionMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:abstraction';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Abstraction Interface';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf abstraction';
}