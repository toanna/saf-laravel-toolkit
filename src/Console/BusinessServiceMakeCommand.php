<?php

namespace Toanna\SAFLaravelToolkit\Console;

class BusinessServiceMakeCommand extends \Toanna\Laravel5Layer\Console\BusinessServiceMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:business_service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Business Service Class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf business_service';
}
