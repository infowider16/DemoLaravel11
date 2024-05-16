<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomTask extends Command
{
    protected $signature = 'custom:task';
    protected $description = 'Description of your custom task';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle() {
        $this->info('my test Custom task executed successfully!');
    }
}
