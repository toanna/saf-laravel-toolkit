<?php

namespace Toanna\SAFLaravelToolkit\Console;

class DomainModelMakeCommand extends \Toanna\Laravel5Layer\Console\DomainModelMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:domain_model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Domain Model Class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf domain_model';
}
