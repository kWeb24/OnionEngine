<?php

namespace Kweber\OnionEngine\App\Console\Commands\Installer;

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
        $this->info('OnionEngine Installer');
        $this->setupLaravel();
        $this->publishMigrations();
        $this->publishConfigs();
        $this->publishDependentConfigs();
        $this->publishAssets();
        $this->migrate();
        $this->seed();
        $this->call('route:clear');
        $this->info('OnionEngine installation complete');
    }

    /**
     * Setup Laravel.
     *
     * @return mixed
     */
    private function setupLaravel()
    {
        if ($this->confirm('Do you wish to generate authentication scaffolding?')) {
            $this->info('Creating Auth');
            $this->call('make:auth');
        } else {
            $this->info('Skipping authentication scaffolding');
        }
    }

    /**
     * Publish migrations.
     *
     * @return mixed
     */
    private function publishMigrations()
    {
        $this->info('Publishing migrations');
        $this->call('vendor:publish', [
            '--provider' => 'Spatie\Permission\PermissionServiceProvider',
            '--tag' => 'migrations',
        ]);
    }

    /**
     * Publish configs.
     *
     * @return mixed
     */
    private function publishConfigs()
    {
        $this->info('Publishing configs');
        $this->call('vendor:publish', [
            '--provider' => 'Kweber\OnionEngine\OnionEngineServiceProvider',
            '--tag' => 'oe-config',
        ]);
    }

    /**
     * Publish dependent packages configs.
     *
     * @return mixed
     */
    private function publishDependentConfigs()
    {
        if ($this->confirm('Do you wish to publish dependent package configs?')) {
            $this->info('Publishing spatie/laravel-permissions');
            $this->call('vendor:publish', [
                '--provider' => 'Spatie\Permission\PermissionServiceProvider',
                '--tag' => 'config',
            ]);

            $this->info('Publishing laravolt/avatar');
            $this->call('vendor:publish', [
                '--provider' => 'Laravolt\Avatar\ServiceProvider',
                '--tag' => 'config',
            ]);
        } else {
            $this->info('Skipping dependent package configs');
        }
    }

    /**
     * Publish assets.
     *
     * @return mixed
     */
    private function publishAssets()
    {
        $this->info('Publishing assets');
        $this->call('vendor:publish', [
            '--provider' => 'Kweber\OnionEngine\OnionEngineServiceProvider',
            '--tag' => 'oe-dashboard-assets',
            '--force' => true,
        ]);
    }

    /**
     * Run migrations.
     *
     * @return mixed
     */
    private function migrate()
    {
        $this->info('Running migrations');
        $this->call('migrate');
    }

    /**
     * Run seeders.
     *
     * @return mixed
     */
    private function seed()
    {
        if ($this->confirm('Do you wish to seed database?')) {
            $this->info('Running seeders');
            $this->call('db:seed', [
              '--class' => 'Kweber\\OnionEngine\\Database\\Seeds\\DatabaseSeeder',
            ]);
        } else {
            $this->info('Skipping database seeding');
        }
    }
}
