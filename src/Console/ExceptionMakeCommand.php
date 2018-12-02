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
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'saf:exception {name}';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf exception';
}
