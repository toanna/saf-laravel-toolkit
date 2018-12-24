<?php

namespace Toanna\SAFLaravelToolkit\Console;

class ConsoleMakeCommand extends \Toanna\Laravel5Layer\Console\ConsoleMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Artisan Command';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf command';
}
