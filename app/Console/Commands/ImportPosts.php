<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports posts from the old site.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
