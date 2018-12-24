<?php

namespace Toanna\SAFLaravelToolkit\Console;

class ResourceMakeCommand extends \Toanna\Laravel5Layer\Console\ResourceMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:resource';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Resource';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf resource';
}
