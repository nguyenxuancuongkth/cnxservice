<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Notification\PushMessageController as PushMessageController;
use App\Model\NotificationMessage;
use DB;
use App\Http\Controllers\Notification\MessageController as MessageController;

class PushNotifications extends Command
{
    protected $pushMessage;
    protected $messageController;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'push:notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Firebase Push Notification';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(PushMessageController $pushMessageController, MessageController $messageController)
    {
        parent::__construct();
        $this->pushMessage = $pushMessageController;
        $this->messageController = $messageController;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $now = time();
        $noti = DB::table('notification_message')->where([
            ['push_time', '<=', $now],
            ['status', '<>', 1]
        ])->get();
        foreach ($noti as $key => $value) {
            $this->pushMessage->pushMessage($value->id);
            $this->messageController->update($value->id);
        }

    }
}
