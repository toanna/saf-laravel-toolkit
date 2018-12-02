<?php

namespace Toanna\SAFLaravelToolkit\Console;

class AbstractionMakeCommand extends \Toanna\Laravel5Layer\Console\AbstractionMakeCommand
{
    protected $name = 'saf:abstraction';
    protected $description = 'Create a new Abstraction Interface';
    protected $signature = 'saf:abstraction {name}';
    protected $type = 'saf abstraction';
}