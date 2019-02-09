<?php
namespace kweber\OnionEngine\App\Console\Commands\Installer;

use Illuminate\Console\Command;

class Installer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'onionengine:install';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publishing and installing OnionEngine';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("OnionEngine Installer");

        $this->info('Publishing configs');
        $this->call('vendor:publish', [
            '--tag' => 'oe-config'
        ]);

        $this->info('Publishing adminator assets');
        $this->call('vendor:publish', [
            '--tag' => 'oe-admin-assets', '--force' => true,
        ]);
    }
}
