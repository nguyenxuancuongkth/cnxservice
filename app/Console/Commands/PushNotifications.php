<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PushNotifications extends Command
{
    protected $cloudMessageController;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:push';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Push Notification';

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
        
    }
}
