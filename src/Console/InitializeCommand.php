<?php
namespace Toanna\SAFLaravelToolkit\Console;

class InitializeCommand extends \Toanna\Laravel5Layer\Console\InitializeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = '5l:init';
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
    protected $signature = '5l:init';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = '5l init';

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