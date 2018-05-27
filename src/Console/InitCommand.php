<?php
/**
 * Developed by Alireza Hamedashki.
 * Email: a.hamedashki@gmail.com
 * Mobile: +98 938 900 4559
 * Date: 5/23/2018
 * Time: 4:52 PM
 */

namespace Adlino\Locations\Console;

use Illuminate\Console\Command;

class InitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'locations:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize';

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
        $this->info('Execute migrate first, migrating ...');
        $this->call('migrate');
        $this->info('Seeding Data ...');
        $this->call('db:seed', ["--class" => "ProvincesTablesSeeder"]);
        $this->call('db:seed', ["--class" => "CountiesTablesSeeder"]);
        $this->call('db:seed', ["--class" => "CitiesTablesSeeder"]);
        $this->info('Done!');
    }
}