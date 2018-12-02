<?php

namespace Toanna\SAFLaravelToolkit\Console;

class BusinessMakeCommand extends \Toanna\Laravel5Layer\Console\BusinessMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:business';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Business Logic Class';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'saf:business {name}';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf business';
}
