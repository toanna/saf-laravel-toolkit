<?php
namespace Toanna\SAFLaravelToolkit\Console;

class InitializeCommand extends \Toanna\Laravel5Layer\Console\InitializeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:init';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init 5-layer folder structure';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'saf:init';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf init';

    /**
     * CUSTOM
     */

    protected function filesToCreate()
    {

    }

    protected function extendHandle()
    {

    }
}