<?php

namespace Toanna\SAFLaravelToolkit\Console;

class ApiControllerMakeCommand extends \Toanna\Laravel5Layer\Console\ApiControllerMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:api_controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new API Controller Class';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'saf:api_controller {name}';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf api_controller';
}