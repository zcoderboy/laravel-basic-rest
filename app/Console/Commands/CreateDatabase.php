<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:database {database}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a specified database';

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
        return DB::connection('mysql_no_database')->statement('CREATE DATABASE IF NOT EXISTS '.$this->argument('database'));
    }
}
