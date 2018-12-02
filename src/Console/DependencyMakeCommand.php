<?php

namespace Toanna\SAFLaravelToolkit\Console;

class DependencyMakeCommand extends \Toanna\Laravel5Layer\Console\DependencyMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:dependency';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Dependency Class';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'saf:dependency {name}';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf dependency';
}
