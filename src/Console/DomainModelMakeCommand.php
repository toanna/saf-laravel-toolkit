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
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'saf:domain_model {name}';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf domain_model';
}
