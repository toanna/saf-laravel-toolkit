<?php

namespace Toanna\SAFLaravelToolkit\Console;

class EloquentMakeCommand extends \Toanna\Laravel5Layer\Console\EloquentMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:eloquent';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Eloquent ORM Class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf eloquent';
}
