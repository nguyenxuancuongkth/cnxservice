<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Model\NotificationMessage;
use App\Model\DeviceSubcription;
use DB;
use App\Http\Controllers\Notification\PushMessageController as PushMessageController;
use App\Http\Controllers\Notification\MessageController as MessageController;

class TestController extends Controller
{
    protected $pushMessage;
    protected $messageController;    
    public function __construct(PushMessageController $pushMessageController,  MessageController $messageController)
    {
        $this->pushMessage = $pushMessageController;
        $this->messageController = $messageController;        
    }    
    public function test() {
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

