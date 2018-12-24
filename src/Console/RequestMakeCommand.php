<?php

namespace Toanna\SAFLaravelToolkit\Console;

class RequestMakeCommand extends \Toanna\Laravel5Layer\Console\RequestMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:request';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Form Request Class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf request';
}
