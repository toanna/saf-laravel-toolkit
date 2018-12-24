<?php
namespace Toanna\SAFLaravelToolkit\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InitializeGitHooksCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'saf:git-hooks-init';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init Git Hooks';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'saf git hooks init';

    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * InitializeGitHooksCommand constructor.
     * @param Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Main Handle
     */
    public function handle()
    {
        $basePath = base_path();

        /* Create dir if not exists */
        $gitHooksPath = $this->makeDirectory($basePath.'/.git/hooks');

        /* Copy commit-msg to .git/hooks */
        $this->files->copy(__DIR__ . '/../Common/Git/commit-msg', $gitHooksPath.'/commit-msg');

        /* Create php-git-hooks.yml in app root */
        $this->files->copy(__DIR__ . '/../Common/Git/php-git-hooks.yml', $basePath.'/php-git-hooks.yml');

        /* Final */
        $this->line('Success initialization.');
    }

    /**
     * MATERIALS
     */

    protected function makeDirectory($path)
    {
        if (! $this->files->isDirectory($path)) {
            $this->files->makeDirectory($path, 0777, true, true);
        }

        return $path;
    }
}